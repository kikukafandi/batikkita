@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Profile Header -->
        <div class="profile-card mb-8">
            <div class="bg-gradient-to-r from-batik-maroon to-batik-brown p-6 text-white">
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
                    <div class="relative">
                        <img src="/placeholder.svg?height=120&width=120" alt="Profile Picture" class="profile-avatar"
                            id="profileImage">
                        <button
                            class="absolute bottom-0 right-0 bg-batik-gold text-batik-maroon p-2 rounded-full hover:bg-yellow-400 transition"
                            onclick="changeProfilePicture()">
                            📷
                        </button>
                    </div>
                    <div class="text-center md:text-left flex-1">
                        <h2 class="text-3xl font-bold mb-2">Sari Dewi Kusuma</h2>
                        <p class="text-batik-cream mb-2">📧 sari.dewi@email.com</p>
                        <p class="text-batik-cream mb-2">📱 +62 812-3456-7890</p>
                        <p class="text-batik-cream">📍 Yogyakarta, Indonesia</p>
                        <div class="mt-4 flex flex-wrap gap-2 justify-center md:justify-start">
                            <span class="bg-batik-gold text-batik-maroon px-3 py-1 rounded-full text-sm font-semibold">
                                ⭐ Member Premium
                            </span>
                            <span class="bg-white text-batik-maroon px-3 py-1 rounded-full text-sm font-semibold">
                                🛍️ 24 Pesanan
                            </span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="custom-button-secondary" onclick="editProfile()">
                            ✏️ Edit Profil
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="profile-card">
            <div class="border-b border-gray-200">
                <div class="flex flex-wrap">
                    <button class="tab-button active" onclick="showTab('info')">
                        👤 Informasi Pribadi
                    </button>
                    <button class="tab-button" onclick="showTab('orders')">
                        📦 Riwayat Pesanan
                    </button>
                    <button class="tab-button" onclick="showTab('addresses')">
                        📍 Alamat
                    </button>
                    <button class="tab-button" onclick="showTab('favorites')">
                        ❤️ Favorit
                    </button>
                    <button class="tab-button" onclick="showTab('settings')">
                        ⚙️ Pengaturan
                    </button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="p-6">
                <!-- Personal Information Tab -->
                <div id="info-tab" class="tab-content">
                    <h3 class="text-2xl font-bold text-batik-maroon mb-6">Informasi Pribadi</h3>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Nama Lengkap</label>
                            <input type="text" class="custom-input w-full" value="Sari Dewi Kusuma">
                        </div>
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Email</label>
                            <input type="email" class="custom-input w-full" value="sari.dewi@email.com">
                        </div>
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Nomor Telepon</label>
                            <input type="tel" class="custom-input w-full" value="+62 812-3456-7890">
                        </div>
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Tanggal Lahir</label>
                            <input type="date" class="custom-input w-full" value="1990-05-15">
                        </div>
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Jenis Kelamin</label>
                            <select class="custom-input w-full">
                                <option value="perempuan" selected>Perempuan</option>
                                <option value="laki-laki">Laki-laki</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Pekerjaan</label>
                            <input type="text" class="custom-input w-full" value="Desainer Grafis">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-batik-maroon font-semibold mb-2">Bio</label>
                            <textarea class="custom-input w-full h-24" placeholder="Ceritakan tentang diri Anda...">Pecinta batik tradisional Indonesia. Suka mengkoleksi batik dari berbagai daerah.</textarea>
                        </div>
                        <div class="md:col-span-2">
                            <button type="submit" class="custom-button">
                                💾 Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Orders Tab -->
                <div id="orders-tab" class="tab-content hidden">
                    <h3 class="text-2xl font-bold text-batik-maroon mb-6">Riwayat Pesanan</h3>
                    <div class="space-y-4">
                        <div class="order-card">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold text-batik-maroon">#BN-2024-001</h4>
                                    <p class="text-gray-600 text-sm">15 Januari 2024</p>
                                </div>
                                <span class="status-badge status-delivered">Selesai</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <img src="/placeholder.svg?height=60&width=60" alt="Batik Parang"
                                    class="w-15 h-15 rounded-lg">
                                <div class="flex-1">
                                    <h5 class="font-semibold text-batik-maroon">Batik Parang Klasik</h5>
                                    <p class="text-gray-600 text-sm">Ukuran: L | Warna: Coklat</p>
                                    <p class="font-bold text-batik-gold">Rp 450.000</p>
                                </div>
                                <div class="text-right">
                                    <button class="custom-button-secondary text-sm mb-2">
                                        📝 Beri Ulasan
                                    </button>
                                    <br>
                                    <button class="text-batik-maroon text-sm hover:underline">
                                        🔄 Beli Lagi
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="order-card">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold text-batik-maroon">#BN-2024-002</h4>
                                    <p class="text-gray-600 text-sm">20 Januari 2024</p>
                                </div>
                                <span class="status-badge status-shipped">Dikirim</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <img src="/placeholder.svg?height=60&width=60" alt="Batik Kawung"
                                    class="w-15 h-15 rounded-lg">
                                <div class="flex-1">
                                    <h5 class="font-semibold text-batik-maroon">Batik Kawung Modern</h5>
                                    <p class="text-gray-600 text-sm">Ukuran: M | Warna: Biru</p>
                                    <p class="font-bold text-batik-gold">Rp 380.000</p>
                                </div>
                                <div class="text-right">
                                    <button class="custom-button-secondary text-sm">
                                        📍 Lacak Pesanan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Addresses Tab -->
                <div id="addresses-tab" class="tab-content hidden">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-batik-maroon">Alamat Pengiriman</h3>
                        <button class="custom-button-secondary" onclick="addNewAddress()">
                            ➕ Tambah Alamat
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="order-card">
                            <div class="flex justify-between items-start mb-3">
                                <span class="bg-batik-gold text-batik-maroon px-2 py-1 rounded text-xs font-bold">
                                    UTAMA
                                </span>
                                <button class="text-batik-maroon hover:text-batik-brown">✏️</button>
                            </div>
                            <h4 class="font-bold text-batik-maroon mb-2">Rumah</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Sari Dewi Kusuma<br>
                                Jl. Malioboro No. 123<br>
                                Yogyakarta, DIY 55271<br>
                                📱 +62 812-3456-7890
                            </p>
                        </div>

                        <div class="order-card">
                            <div class="flex justify-between items-start mb-3">
                                <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded text-xs font-bold">
                                    ALTERNATIF
                                </span>
                                <button class="text-batik-maroon hover:text-batik-brown">✏️</button>
                            </div>
                            <h4 class="font-bold text-batik-maroon mb-2">Kantor</h4>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Sari Dewi Kusuma<br>
                                Jl. Sudirman No. 456<br>
                                Jakarta Pusat, DKI Jakarta 10220<br>
                                📱 +62 812-3456-7890
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Favorites Tab -->
                <div id="favorites-tab" class="tab-content hidden">
                    <h3 class="text-2xl font-bold text-batik-maroon mb-6">Produk Favorit</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="order-card">
                            <img src="/placeholder.svg?height=200&width=300" alt="Batik Mega Mendung"
                                class="w-full h-48 object-cover rounded-lg mb-4">
                            <h4 class="font-bold text-batik-maroon mb-2">Batik Mega Mendung</h4>
                            <p class="text-gray-600 text-sm mb-2">Cirebon, Jawa Barat</p>
                            <p class="font-bold text-batik-gold mb-3">Rp 520.000</p>
                            <div class="flex space-x-2">
                                <button class="custom-button-secondary flex-1 text-sm">
                                    🛒 Tambah ke Keranjang
                                </button>
                                <button class="text-red-500 hover:text-red-700 p-2">
                                    💔
                                </button>
                            </div>
                        </div>

                        <div class="order-card">
                            <img src="/placeholder.svg?height=200&width=300" alt="Batik Truntum"
                                class="w-full h-48 object-cover rounded-lg mb-4">
                            <h4 class="font-bold text-batik-maroon mb-2">Batik Truntum</h4>
                            <p class="text-gray-600 text-sm mb-2">Yogyakarta, DIY</p>
                            <p class="font-bold text-batik-gold mb-3">Rp 420.000</p>
                            <div class="flex space-x-2">
                                <button class="custom-button-secondary flex-1 text-sm">
                                    🛒 Tambah ke Keranjang
                                </button>
                                <button class="text-red-500 hover:text-red-700 p-2">
                                    💔
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Tab -->
                <div id="settings-tab" class="tab-content hidden">
                    <h3 class="text-2xl font-bold text-batik-maroon mb-6">Pengaturan Akun</h3>
                    <div class="space-y-6">
                        <div class="order-card">
                            <h4 class="font-bold text-batik-maroon mb-4">Keamanan</h4>
                            <div class="space-y-4">
                                <button class="custom-button-secondary w-full md:w-auto">
                                    🔒 Ubah Kata Sandi
                                </button>
                                <button class="custom-button-secondary w-full md:w-auto">
                                    📱 Verifikasi 2 Langkah
                                </button>
                            </div>
                        </div>

                        <div class="order-card">
                            <h4 class="font-bold text-batik-maroon mb-4">Notifikasi</h4>
                            <div class="space-y-3">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 accent-batik-gold" checked>
                                    <span>Email promosi dan penawaran khusus</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 accent-batik-gold" checked>
                                    <span>Notifikasi pesanan dan pengiriman</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 accent-batik-gold">
                                    <span>Newsletter mingguan</span>
                                </label>
                            </div>
                        </div>

                        <div class="order-card">
                            <h4 class="font-bold text-batik-maroon mb-4">Privasi</h4>
                            <div class="space-y-3">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 accent-batik-gold" checked>
                                    <span>Profil dapat dilihat publik</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-3 accent-batik-gold">
                                    <span>Bagikan data untuk rekomendasi produk</span>
                                </label>
                            </div>
                        </div>

                        <div class="order-card border-red-200">
                            <h4 class="font-bold text-red-600 mb-4">Zona Bahaya</h4>
                            <div class="space-y-3">
                                <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
                                    🗑️ Hapus Akun
                                </button>
                                <p class="text-sm text-gray-600">
                                    Tindakan ini tidak dapat dibatalkan. Semua data Anda akan dihapus permanen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
        // Tab functionality
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active');
            });

            // Show selected tab content
            document.getElementById(tabName + '-tab').classList.remove('hidden');

            // Add active class to clicked button
            event.target.classList.add('active');
        }

        // Profile picture change
        function changeProfilePicture() {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            input.onchange = function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('profileImage').src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            };
            input.click();
        }

        // Edit profile
        function editProfile() {
            alert('Fitur edit profil akan segera tersedia!');
        }

        // Add new address
        function addNewAddress() {
            alert('Form tambah alamat baru akan segera tersedia!');
        }

        // Form submissions
        document.addEventListener('DOMContentLoaded', function() {
            // Personal info form
            const infoForm = document.querySelector('#info-tab form');
            if (infoForm) {
                infoForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Profil berhasil diperbarui!');
                });
            }
        });
    </script>
    @endpush
@endsection
