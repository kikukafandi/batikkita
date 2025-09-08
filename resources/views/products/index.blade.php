@extends('layouts.app')

@section('content')
    <h1 class="text-3xl md:text-4xl font-serif font-bold text-center mb-8">Daftar Produk</h1>

    {{-- Filter Kategori --}}
    <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-10">
        <button class="bg-sogan text-krem py-2 px-5 rounded-full font-semibold text-sm">Semua</button>
        @foreach ($categories as $category)
            <button class="bg-white text-sogan py-2 px-5 rounded-full hover:bg-sogan hover:text-krem transition text-sm">{{ $category }}</button>
        @endforeach
    </div>

    {{-- List Produk --}}
    {{-- Grid: 1 kolom di mobile, 2 di tablet, 4 di desktop --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden group">
                <a href="{{ route('products.show', $product['id']) }}">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold font-serif mb-2">{{ $product['name'] }}</h3>
                        <p class="text-sm text-gray-500 mb-2">{{ $product['category'] }}</p>
                        <p class="text-base md:text-lg text-indigo font-semibold">{{ $product['price'] }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- Pagination Dummy --}}
    <div class="mt-12 flex justify-center items-center space-x-2 md:space-x-4">
        <a href="#" class="py-2 px-3 md:px-4 bg-white rounded-md shadow text-sm">Sebelumnya</a>
        <span class="font-bold text-sm md:text-base">Halaman 1 dari 5</span>
        <a href="#" class="py-2 px-3 md:px-4 bg-white rounded-md shadow text-sm">Berikutnya</a>
    </div>
@endsection