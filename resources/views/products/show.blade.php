<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batik Tulis Parang Klasik - Batik Nusantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'batik-brown': '#8B4513',
                        'batik-gold': '#DAA520',
                        'batik-cream': '#F5F5DC',
                        'batik-maroon': '#800000'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-batik-cream">
    <!-- Header -->
    <header class="bg-batik-maroon text-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon font-bold text-xl">B</span>
                    </div>
                    <h1 class="text-2xl font-bold">Batik Nusantara</h1>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="index.html" class="hover:text-batik-gold transition">Beranda</a>
                    <a href="products.html" class="hover:text-batik-gold transition">Produk</a>
                    <a href="cart.html" class="hover:text-batik-gold transition">Keranjang</a>
                    <a href="seller-dashboard.html" class="hover:text-batik-gold transition">Seller</a>
                    <a href="admin-dashboard.html" class="hover:text-batik-gold transition">Admin</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="cart.html" class="relative">
                        <span class="text-2xl">🛒</span>
                        <span class="absolute -top-2 -right-2 bg-batik-gold text-batik-maroon rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">3</span>
                    </a>
                    <button class="bg-batik-gold text-batik-maroon px-4 py-2 rounded hover:bg-yellow-400 transition">Masuk</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-4">
        <nav class="text-sm text-gray-600">
            <a href="index.html" class="hover:text-batik-maroon">Beranda</a> > 
            <a href="products.html" class="hover:text-batik-maroon">Produk</a> > 
            <span class="text-batik-maroon">Batik Tulis Parang Klasik</span>
        </nav>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div>
                <!-- Main Image -->
                <div class="bg-white rounded-lg shadow-lg p-4 mb-4">
                    <div class="h-96 bg-gradient-to-br from-batik-gold to-batik-brown rounded-lg flex items-center justify-center">
                        <span class="text-white text-8xl">🎨</span>
                    </div>
                </div>
                
                <!-- Thumbnail Images -->
                <div class="grid grid-cols-4 gap-2">
                    <div class="bg-white rounded-lg shadow p-2">
                        <div class="h-20 bg-gradient-to-br from-batik-gold to-batik-brown rounded flex items-center justify-center">
                            <span class="text-white text-2xl">🎨</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-2">
                        <div class="h-20 bg-gradient-to-br from-batik-brown to-batik-maroon rounded flex items-center justify-center">
                            <span class="text-white text-2xl">🎨</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-2">
                        <div class="h-20 bg-gradient-to-br from-batik-maroon to-red-800 rounded flex items-center justify-center">
                            <span class="text-white text-2xl">🎨</span>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-2">
                        <div class="h-20 bg-gradient-to-br from-batik-gold to-yellow-600 rounded flex items-center justify-center">
                            <span class="text-white text-2xl">🎨</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold text-batik-maroon mb-4">Batik Tulis Parang Klasik</h1>
                
                <!-- Price -->
                <div class="mb-6">
                    <span class="text-4xl font-bold text-batik-gold">Rp 450.000</span>
                    <span class="text-lg text-gray-500 line-through ml-2">Rp 500.000</span>
                    <span class="bg-red-500 text-white px-2 py-1 rounded text-sm ml-2">10% OFF</span>
                </div>

                <!-- Product Details -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-batik-brown mb-3">Detail Produk</h3>
                    <div class="space-y-2 text-gray-700">
                        <div class="flex"><span class="w-24 font-medium">Kategori:</span> Batik Tulis</div>
                        <div class="flex"><span class="w-24 font-medium">Asal:</span> Yogyakarta</div>
                        <div class="flex"><span class="w-24 font-medium">Bahan:</span> Katun Prima</div>
                        <div class="flex"><span class="w-24 font-medium">Ukuran:</span> 2.5 x 1.15 meter</div>
                        <div class="flex"><span class="w-24 font-medium">Berat:</span> 300 gram</div>
                    </div>
                </div>

                <!-- Size Selection -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-batik-brown mb-3">Pilih Ukuran</h3>
                    <div class="flex space-x-2">
                        <button class="border-2 border-batik-maroon text-batik-maroon px-4 py-2 rounded hover:bg-batik-maroon hover:text-white transition">2.5m</button>
                        <button class="border-2 border-gray-300 text-gray-600 px-4 py-2 rounded hover:border-batik-maroon hover:text-batik-maroon transition">2m</button>
                        <button class="border-2 border-gray-300 text-gray-600 px-4 py-2 rounded hover:border-batik-maroon hover:text-batik-maroon transition">1.5m</button>
                    </div>
                </div>

                <!-- Quantity -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-batik-brown mb-3">Jumlah</h3>
                    <div class="flex items-center space-x-3">
                        <button class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100 transition">-</button>
                        <span class="text-xl font-semibold">1</span>
                        <button class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100 transition">+</button>
                        <span class="text-gray-600 ml-4">Stok: 15 tersedia</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3">
                    <button class="w-full bg-batik-maroon text-white py-3 rounded-lg font-semibold hover:bg-red-900 transition">
                        Tambah ke Keranjang
                    </button>
                    <button class="w-full bg-batik-gold text-batik-maroon py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">
                        Beli Sekarang
                    </button>
                    <button class="w-full border-2 border-batik-brown text-batik-brown py-3 rounded-lg font-semibold hover:bg-batik-brown hover:text-white transition">
                        ❤️ Tambah ke Wishlist
                    </button>
                </div>

                <!-- Seller Info -->
                <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                    <h3 class="text-lg font-semibold text-batik-brown mb-2">Informasi Penjual</h3>
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                            <span class="text-batik-maroon font-bold">BJ</span>
                        </div>
                        <div>
                            <p class="font-semibold">Batik Jogja Heritage</p>
                            <p class="text-sm text-gray-600">Yogyakarta • ⭐ 4.8 (127 ulasan)</p>
                        </div>
                    </div>
                    <button class="mt-3 text-batik-maroon hover:text-batik-gold transition">Lihat Toko →</button>
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-batik-maroon mb-6">Deskripsi Produk</h2>
            <div class="prose max-w-none text-gray-700">
                <p class="mb-4">
                    Batik Tulis Parang Klasik ini merupakan karya seni tradisional yang dibuat dengan teknik tulis tangan 
                    oleh pengrajin berpengalaman di Yogyakarta. Motif parang yang digunakan memiliki makna filosofis 
                    sebagai simbol kekuatan dan keteguhan hati.
                </p>
                <p class="mb-4">
                    Dibuat dari bahan katun prima berkualitas tinggi dengan pewarna alami yang ramah lingkungan. 
                    Proses pembuatan membutuhkan waktu hingga 2-3 minggu untuk menghasilkan kualitas terbaik 
                    dengan detail motif yang sempurna.
                </p>
                <h3 class="text-xl font-semibold text-batik-brown mb-3">Keunggulan Produk:</h3>
                <ul class="list-disc list-inside space-y-2 mb-4">
                    <li>100% batik tulis tangan asli</li>
                    <li>Menggunakan pewarna alami berkualitas tinggi</li>
                    <li>Motif parang klasik dengan makna filosofis</li>
                    <li>Bahan katun prima yang nyaman digunakan</li>
                    <li>Tahan lama dan tidak mudah luntur</li>
                    <li>Cocok untuk acara formal maupun kasual</li>
                </ul>
                <h3 class="text-xl font-semibold text-batik-brown mb-3">Cara Perawatan:</h3>
                <ul class="list-disc list-inside space-y-2">
                    <li>Cuci dengan air dingin dan deterjen lembut</li>
                    <li>Jangan gunakan pemutih</li>
                    <li>Jemur di tempat teduh, hindari sinar matahari langsung</li>
                    <li>Setrika dengan suhu sedang</li>
                </ul>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-batik-maroon mb-6">Ulasan Pembeli</h2>
            
            <!-- Rating Summary -->
            <div class="flex items-center space-x-6 mb-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-batik-gold">4.8</div>
                    <div class="text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                    <div class="text-gray-600">127 ulasan</div>
                </div>
                <div class="flex-1">
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <span class="w-12">5 ⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                            <span class="text-sm text-gray-600">108</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-12">4 ⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 12%"></div>
                            </div>
                            <span class="text-sm text-gray-600">15</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-12">3 ⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 2%"></div>
                            </div>
                            <span class="text-sm text-gray-600">3</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-12">2 ⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                            </div>
                            <span class="text-sm text-gray-600">1</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-12">1 ⭐</span>
                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                            <span class="text-sm text-gray-600">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Individual Reviews -->
            <div class="space-y-6">
                <div class="border-b border-gray-200 pb-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                            <span class="text-batik-maroon font-bold text-sm">SA</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="font-semibold">Sari Andini</span>
                                <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                                <span class="text-gray-500 text-sm">2 hari yang lalu</span>
                            </div>
                            <p class="text-gray-700">
                                Batiknya sangat bagus! Kualitas tulis tangannya terlihat jelas dan motif parangnya 
                                sangat detail. Bahan katunnya juga nyaman dipakai. Pengiriman cepat dan packaging rapi. 
                                Sangat puas dengan pembelian ini!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                            <span class="text-batik-maroon font-bold text-sm">BH</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="font-semibold">Budi Hartono</span>
                                <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                                <span class="text-gray-500 text-sm">1 minggu yang lalu</span>
                            </div>
                            <p class="text-gray-700">
                                Sebagai kolektor batik, saya sangat terkesan dengan kualitas batik ini. 
                                Motif parang klasiknya autentik dan pewarnaan alaminya sangat bagus. 
                                Recommended untuk yang mencari batik tulis berkualitas!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-200 pb-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                            <span class="text-batik-maroon font-bold text-sm">LM</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="font-semibold">Linda Maharani</span>
                                <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                                <span class="text-gray-500 text-sm">2 minggu yang lalu</span>
                            </div>
                            <p class="text-gray-700">
                                Batik yang sangat indah! Saya beli untuk acara pernikahan dan mendapat banyak pujian. 
                                Kualitas tulis tangannya benar-benar terasa premium. Terima kasih Batik Jogja Heritage!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="mt-6 text-batik-maroon hover:text-batik-gold transition">
                Lihat Semua Ulasan →
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-batik-brown text-white py-12 mt-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h5 class="text-xl font-bold mb-4">Batik Nusantara</h5>
                    <p class="text-gray-300">Platform e-commerce batik UMKM terpercaya di Indonesia</p>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Kategori</h5>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-batik-gold transition">Batik Tulis</a></li>
                        <li><a href="#" class="hover:text-batik-gold transition">Batik Cap</a></li>
                        <li><a href="#" class="hover:text-batik-gold transition">Batik Print</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Bantuan</h5>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-batik-gold transition">Cara Berbelanja</a></li>
                        <li><a href="#" class="hover:text-batik-gold transition">Panduan Seller</a></li>
                        <li><a href="#" class="hover:text-batik-gold transition">Kontak Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-lg font-semibold mb-4">Ikuti Kami</h5>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:text-batik-gold transition">📘</a>
                        <a href="#" class="text-2xl hover:text-batik-gold transition">📷</a>
                        <a href="#" class="text-2xl hover:text-batik-gold transition">🐦</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-600 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2024 Batik Nusantara. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
