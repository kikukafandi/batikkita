@extends('layouts.app')

@section('content')
    <h1 class="text-3xl md:text-4xl font-serif font-bold text-center mb-8">Keranjang Belanja</h1>

    {{-- Wrapper untuk scroll horizontal di mobile --}}
    <div class="bg-white rounded-lg shadow-md p-4 sm:p-6 overflow-x-auto">
        <table class="w-full min-w-[600px]"> {{-- Lebar minimum untuk mencegah kolom terlalu sempit --}}
            <thead class="border-b-2 border-krem">
                <tr>
                    <th class="text-left font-bold py-3 px-2">Produk</th>
                    <th class="text-left font-bold py-3 px-2">Harga</th>
                    <th class="text-center font-bold py-3 px-2">Kuantitas</th>
                    <th class="text-right font-bold py-3 px-2">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cartItems as $item)
                    @php
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    @endphp
                    <tr class="border-b border-krem">
                        <td class="py-4 px-2 flex items-center">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-md mr-4">
                            <span class="font-semibold text-sm sm:text-base">{{ $item['name'] }}</span>
                        </td>
                        <td class="px-2">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td class="px-2 text-center">
                            <input type="number" value="{{ $item['quantity'] }}" class="w-16 text-center border rounded-md p-1">
                        </td>
                        <td class="px-2 text-right font-semibold">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{-- Total --}}
    <div class="mt-8 flex justify-center sm:justify-end">
        <div class="w-full sm:w-1/2 lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-between text-lg md:text-xl font-bold mb-4">
                    <span>Total</span>
                    <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                </div>
                <a href="{{ url('/checkout') }}" class="block text-center w-full bg-emas text-sogan font-bold py-3 px-6 rounded-lg hover:bg-yellow-400 transition">
                    Lanjutkan ke Checkout
                </a>
            </div>
        </div>
    </div>
@endsection