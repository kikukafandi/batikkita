@extends('layouts.app')
@section('content')
    <section class="bg-gradient-to-r from-batik-maroon to-batik-brown text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Batik Asli Indonesia</h2>
            <p class="text-xl mb-8">Dukung UMKM Batik Nusantara dengan Kualitas Terbaik</p>
            <div class="flex justify-center space-x-4">
                <button
                    class="bg-batik-gold text-batik-maroon px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">Belanja
                    Sekarang</button>
                <button
                    class="border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-batik-maroon transition">Jadi
                    Seller</button>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center text-batik-maroon mb-12">Produk Pilihan</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">

                        <!-- Gambar Produk -->
                        <div class="h-64 bg-gray-100 flex items-center justify-center">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="h-full w-full object-cover">
                            @else
                                <span class="text-gray-400 text-6xl">🧵</span>
                            @endif
                        </div>

                        <!-- Konten -->
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-batik-maroon mb-2">
                                {{ $product->name }}
                            </h4>
                            <p class="text-gray-600 mb-4">
                                {{ Str::limit($product->description, 80, '...') }}
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-batik-gold">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                                <a href="{{ route('products.show', $product->id) }}" class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('products.index') }}"
                    class="bg-batik-gold text-batik-maroon px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">
                    Lihat Semua Produk
                </a>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="bg-batik-maroon text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-8">Tentang Batik Nusantara</h3>
            <p class="text-xl max-w-3xl mx-auto mb-8">
                Platform e-commerce yang mendukung UMKM batik Indonesia. Kami berkomitmen untuk melestarikan
                warisan budaya batik sambil memberdayakan pengrajin lokal di seluruh Nusantara.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="text-center">
                    <div class="text-4xl mb-4">🏪</div>
                    <h4 class="text-xl font-semibold mb-2">500+ UMKM</h4>
                    <p>Bergabung dengan platform kami</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">🎨</div>
                    <h4 class="text-xl font-semibold mb-2">1000+ Produk</h4>
                    <p>Koleksi batik autentik</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">🚚</div>
                    <h4 class="text-xl font-semibold mb-2">Pengiriman</h4>
                    <p>Ke seluruh Indonesia</p>
                </div>
            </div>
        </div>
    </section>
@endsection
