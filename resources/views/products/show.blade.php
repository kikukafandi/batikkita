@extends('layouts.app')

@section('content')
{{-- Layout: 1 kolom di mobile, 2 kolom di tablet/desktop --}}
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
    {{-- Galeri Gambar --}}
    <div>
        <img src="{{ $product['main_image'] }}" alt="{{ $product['name'] }}" class="w-full rounded-lg shadow-lg mb-4" id="main-product-image">
        <div class="flex space-x-2 sm:space-x-4">
            @foreach($product['thumbnails'] as $thumb)
                {{-- Ukuran thumbnail dibuat responsif --}}
                <img src="{{ $thumb }}" alt="Thumbnail" class="w-16 h-16 sm:w-24 sm:h-24 object-cover rounded-md cursor-pointer border-2 border-transparent hover:border-emas transition">
            @endforeach
        </div>
    </div>

    {{-- Info Produk --}}
    <div>
        <h1 class="text-3xl md:text-4xl font-serif font-bold mb-4">{{ $product['name'] }}</h1>
        <p class="text-2xl md:text-3xl text-indigo font-bold mb-6">{{ $product['price'] }}</p>
        <div class="mb-8">
            <h3 class="text-xl font-bold font-serif mb-2">Deskripsi</h3>
            <p class="text-base leading-relaxed">{{ $product['description'] }}</p>
        </div>
        <button class="w-full bg-emas text-sogan font-bold py-3 md:py-4 px-6 rounded-lg hover:bg-yellow-400 transition text-base md:text-lg">
            Tambah ke Keranjang
        </button>
    </div>
</div>
@endsection