@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar Filter -->
        <div class="lg:w-1/4">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-batik-maroon mb-6">Filter Produk</h3>

                <form method="GET" action="{{ route('products.index') }}">
                    <!-- Category Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-batik-brown mb-3">Kategori</h4>
                        <select name="category" class="w-full p-2 border border-gray-300 rounded">
                            <option value="all">Semua Kategori</option>
                            <option value="Batik Tulis">Batik Tulis</option>
                            <option value="Batik Cap">Batik Cap</option>
                            <option value="Batik Print">Batik Print</option>
                        </select>
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-batik-brown mb-3">Harga</h4>
                        <select name="price" class="w-full p-2 border border-gray-300 rounded">
                            <option value="">Semua Harga</option>
                            <option value="low">Di bawah Rp 200.000</option>
                            <option value="mid">Rp 200.000 - Rp 400.000</option>
                            <option value="high">Di atas Rp 400.000</option>
                        </select>
                    </div>

                    <button class="w-full bg-batik-maroon text-white py-2 rounded hover:bg-red-900 transition">
                        Terapkan Filter
                    </button>
                </form>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="lg:w-3/4">
            <!-- Search and Sort -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <form method="GET" action="{{ route('products.index') }}" class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex-1">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari produk batik..."
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-batik-gold">
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">Urutkan:</span>
                        <select name="sort" class="p-2 border border-gray-300 rounded" onchange="this.form.submit()">
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="low_price" {{ request('sort') == 'low_price' ? 'selected' : '' }}>Harga Terendah</option>
                            <option value="high_price" {{ request('sort') == 'high_price' ? 'selected' : '' }}>Harga Tertinggi</option>
                        </select>
                    </div>
                </form>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($products as $product)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gray-100 flex items-center justify-center">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                     alt="{{ $product->name }}" 
                                     class="h-full w-full object-cover">
                            @else
                                <span class="text-gray-400 text-4xl">🧵</span>
                            @endif
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">{{ $product->name }}</h4>
                            <p class="text-sm text-gray-600 mb-2">{{ $product->category ?? 'Batik Nusantara' }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-500">Produk tidak ditemukan</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
