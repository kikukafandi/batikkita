<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Batik Nusantara</title>
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
                    <a href="products.html" class="text-batik-gold">Produk</a>
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

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Filter -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-batik-maroon mb-6">Filter Produk</h3>
                    
                    <!-- Category Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-batik-brown mb-3">Kategori</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" checked>
                                <span>Semua Kategori</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Batik Tulis</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Batik Cap</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Batik Print</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-batik-brown mb-3">Harga</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="price" class="mr-2">
                                <span>Di bawah Rp 200.000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="mr-2">
                                <span>Rp 200.000 - Rp 400.000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" class="mr-2">
                                <span>Di atas Rp 400.000</span>
                            </label>
                        </div>
                    </div>

                    <!-- Region Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-batik-brown mb-3">Daerah Asal</h4>
                        <select class="w-full p-2 border border-gray-300 rounded">
                            <option>Semua Daerah</option>
                            <option>Yogyakarta</option>
                            <option>Solo</option>
                            <option>Pekalongan</option>
                            <option>Cirebon</option>
                            <option>Madura</option>
                        </select>
                    </div>

                    <button class="w-full bg-batik-maroon text-white py-2 rounded hover:bg-red-900 transition">
                        Terapkan Filter
                    </button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="lg:w-3/4">
                <!-- Search and Sort -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="flex-1">
                            <input type="text" placeholder="Cari produk batik..." 
                                   class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-batik-gold">
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-600">Urutkan:</span>
                            <select class="p-2 border border-gray-300 rounded">
                                <option>Terbaru</option>
                                <option>Harga Terendah</option>
                                <option>Harga Tertinggi</option>
                                <option>Terpopuler</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-batik-gold to-batik-brown flex items-center justify-center">
                            <span class="text-white text-4xl">🎨</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Tulis Parang Klasik</h4>
                            <p class="text-sm text-gray-600 mb-2">Yogyakarta</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 450.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-batik-brown to-batik-maroon flex items-center justify-center">
                            <span class="text-white text-4xl">🌸</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Cap Kawung Modern</h4>
                            <p class="text-sm text-gray-600 mb-2">Solo</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 320.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-batik-gold to-yellow-600 flex items-center justify-center">
                            <span class="text-white text-4xl">🦋</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Print Mega Mendung</h4>
                            <p class="text-sm text-gray-600 mb-2">Cirebon</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 180.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-batik-maroon to-red-800 flex items-center justify-center">
                            <span class="text-white text-4xl">🌺</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Tulis Truntum</h4>
                            <p class="text-sm text-gray-600 mb-2">Yogyakarta</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 520.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-batik-brown to-amber-700 flex items-center justify-center">
                            <span class="text-white text-4xl">🍃</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Cap Sido Mukti</h4>
                            <p class="text-sm text-gray-600 mb-2">Pekalongan</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 380.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-batik-gold to-orange-600 flex items-center justify-center">
                            <span class="text-white text-4xl">🌙</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Print Sekar Jagad</h4>
                            <p class="text-sm text-gray-600 mb-2">Madura</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 220.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-red-700 to-batik-maroon flex items-center justify-center">
                            <span class="text-white text-4xl">🌿</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Tulis Sogan Klasik</h4>
                            <p class="text-sm text-gray-600 mb-2">Solo</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 480.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-batik-gold to-batik-brown flex items-center justify-center">
                            <span class="text-white text-4xl">🏵️</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Cap Nitik Kontemporer</h4>
                            <p class="text-sm text-gray-600 mb-2">Yogyakarta</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 350.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 9 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-br from-purple-700 to-batik-maroon flex items-center justify-center">
                            <span class="text-white text-4xl">🦚</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-batik-maroon mb-2">Batik Print Burung Merak</h4>
                            <p class="text-sm text-gray-600 mb-2">Pekalongan</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-batik-gold">Rp 250.000</span>
                                <a href="product-detail.html" class="bg-batik-maroon text-white px-3 py-1 rounded text-sm hover:bg-red-900 transition">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <div class="flex space-x-2">
                        <button class="px-3 py-2 bg-gray-300 text-gray-600 rounded hover:bg-gray-400 transition">Prev</button>
                        <button class="px-3 py-2 bg-batik-maroon text-white rounded">1</button>
                        <button class="px-3 py-2 bg-gray-300 text-gray-600 rounded hover:bg-gray-400 transition">2</button>
                        <button class="px-3 py-2 bg-gray-300 text-gray-600 rounded hover:bg-gray-400 transition">3</button>
                        <button class="px-3 py-2 bg-gray-300 text-gray-600 rounded hover:bg-gray-400 transition">Next</button>
                    </div>
                </div>
            </div>
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
