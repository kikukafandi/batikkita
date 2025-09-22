<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function directCheckout(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        // Buat order langsung (bisa tambahkan alamat & pembayaran nanti)
        $order = Order::create([
            'user_id' => auth()->id(),
            'address_id' => null, // nanti pilih di halaman checkout
            'total_amount' => $product->price * $request->quantity,
            'status' => 'pending',
        ]);

        // Masukkan order item
        $order->items()->create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => $product->price,
            'subtotal' => $product->price * $request->quantity,
        ]);

        // Arahkan ke halaman checkout
        return redirect()->route('checkout.show', $order->id)
            ->with('success', 'Silakan selesaikan pesanan Anda.');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
