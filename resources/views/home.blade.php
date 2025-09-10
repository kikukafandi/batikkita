<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batik Nusantara - Platform E-commerce Batik UMKM</title>
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

    <!-- Hero Banner -->
    <section class="bg-gradient-to-r from-batik-maroon to-batik-brown text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Batik Asli Indonesia</h2>
            <p class="text-xl mb-8">Dukung UMKM Batik Nusantara dengan Kualitas Terbaik</p>
            <div class="flex justify-center space-x-4">
                <button class="bg-batik-gold text-batik-maroon px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">Belanja Sekarang</button>
                <button class="border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-batik-maroon transition">Jadi Seller</button>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center text-batik-maroon mb-12">Produk Pilihan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 bg-gradient-to-br from-batik-gold to-batik-brown flex items-center justify-center">
                        <span class="text-white text-6xl">🎨</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-batik-maroon mb-2">Batik Tulis Parang Klasik</h4>
                        <p class="text-gray-600 mb-4">Batik tulis tradisional dengan motif parang yang elegan</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-batik-gold">Rp 450.000</span>
                            <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">Beli</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 bg-gradient-to-br from-batik-brown to-batik-maroon flex items-center justify-center">
                        <span class="text-white text-6xl">🌸</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-batik-maroon mb-2">Batik Cap Kawung Modern</h4>
                        <p class="text-gray-600 mb-4">Batik cap dengan motif kawung dalam sentuhan modern</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-batik-gold">Rp 320.000</span>
                            <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">Beli</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 bg-gradient-to-br from-batik-gold to-yellow-600 flex items-center justify-center">
                        <span class="text-white text-6xl">🦋</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-batik-maroon mb-2">Batik Print Mega Mendung</h4>
                        <p class="text-gray-600 mb-4">Batik print dengan motif mega mendung khas Cirebon</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-batik-gold">Rp 180.000</span>
                            <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">Beli</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 bg-gradient-to-br from-batik-maroon to-red-800 flex items-center justify-center">
                        <span class="text-white text-6xl">🌺</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-batik-maroon mb-2">Batik Tulis Truntum</h4>
                        <p class="text-gray-600 mb-4">Batik tulis dengan motif truntum untuk acara khusus</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-batik-gold">Rp 520.000</span>
                            <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">Beli</button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 bg-gradient-to-br from-batik-brown to-amber-700 flex items-center justify-center">
                        <span class="text-white text-6xl">🍃</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-batik-maroon mb-2">Batik Cap Sido Mukti</h4>
                        <p class="text-gray-600 mb-4">Batik cap dengan motif sido mukti yang membawa keberuntungan</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-batik-gold">Rp 380.000</span>
                            <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">Beli</button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-64 bg-gradient-to-br from-batik-gold to-orange-600 flex items-center justify-center">
                        <span class="text-white text-6xl">🌙</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-batik-maroon mb-2">Batik Print Sekar Jagad</h4>
                        <p class="text-gray-600 mb-4">Batik print dengan motif sekar jagad yang penuh makna</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-batik-gold">Rp 220.000</span>
                            <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">Beli</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="products.html" class="bg-batik-gold text-batik-maroon px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">Lihat Semua Produk</a>
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

    <!-- Footer -->
    <footer class="bg-batik-brown text-white py-12">
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
