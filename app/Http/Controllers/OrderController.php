<?php

namespace App\Http\Controllers;

use App\Models\{Cart, Order, OrderItem, Product};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Midtrans\Snap;

class OrderController extends Controller
{
    /**
     * Direct checkout a single product.
     */
    public function directCheckout(Request $request)
    {

        $user = Auth::user();

        // Pastikan user login
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login dulu.');
        }

        // Cek apakah user punya alamat
        $address = $user->addresses()->where('is_primary', 1)->first();
        if (!$address) {
            return back()->with('error', 'Silakan tambahkan alamat terlebih dahulu.');
        }

        // Validasi produk & quantity
        $product = Product::findOrFail($request->product_id);
        $quantity = (int) $request->quantity;

        if ($quantity < 1 || $quantity > $product->stock) {
            return back()->with('error', 'Jumlah tidak valid.');
        }

        // Buat order
        $order = Order::create([
            'user_id' => $user->id,
            'address_id' => $address->id,
            'total_amount' => $product->price * $quantity,
            'status' => 'pending',
        ]);

        // Tambah order item
        $order->items()->create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price,
            'subtotal' => $product->price * $quantity,
        ]);

        // Kurangi stok produk
        $product->decrement('stock', $quantity);

        return redirect()->route('orders.show', $order->id)
            ->with('success', 'Pesanan berhasil dibuat');
    }


    /**
     * Menangani logika "Beli Sekarang".
     * Menambahkan item ke keranjang dan mengarahkan ke halaman checkout.
     */
    public function buyNow(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $product = Product::findOrFail($request->product_id);
        $quantity = (int) $request->quantity;

        // Cek stok
        if ($quantity > $product->stock) {
            return back()->with('error', 'Stok produk tidak mencukupi.');
        }

        // Dapatkan atau buat keranjang untuk user
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Cek apakah produk sudah ada di keranjang
        $cartItem = $cart->items()->where('product_id', $product->id)->first();

        if ($cartItem) {
            // Jika sudah ada, update jumlahnya
            $cartItem->quantity = $quantity;
            $cartItem->price = $product->price; // Update harga jika ada perubahan
            $cartItem->save();
        } else {
            // Jika belum ada, buat item baru
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,
            ]);
        }

        // Arahkan ke halaman keranjang
        return redirect()->route('cart.index')->with('success', 'Produk siap untuk di-checkout!');
    }
    /**
     * Checkout all items in cart.
     */
    public function store(Request $request)
    {

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $addressId = $request->input('address_id', $user->addresses()->where('is_primary', 1)->value('id'));
        if (!$addressId) {
            return back()->with('error', 'Silakan pilih atau tambahkan alamat pengiriman dulu.');
        }

        $cart = Cart::with('items.product')->where('user_id', $user->id)->first();
        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang Anda kosong!');
        }

        try {
            $order = DB::transaction(function () use ($user, $addressId, $cart) {
                $order = Order::create([
                    'user_id'      => $user->id,
                    'transaction_id' => Str::random(8),
                    'address_id'   => $addressId,
                    'total_amount' => $cart->items->sum(fn($item) => $item->price * $item->quantity),
                    'status'       => 'pending',
                ]);

                $order->transactions()->create([
                    'payment_method' => 'midtrans',
                    'amount'         => $order->total_amount,
                    'status'         => 'pending',
                ]);

                // insert order items, kurangi stok, hapus cart dll...
                // ...

                return $order;
            });

            // ==== bagian Midtrans Snap ====
            $params = [
                'transaction_details' => [
                    'order_id' => 'TRX-' . $order->id . '-' . Str::random(5),
                    'gross_amount' => $order->total_amount,
                ],
                'customer_details' => [
                    'first_name' => $user->name,
                    'email'      => $user->email,
                    'phone'      => $order->address->phone,
                ],
                'enabled_payments' => [
                    'credit_card',
                    'gopay',
                    'qris',
                    'bca_va',
                    'bni_va',
                    'bri_va'
                ],
                'callbacks' => [
                    'finish'  => route('orders.finish'),   // sukses bayar
                    // 'pending' => route('orders.pending'),  // belum bayar
                    'error'   => route('orders.unfinish'),   // gagal bayar
                ],
            ];

            $auth = base64_encode(config('services.midtrans.server_key') . ':');
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $auth,
            ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);

            if ($response->successful()) {
                $body = $response->json();

                // simpan snap_token ke tabel transaksi
                $order->transactions()->first()->update([
                    'snap_token' => $body['token'] ?? null,
                ]);

                $cart->items()->delete();
                $cart->delete();
                // redirect ke halaman Snap Midtrans
                return redirect()->away($body['redirect_url']);
            } else {
                return back()->with('error', 'Gagal membuat transaksi Midtrans: ' . $response->body());
            }
            // ==== end Midtrans Snap ====

        } catch (\Exception $e) {
            return redirect()->route('checkout.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }



    public function checkout()
    {
        $user = Auth::user(); // Ambil user yang sedang login
        $cart = Cart::with('items.product')
            ->where('user_id', $user->id)
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index')
                ->with('error', 'Keranjang masih kosong!');
        }

        // Ambil semua alamat milik user
        $addresses = $user->addresses()->get();

        return view('checkout.index', [
            'cart'      => $cart,
            'items'     => $cart->items,
            'addresses' => $addresses, // Kirim data alamat ke view
        ]);
    }
    public function thankYou(Order $order)
    {
        // Pastikan order ini milik user yang sedang login
        if ($order->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('orders.thank_you', [
            'order' => $order
        ]);
    }
    public function finish(Request $request)
    {
        // 1. Ambil order_id dari query parameter yang dikirim Midtrans
        $midtransOrderId = $request->query('order_id');

        // 2. Pisahkan untuk mendapatkan ID order asli kita
        $orderId = explode('-', $midtransOrderId)[1];

        // 3. Cari order di database
        $order = Order::findOrFail($orderId);

        // 4. Pastikan order ini milik user yang sedang login (keamanan)
        if ($order->user_id !== auth()->id()) {
            abort(403, 'Akses tidak diizinkan.');
        }

        // 5. Tampilkan halaman "Terima Kasih" dengan data order
        return view('orders.thank_you', [
            'order' => $order
        ]);
    }

    public function unfinish(Request $request)
    {
        // Tangani jika pembayaran dibatalkan
        $orderId = $request->query('order_id');
        $order = Order::findOrFail($orderId);

        if ($order->user_id !== auth()->id()) {
            abort(403, 'Akses tidak diizinkan.');
        }
        $order->status = 'cancelled';
        $order->save();

        // Hapus transaksi
        $order->transactions()->delete();
        // Kembalikan stok produk
        foreach ($order->items as $item) {
            $item->product->increment('stock', $item->quantity);
        }
        // Arahkan kembali ke halaman checkout dengan pesan

        return redirect()->route('checkout.index')
            ->with('info', 'Anda membatalkan pembayaran. Pesanan Anda masih menunggu untuk dibayar.');
    }
}
