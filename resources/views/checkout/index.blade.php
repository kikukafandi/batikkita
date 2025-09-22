@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Checkout</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="w-full mb-4">
            <thead>
                <tr>
                    <th class="text-left">Produk</th>
                    <th class="text-center">Qty</th>
                    <th class="text-right">Harga</th>
                    <th class="text-right">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($items as $item)
                    @php
                        $subtotal = $item->price * $item->quantity;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td class="text-center">{{ $item->quantity }}</td>
                        <td class="text-right">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                        <td class="text-right">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-between items-center border-t pt-4">
            <span class="font-bold text-lg">Total:</span>
            <span class="font-bold text-lg">Rp {{ number_format($total, 0, ',', '.') }}</span>
        </div>

        <form action="{{ route('checkout.store') }}" method="POST" class="mt-6">
            @csrf
            <button type="submit" class="w-full bg-batik-maroon text-white py-3 rounded-lg font-semibold hover:bg-red-900 transition">
                Konfirmasi Pesanan
            </button>
        </form>
    </div>
</div>
@endsection