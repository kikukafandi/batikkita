<!-- Header -->
<header class="bg-batik-maroon text-white shadow-lg">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                    <span class="text-batik-maroon font-bold text-xl">B</span>
                </div>
                <h1 class="text-2xl font-bold">bebatik.id</h1>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="/" class="hover:text-batik-gold transition">Beranda</a>
                <a href="/products" class="hover:text-batik-gold transition">Produk</a>

                @auth
                    <a href="{{ route('cart.index') }}" class="hover:text-batik-gold transition">Keranjang</a>

                    @if(Auth::user()->role === 'seller')
                        <a href="/seller/dashboard" class="hover:text-batik-gold transition">Seller</a>
                    @endif

                    @if(Auth::user()->role === 'admin')
                        <a href="/admin/dashboard" class="hover:text-batik-gold transition">Admin</a>
                    @endif
                @endauth
            </nav>

            <!-- Cart & Auth -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- Cart hanya muncul kalau login -->
                    <a href="{{ route('cart.index') }}" class="relative">
                        <span class="text-2xl">🛒</span>
                        @if($cartCount > 0)
                            <span class="absolute -top-2 -right-2 bg-batik-gold text-batik-maroon rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </a>

                    <!-- Dropdown user -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="bg-batik-gold text-batik-maroon px-4 py-2 rounded hover:bg-yellow-400 transition flex items-center space-x-2">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div 
                            x-show="open" 
                            @click.away="open = false" 
                            x-transition 
                            class="absolute right-0 mt-2 w-40 bg-white text-batik-maroon rounded shadow-lg z-50"
                        >
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profil</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Kalau belum login -->
                    <a href="{{ route('loginPage') }}" class="bg-batik-gold text-batik-maroon px-4 py-2 rounded hover:bg-yellow-400 transition">
                        Masuk
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>
