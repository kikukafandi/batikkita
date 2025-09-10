<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Batik Kita') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Merriweather:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles / Scripts -->
    
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

<body class="bg-krem font-sans text-sogan">

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
                    <a href="cart.html" class="text-batik-gold">Keranjang</a>
                    <a href="seller-dashboard.html" class="hover:text-batik-gold transition">Seller</a>
                    <a href="admin-dashboard.html" class="hover:text-batik-gold transition">Admin</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="cart.html" class="relative">
                        <span class="text-2xl">🛒</span>
                        <span
                            class="absolute -top-2 -right-2 bg-batik-gold text-batik-maroon rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">3</span>
                    </a>
                    <button
                        class="bg-batik-gold text-batik-maroon px-4 py-2 rounded hover:bg-yellow-400 transition">Masuk</button>
                </div>
            </div>
        </div>
    </header>

    {{-- Konten Utama --}}
    <main class="container mx-auto px-4 sm:px-6 py-8">
        @yield('content')
    </main>

    {{-- Footer --}}
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