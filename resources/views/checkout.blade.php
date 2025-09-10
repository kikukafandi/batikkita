@extends('layouts.app')

@section('content')
<h1 class="text-3xl md:text-4xl font-serif font-bold text-center mb-8">Checkout</h1>

{{-- Layout: 1 kolom di mobile, 2 kolom di desktop --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    {{-- Form Alamat & Pembayaran --}}
    <div class="lg:col-span-2 bg-white p-6 md:p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-serif font-bold mb-6">Alamat Pengiriman</h2>
        <form class="space-y-4">
            <div>
                <label class="font-semibold">Nama Lengkap</label>
                <input type="text" value="Budi Santoso" class="w-full mt-1 p-2 border rounded-md bg-krem focus:outline-none focus:ring-2 focus:ring-emas">
            </div>
            <div>
                <label class="font-semibold">Alamat Lengkap</label>
                <textarea class="w-full mt-1 p-2 border rounded-md bg-krem focus:outline-none focus:ring-2 focus:ring-emas" rows="3">Jl. Malioboro No. 123, Kel. Suryatmajan, Kec. Danurejan</textarea>
            </div>
             <div>
                <label class="font-semibold">Kota</label>
                <input type="text" value="Yogyakarta" class="w-full mt-1 p-2 border rounded-md bg-krem focus:outline-none focus:ring-2 focus:ring-emas">
            </div>
            <div>
                <label class="font-semibold">Nomor Telepon</label>
                <input type="text" value="081234567890" class="w-full mt-1 p-2 border rounded-md bg-krem focus:outline-none focus:ring-2 focus:ring-emas">
            </div>
        </form>

        <h2 class="text-2xl font-serif font-bold mt-10 mb-6">Metode Pembayaran</h2>
        <div class="space-y-3">
            <label for="transfer" class="border p-4 rounded-md flex items-center cursor-pointer">
                <input type="radio" name="payment" id="transfer" class="mr-3" checked>
                <span class="font-semibold">Transfer Bank (Virtual Account)</span>
            </label>
             <label for="cod" class="border p-4 rounded-md flex items-center cursor-pointer">
                <input type="radio" name="payment" id="cod" class="mr-3">
                <span class="font-semibold">Cash on Delivery (COD)</span>
            </label>
        </div>
    </div>

    {{-- Ringkasan Order --}}
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md h-fit lg:sticky lg:top-24">
        <h2 class="text-2xl font-serif font-bold mb-6">Ringkasan Pesanan</h2>
        <div class="space-y-4 text-sm sm:text-base">
            @foreach($orderSummary as $item)
                <div class="flex justify-between">
                    <span>{{ $item['name'] }} (x{{ $item['quantity'] }})</span>
                    <span class="font-semibold">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</span>
                </div>
            @endforeach
        </div>
        <hr class="my-6">
        <div class="flex justify-between text-lg md:text-xl font-bold">
            <span>Total</span>
            <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
        </div>
        <button class="mt-8 w-full bg-emas text-sogan font-bold py-3 px-6 rounded-lg hover:bg-yellow-400 transition">
            Buat Pesanan
        </button>
    </div>
</div>
@endsection