<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Batik Nusantara</title>
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
                    <a href="admin-dashboard.html" class="text-batik-gold">Admin</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-batik-gold rounded-full flex items-center justify-center">
                            <span class="text-batik-maroon font-bold text-sm">AD</span>
                        </div>
                        <span class="text-sm">Admin</span>
                    </div>
                    <button class="bg-batik-gold text-batik-maroon px-4 py-2 rounded hover:bg-yellow-400 transition">Keluar</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container mx-auto px-4 py-8">
        <!-- Dashboard Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-batik-maroon mb-2">Dashboard Admin</h1>
            <p class="text-gray-600">Kelola platform Batik Nusantara</p>
        </div>

        <!-- Overview Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Users -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Pengguna</p>
                        <p class="text-2xl font-bold text-batik-maroon">1,247</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">👥</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-600 text-sm">+12% dari bulan lalu</span>
                </div>
            </div>

            <!-- Total Sellers -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Seller</p>
                        <p class="text-2xl font-bold text-batik-maroon">89</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">🏪</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-600 text-sm">+5 seller baru</span>
                </div>
            </div>

            <!-- Total Orders -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Pesanan</p>
                        <p class="text-2xl font-bold text-batik-maroon">3,456</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">📦</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-600 text-sm">+18% dari bulan lalu</span>
                </div>
            </div>

            <!-- Total Revenue -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Total Pendapatan</p>
                        <p class="text-2xl font-bold text-batik-maroon">Rp 2.1B</p>
                    </div>
                    <div class="w-12 h-12 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon text-xl">💰</span>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-green-600 text-sm">+25% dari bulan lalu</span>
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
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pembeli</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Seller</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#BN001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Sari Andini</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Batik Jogja Heritage</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 450.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Dikemas
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#BN002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Budi Hartono</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Batik Solo Asri</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 640.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Dikirim
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#BN003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Linda Maharani</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Batik Cirebon Indah</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 180.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#BN004</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Ahmad Rizki</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Batik Pekalongan Cantik</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-batik-gold">Rp 380.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Menunggu Pembayaran
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Admin Actions & Stats -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-batik-maroon mb-6">Aksi Admin</h2>
                    <div class="space-y-3">
                        <button class="w-full bg-batik-maroon text-white py-3 rounded-lg font-semibold hover:bg-red-900 transition">
                            👥 Kelola Pengguna
                        </button>
                        <button class="w-full bg-batik-gold text-batik-maroon py-3 rounded-lg font-semibold hover:bg-yellow-400 transition">
                            🏪 Kelola Seller
                        </button>
                        <button class="w-full border-2 border-batik-brown text-batik-brown py-3 rounded-lg font-semibold hover:bg-batik-brown hover:text-white transition">
                            📊 Laporan Lengkap
                        </button>
                        <button class="w-full border-2 border-gray-300 text-gray-600 py-3 rounded-lg font-semibold hover:border-batik-maroon hover:text-batik-maroon transition">
                            ⚙️ Pengaturan Platform
                        </button>
                    </div>
                </div>

                <!-- Top Sellers -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-batik-maroon mb-6">Seller Terbaik</h2>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                                    <span class="text-batik-maroon font-bold text-sm">BJ</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-sm">Batik Jogja Heritage</h4>
                                    <p class="text-xs text-gray-600">47 pesanan</p>
                                </div>
                            </div>
                            <span class="text-sm font-semibold text-batik-gold">Rp 18.5M</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                                    <span class="text-batik-maroon font-bold text-sm">BS</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-sm">Batik Solo Asri</h4>
                                    <p class="text-xs text-gray-600">35 pesanan</p>
                                </div>
                            </div>
                            <span class="text-sm font-semibold text-batik-gold">Rp 14.2M</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                                    <span class="text-batik-maroon font-bold text-sm">BP</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-sm">Batik Pekalongan Cantik</h4>
                                    <p class="text-xs text-gray-600">28 pesanan</p>
                                </div>
                            </div>
                            <span class="text-sm font-semibold text-batik-gold">Rp 11.8M</span>
                        </div>
                    </div>
                </div>

                <!-- Platform Stats -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-bold text-batik-maroon mb-6">Statistik Platform</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Produk Aktif</span>
                            <span class="font-semibold">2,156</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Kategori</span>
                            <span class="font-semibold">3</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Transaksi Hari Ini</span>
                            <span class="font-semibold">127</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Rating Platform</span>
                            <span class="font-semibold">4.7 ⭐</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Management -->
        <div class="mt-8">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold text-batik-maroon">Manajemen Pengguna</h2>
                        <div class="flex space-x-2">
                            <input type="text" placeholder="Cari pengguna..." 
                                   class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-batik-gold">
                            <button class="bg-batik-maroon text-white px-4 py-2 rounded hover:bg-red-900 transition">
                                Cari
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pengguna</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Bergabung</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                                            <span class="text-batik-maroon font-bold text-sm">SA</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Sari Andini</div>
                                            <div class="text-sm text-gray-500">ID: #USR001</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">sari.andini@email.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pembeli</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 Jan 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                    <button class="text-batik-maroon hover:text-batik-gold">Detail</button>
                                    <button class="text-red-600 hover:text-red-800">Suspend</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                                            <span class="text-batik-maroon font-bold text-sm">BJ</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Batik Jogja Heritage</div>
                                            <div class="text-sm text-gray-500">ID: #SLR001</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">jogja.heritage@email.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Seller</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10 Des 2023</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                    <button class="text-batik-maroon hover:text-batik-gold">Detail</button>
                                    <button class="text-red-600 hover:text-red-800">Suspend</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                                            <span class="text-batik-maroon font-bold text-sm">BH</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Budi Hartono</div>
                                            <div class="text-sm text-gray-500">ID: #USR002</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">budi.hartono@email.com</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pembeli</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">22 Jan 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                    <button class="text-batik-maroon hover:text-batik-gold">Detail</button>
                                    <button class="text-red-600 hover:text-red-800">Suspend</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
