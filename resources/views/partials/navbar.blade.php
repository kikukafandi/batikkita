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
                <a href="/" class="hover:text-batik-gold transition">Beranda</a>
                <a href="products" class="hover:text-batik-gold transition">Produk</a>
                <a href="cart" class="hover:text-batik-gold transition">Keranjang</a>
                <a href="seller/dashboard" class="hover:text-batik-gold transition">Seller</a>
                <a href="admin/dashboard" class="hover:text-batik-gold transition">Admin</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="cart.html" class="relative">
                    <span class="text-2xl">🛒</span>
                    <span
                        class="absolute -top-2 -right-2 bg-batik-gold text-batik-maroon rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">3</span>
                </a>
                @auth
                    <!-- Kalau user sudah login -->
                    <div class="relative group">
                        <button class="bg-batik-gold text-batik-maroon px-4 py-2 rounded hover:bg-yellow-400 transition">
                            {{ Auth::user()->name }}
                        </button>
                        <!-- Dropdown opsional -->
                        <div class="absolute hidden group-hover:block bg-white text-batik-maroon mt-2 rounded shadow-lg">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-200">Profil</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-200">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Kalau belum login -->
                    <a href="{{ route('loginPage') }}"
                        class="bg-batik-gold text-batik-maroon px-4 py-2 rounded hover:bg-yellow-400 transition">
                        Masuk
                    </a>
                @endauth

            </div>
        </div>
    </div>
</header>
