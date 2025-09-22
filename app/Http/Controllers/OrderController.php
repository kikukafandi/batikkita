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
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        /** @var \App\Models\Product $product */
        $product = Product::findOrFail($validated['product_id']);

        /** @var \App\Models\Order $order */
        $order = Order::create([
            'user_id'      => Auth::id(),
            'address_id'   => null,
            'total_amount' => $product->price * $validated['quantity'],
            'status'       => 'pending',
        ]);

        $order->items()->create([
            'product_id' => $product->id,
            'quantity'   => $validated['quantity'],
            'price'      => $product->price,
            'subtotal'   => $product->price * $validated['quantity'],
        ]);

        return redirect()
            ->route('checkout.show', $order->id)
            ->with('success', 'Silakan selesaikan pesanan Anda.');
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
        /** @var \App\Models\Cart|null $cart */
        $cart = Cart::with('items.product')
            ->where('user_id', Auth::id())
            ->first();
            
        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index')
                ->with('error', 'Keranjang kosong!');
        }

        /** @var \App\Models\Order $order */
        $order = Order::create([
            'user_id'      => Auth::id(),
            'total_amount' => $cart->items->sum(fn($item) => $item->price * $item->quantity),
            'status'       => 'pending',
        ]);

        foreach ($cart->items as $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $item->product_id,
                'quantity'   => $item->quantity,
                'price'      => $item->price,
            ]);
        }

        $cart->items()->delete();

        return redirect()
            ->route('checkout.index')
            ->with('success', 'Pesanan berhasil dibuat! Silakan lakukan pembayaran.');
    }

    public function checkout()
    {
        $cart = Cart::with('items.product')
            ->where('user_id', Auth::id())
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index')
                ->with('error', 'Keranjang masih kosong!');
        }

        return view('checkout.index', [
            'cart'  => $cart,
            'items' => $cart->items,
        ]);
    }

    // edit, update, destroy: tetap default
}
