@extends('layouts.app')

@section('title', $product->name)


@section('content')
    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-4">
        <nav class="text-sm text-gray-600">
            <a href="{{ route('homePage') }}" class="hover:text-batik-maroon">Beranda</a> >
            <a href="{{ route('products.index') }}" class="hover:text-batik-maroon">Produk</a> >
            <span class="text-batik-maroon">{{ $product->name }}</span>
        </nav>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div>
                <!-- Main Image -->
                <div class="bg-white rounded-lg shadow-lg p-4 mb-4">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                            class="h-96 w-full object-cover rounded-lg">
                    @else
                        <div class="h-96 bg-gray-100 flex items-center justify-center rounded-lg">
                            <span class="text-gray-400 text-6xl">🖼️</span>
                        </div>
                    @endif
                </div>

                <!-- Thumbnail Images (jika ada mockup_preview) -->
                @if ($product->mockup_preview)
                    <div class="grid grid-cols-4 gap-2">
                        @foreach (json_decode($product->mockup_preview, true) as $preview)
                            <div class="bg-white rounded-lg shadow p-2">
                                <img src="{{ asset('storage/' . $preview) }}" alt="Preview {{ $product->name }}"
                                    class="h-20 w-full object-cover rounded">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Product Info -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold text-batik-maroon mb-4">{{ $product->name }}</h1>

                <!-- Price -->
                <div class="mb-6">
                    <span class="text-4xl font-bold text-batik-gold">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>
                    @if ($product->discount ?? false)
                        <span class="text-lg text-gray-500 line-through ml-2">
                            Rp {{ number_format($product->price + $product->discount, 0, ',', '.') }}
                        </span>
                        <span class="bg-red-500 text-white px-2 py-1 rounded text-sm ml-2">
                            {{ $product->discount_percent }}% OFF
                        </span>
                    @endif
                </div>

                <!-- Product Details -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-batik-brown mb-3">Detail Produk</h3>
                    <div class="space-y-2 text-gray-700">
                        <div class="flex"><span class="w-24 font-medium">Kategori:</span> {{ $product->category ?? '-' }}
                        </div>
                        <div class="flex"><span class="w-24 font-medium">Stok:</span> {{ $product->stock }}</div>
                        <div class="flex"><span class="w-24 font-medium">Dibuat:</span>
                            {{ $product->created_at->diffForHumans() }}</div>
                    </div>
                </div>

                <!-- Quantity -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-batik-brown mb-3">Jumlah</h3>
                    <div class="flex items-center space-x-3">
                        <button
                            class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100 transition">-</button>
                        <span class="text-xl font-semibold">1</span>
                        <button
                            class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100 transition">+</button>
                        <span class="text-gray-600 ml-4">Stok: {{ $product->stock }} tersedia</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3">
                    <!-- Form Tambah ke Keranjang -->
                    <form action="{{ route('cart.store') }}" method="POST" class="space-y-3">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1"> {{-- default 1, bisa diubah --}}

                        <button type="submit"
                            class="w-full bg-batik-maroon text-white py-3 rounded-lg font-semibold hover:bg-red-900 transition">
                            🛒 Tambah ke Keranjang
                        </button>
                    </form>

                    <!-- Form Beli Sekarang -->
                    <form action="{{ route('checkout.direct') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">

                        <button type="submit"
                            class="w-full bg-batik-gold text-batik-maroon py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">
                            ⚡ Beli Sekarang
                        </button>
                    </form>

                    <button
                        class="w-full border-2 border-batik-brown text-batik-brown py-3 rounded-lg font-semibold hover:bg-batik-brown hover:text-white transition">
                        ❤️ Tambah ke Wishlist
                    </button>
                    <button
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition"
                        onclick="document.getElementById('trial-modal').classList.remove('hidden')">
                        👕 Coba Batik
                    </button>
                </div>

                <!-- Seller Info -->
                <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                    <h3 class="text-lg font-semibold text-batik-brown mb-2">Informasi Penjual</h3>
                    @if ($product->seller)
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                                <span class="text-batik-maroon font-bold">
                                    {{ strtoupper(substr($product->seller->name, 0, 2)) }}
                                </span>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $product->seller->name }}</p>
                                <p class="text-sm text-gray-600">{{ $product->seller->region ?? 'Indonesia' }}</p>
                            </div>
                        </div>
                        <button class="mt-3 text-batik-maroon hover:text-batik-gold transition">Lihat Toko →</button>
                    @else
                        <p class="text-gray-600">Penjual tidak tersedia</p>
                    @endif
                </div>

                @if (session('mockup'))
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-batik-brown mb-3">Hasil Trial Batik</h3>
                        <img src="{{ asset('storage/' . session('mockup')) }}" alt="Hasil Trial Batik"
                            class="w-full rounded-lg shadow-md">
                    </div>
                @endif

            </div>
        </div>

        <!-- Product Description -->
        <div class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-batik-maroon mb-6">Deskripsi Produk</h2>
            <div class="prose max-w-none text-gray-700">
                {!! nl2br(e($product->description)) !!}
            </div>
        </div>
    </div>

    <!-- Trial Batik Modal -->
    <div id="trial-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
            <button class="absolute top-3 right-3 text-gray-500 hover:text-gray-800"
                onclick="document.getElementById('trial-modal').classList.add('hidden')">✖</button>

            <h2 class="text-2xl font-bold text-batik-maroon mb-4">Coba Batik Virtual</h2>

            <form action="{{ route('trial.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-semibold">Upload Foto (baju polos)</label>
                    <input type="file" name="user_photo" accept="image/*" required class="w-full border p-2 rounded">
                </div>

                <!-- kirim path gambar produk -->
                <input type="hidden" name="product_image" value="{{ $product->image }}">

                <button type="submit" class="w-full bg-batik-maroon text-white py-2 rounded">
                    Proses Mockup
                </button>
            </form>
        </div>
    </div>

@endsection
