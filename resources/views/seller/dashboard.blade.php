@extends('layouts.app')

@section('content')
<h1 class="text-3xl md:text-4xl font-serif font-bold mb-8">Dashboard Penjual</h1>

{{-- Ringkasan Pesanan Masuk --}}
<div class="mb-10">
    <h2 class="text-2xl font-serif font-bold mb-4">Pesanan Masuk (3)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($orders as $order)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="font-bold truncate">{{ $order['id'] }}</p>
                <p class="mt-1">Pelanggan: {{ $order['customer'] }}</p>
                <p class="mt-1">Total: {{ $order['total'] }}</p>
                <span class="mt-2 inline-block bg-indigo text-krem text-sm font-semibold px-3 py-1 rounded-full">{{ $order['status'] }}</span>
            </div>
        @endforeach
    </div>
</div>

{{-- Tabel Produk Seller --}}
<div>
    <div class="flex flex-col sm:flex-row justify-between sm:items-center mb-4 gap-4">
        <h2 class="text-2xl font-serif font-bold">Produk Anda</h2>
        <button class="bg-emas text-sogan font-bold py-2 px-5 rounded-lg hover:bg-yellow-400 transition w-full sm:w-auto">Tambah Produk</button>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="w-full min-w-[600px]">
            <thead class="bg-krem">
                <tr>
                    <th class="text-left font-bold p-3">Nama Produk</th>
                    <th class="text-left font-bold p-3">Harga</th>
                    <th class="text-center font-bold p-3">Stok</th>
                    <th class="text-center font-bold p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b border-krem">
                    <td class="p-3 font-semibold">{{ $product['name'] }}</td>
                    <td class="p-3">{{ $product['price'] }}</td>
                    <td class="p-3 text-center">{{ $product['stock'] }}</td>
                    <td class="p-3 text-center space-x-2">
                        <a href="#" class="text-indigo hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection