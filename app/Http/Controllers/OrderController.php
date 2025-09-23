<?php

namespace App\Http\Controllers;

use App\Models\{Cart, Order, OrderItem, Product};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        // 1️⃣ Pastikan user punya alamat
        $addressId = $request->input('address_id');
        if (!$addressId) {
            // fallback: ambil primary address
            $addressId = $user->addresses()
                ->where('is_primary', 1)
                ->value('id');
        }

        if (!$addressId) {
            return back()->with('error', 'Tambahkan alamat pengiriman dulu.');
        }

        // 2️⃣ Ambil cart
        $cart = Cart::with('items.product')
            ->where('user_id', $user->id)
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index')
                ->with('error', 'Keranjang kosong!');
        }

        // 3️⃣ Buat order + address_id
        $order = Order::create([
            'user_id'     => $user->id,
            'address_id'  => $addressId,
            'total_amount' => $cart->items->sum(fn($item) => $item->price * $item->quantity),
            'status'      => 'pending',
        ]);

        // 4️⃣ Order items
        foreach ($cart->items as $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $item->product_id,
                'quantity'   => $item->quantity,
                'price'      => $item->price,
                'subtotal'   => $item->price * $item->quantity,
            ]);
        }

        // 5️⃣ Kosongkan cart
        $cart->items()->delete();

        return redirect()
            ->route('checkout.index')
            ->with('success', 'Pesanan berhasil dibuat! Silakan lakukan pembayaran.');
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

    // edit, update, destroy: tetap default
}
