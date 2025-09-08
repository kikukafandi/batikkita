@extends('layouts.app')

@section('content')
    {{-- Banner Promosi --}}
    <section class="bg-indigo text-krem rounded-lg shadow-lg p-6 md:p-12 mb-12 text-center" style="background-image: url('https://www.transparenttextures.com/patterns/batik.png');">
        <h1 class="text-3xl md:text-4xl font-serif font-bold mb-4">Koleksi Eksklusif Batik Warisan</h1>
        <p class="text-base md:text-lg mb-6">Temukan keindahan motif batik tulis dan cap asli dari pengrajin lokal.</p>
        <a href="{{ url('/products') }}" class="bg-emas text-sogan font-bold py-2 px-4 md:py-3 md:px-6 rounded-lg hover:bg-yellow-400 transition text-sm md:text-base">Lihat Semua Koleksi</a>
    </section>

    {{-- Grid Produk Unggulan --}}
    <section>
        <h2 class="text-2xl md:text-3xl font-serif font-bold text-center mb-8">Produk Unggulan</h2>
        {{-- Grid responsif: 1 kolom di mobile, 2 di tablet, 3 di desktop --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden group">
                    <a href="{{ route('products.show', $product['id']) }}">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-4 md:p-6">
                            <h3 class="text-lg md:text-xl font-bold font-serif mb-2">{{ $product['name'] }}</h3>
                            <p class="text-base md:text-lg text-indigo font-semibold">{{ $product['price'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection