@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Checkout</h1>

        @if (session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                <p class="font-bold">Terjadi Kesalahan</p>
                <p>{{ session('error') }}</p>
            </div>
        @endif
        @if (session('info'))
            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-6" role="alert">
                <p>{{ session('info') }}</p>
            </div>
        @endif
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
                    @foreach ($items as $item)
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

            <div class="border-t mt-6 pt-6">
                <h2 class="text-lg font-semibold mb-4">Pilih Alamat Pengiriman</h2>

                @foreach ($addresses as $address)
                    <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="address_id" value="{{ $address->id }}" class="mr-4"
                            {{ $address->is_primary ? 'checked' : '' }}>
                        <div>
                            <p class="font-semibold">{{ $address->recipient_name }} ({{ $address->phone }})</p>
                            <p class="text-gray-600 text-sm">
                                {{ $address->detail }}, {{ $address->district }}, {{ $address->city }},
                                {{ $address->province }}, {{ $address->postal_code }}
                            </p>
                        </div>
                    </label>
                @endforeach
            </div>

            <div class="flex justify-between items-center border-t pt-4">
                <span class="font-bold text-lg">Total:</span>
                <span class="font-bold text-lg">Rp {{ number_format($total, 0, ',', '.') }}</span>
            </div>

            <form action="{{ route('checkout.store') }}" method="POST" class="mt-6">
                @csrf
                <button type="submit"
                    class="w-full bg-batik-maroon text-white py-3 rounded-lg font-semibold hover:bg-red-900 transition">
                    Konfirmasi & Bayar
                </button>
            </form>
        </div>
    </div>
@endsection
