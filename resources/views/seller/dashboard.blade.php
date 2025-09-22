@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        @if (session('success'))
            <div class="mb-4 p-4 rounded-lg bg-green-100 border border-green-300 text-green-800">
                ✅ {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-4 rounded-lg bg-red-100 border border-red-300 text-red-800">
                ⚠️ {{ session('error') }}
            </div>
        @endif

        <!-- Dashboard Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-batik-maroon mb-2">Dashboard Seller</h1>
            <p class="text-gray-600">Selamat datang kembali, Batik Jogja Heritage!</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Products -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Produk</p>
                        <p class="text-2xl font-bold text-batik-maroon">24</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">📦</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-600 text-sm">+2 produk baru</span>
                </div>
            </div>

            <!-- Total Orders -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Pesanan Bulan Ini</p>
                        <p class="text-2xl font-bold text-batik-maroon">47</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">🛒</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-600 text-sm">+15% dari bulan lalu</span>
                </div>
            </div>

            <!-- Revenue -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Pendapatan</p>
                        <p class="text-2xl font-bold text-batik-maroon">Rp 18.5M</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">💰</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-600 text-sm">+8% dari bulan lalu</span>
                </div>
            </div>

            <!-- Rating -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Rating Toko</p>
                        <p class="text-2xl font-bold text-batik-maroon">4.8</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">⭐</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-yellow-600 text-sm">127 ulasan</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Orders -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-bold text-batik-maroon">Pesanan Terbaru</h2>
                            <button class="text-batik-maroon hover:text-batik-gold text-sm">Lihat Semua</button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Produk</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pembeli</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#BN001</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-10 h-10 bg-gradient-to-br from-batik-gold to-batik-brown rounded flex items-center justify-center">
                                                <span class="text-white text-sm">🎨</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">Batik Tulis Parang</div>
                                                <div class="text-sm text-gray-500">1x</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Sari Andini</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 450.000
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Dikemas
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#BN002</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-10 h-10 bg-gradient-to-br from-batik-maroon to-red-800 rounded flex items-center justify-center">
                                                <span class="text-white text-sm">🌺</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">Batik Tulis Truntum</div>
                                                <div class="text-sm text-gray-500">2x</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Budi Hartono</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp
                                        1.040.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Dikirim
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#BN003</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-10 h-10 bg-gradient-to-br from-red-700 to-batik-maroon rounded flex items-center justify-center">
                                                <span class="text-white text-sm">🌿</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">Batik Tulis Sogan</div>
                                                <div class="text-sm text-gray-500">1x</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Linda Maharani</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 480.000
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Analytics -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-lg font-bold text-batik-maroon mb-5">Aksi Cepat</h2>

                    <div class="flex flex-col gap-3">
                        <!-- Tambah Produk Baru -->
                        <a href="{{ route('product.create') }}"
                            class="flex items-center justify-center gap-2 w-full bg-batik-maroon text-white py-3 rounded-lg font-medium hover:bg-red-900 transition">
                            ➕ Tambah Produk Baru
                        </a>

                        <!-- Lihat Laporan -->
                        <button
                            class="flex items-center justify-center gap-2 w-full bg-batik-gold text-batik-maroon py-3 rounded-lg font-medium hover:bg-yellow-400 transition">
                            📊 Lihat Laporan
                        </button>

                        <!-- Pengaturan Toko -->
                        <button
                            class="flex items-center justify-center gap-2 w-full border-2 border-batik-brown text-batik-brown py-3 rounded-lg font-medium hover:bg-batik-brown hover:text-white transition">
                            ⚙️ Pengaturan Toko
                        </button>
                    </div>
                </div>


                <!-- Top Products -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-batik-maroon mb-6">Produk Terlaris</h2>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-batik-gold to-batik-brown rounded flex items-center justify-center">
                                <span class="text-white text-lg">🎨</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Batik Tulis Parang Klasik</h4>
                                <p class="text-xs text-gray-600">15 terjual bulan ini</p>
                            </div>
                            <span class="text-sm font-semibold text-batik-gold">Rp 450K</span>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-batik-maroon to-red-800 rounded flex items-center justify-center">
                                <span class="text-white text-lg">🌺</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Batik Tulis Truntum</h4>
                                <p class="text-xs text-gray-600">12 terjual bulan ini</p>
                            </div>
                            <span class="text-sm font-semibold text-batik-gold">Rp 520K</span>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-red-700 to-batik-maroon rounded flex items-center justify-center">
                                <span class="text-white text-lg">🌿</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-sm">Batik Tulis Sogan Klasik</h4>
                                <p class="text-xs text-gray-600">8 terjual bulan ini</p>
                            </div>
                            <span class="text-sm font-semibold text-batik-gold">Rp 480K</span>
                        </div>
                    </div>
                </div>

                <!-- Notifications -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-batik-maroon mb-6">Notifikasi</h2>
                    <div class="space-y-3">
                        <div class="p-3 bg-yellow-50 border-l-4 border-yellow-400 rounded">
                            <p class="text-sm text-yellow-800">
                                <strong>Pesanan Baru!</strong><br>
                                Sari Andini memesan Batik Tulis Parang
                            </p>
                            <p class="text-xs text-yellow-600 mt-1">2 menit yang lalu</p>
                        </div>

                        <div class="p-3 bg-blue-50 border-l-4 border-blue-400 rounded">
                            <p class="text-sm text-blue-800">
                                <strong>Ulasan Baru</strong><br>
                                Budi Hartono memberikan rating 5⭐
                            </p>
                            <p class="text-xs text-blue-600 mt-1">1 jam yang lalu</p>
                        </div>

                        <div class="p-3 bg-green-50 border-l-4 border-green-400 rounded">
                            <p class="text-sm text-green-800">
                                <strong>Pembayaran Diterima</strong><br>
                                Transfer untuk pesanan #BN002 berhasil
                            </p>
                            <p class="text-xs text-green-600 mt-1">3 jam yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Management -->
        <div class="mt-8">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-batik-maroon">Kelola Produk</h2>
                        <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">
                            + Tambah Produk
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Produk</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stok</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-batik-gold to-batik-brown rounded flex items-center justify-center">
                                            <span class="text-white text-lg">🎨</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Batik Tulis Parang Klasik</div>
                                            <div class="text-sm text-gray-500">2.5 x 1.15 meter</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Batik Tulis</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 450.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                    <button class="text-batik-maroon hover:text-batik-gold">Edit</button>
                                    <button class="text-red-600 hover:text-red-800">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-batik-maroon to-red-800 rounded flex items-center justify-center">
                                            <span class="text-white text-lg">🌺</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Batik Tulis Truntum</div>
                                            <div class="text-sm text-gray-500">2.5 x 1.15 meter</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Batik Tulis</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 520.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">8</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                    <button class="text-batik-maroon hover:text-batik-gold">Edit</button>
                                    <button class="text-red-600 hover:text-red-800">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-red-700 to-batik-maroon rounded flex items-center justify-center">
                                            <span class="text-white text-lg">🌿</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Batik Tulis Sogan Klasik</div>
                                            <div class="text-sm text-gray-500">2.5 x 1.15 meter</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Batik Tulis</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 480.000
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                    <button class="text-batik-maroon hover:text-batik-gold">Edit</button>
                                    <button class="text-red-600 hover:text-red-800">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
