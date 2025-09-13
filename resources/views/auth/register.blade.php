<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Batik Nusantara</title>
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
    <style>
        .batik-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, #DAA520 2px, transparent 2px),
                radial-gradient(circle at 75% 75%, #8B4513 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: 0 0, 25px 25px;
        }

        .custom-input {
            border: 2px solid #DAA520;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #F5F5DC;
        }

        .custom-input:focus {
            outline: none;
            border-color: #800000;
            box-shadow: 0 0 0 3px rgba(218, 165, 32, 0.2);
            background-color: white;
        }

        .custom-select {
            border: 2px solid #DAA520;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #F5F5DC;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23DAA520' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 12px center;
            background-repeat: no-repeat;
            background-size: 16px;
        }

        .custom-select:focus {
            outline: none;
            border-color: #800000;
            box-shadow: 0 0 0 3px rgba(218, 165, 32, 0.2);
            background-color: white;
        }

        .custom-button {
            background: linear-gradient(135deg, #800000, #8B4513);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .custom-button:hover {
            background: linear-gradient(135deg, #600000, #654321);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(128, 0, 0, 0.3);
        }

        .custom-link {
            color: #DAA520;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .custom-link:hover {
            color: #800000;
        }

        .password-strength {
            height: 4px;
            border-radius: 2px;
            margin-top: 8px;
            transition: all 0.3s ease;
        }

        .strength-weak {
            background-color: #ef4444;
        }

        .strength-medium {
            background-color: #f59e0b;
        }

        .strength-strong {
            background-color: #10b981;
        }
    </style>
</head>

<body class="bg-batik-cream batik-pattern min-h-screen">
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
                    <a href="login.html" class="hover:text-batik-gold transition">Masuk</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Register Form -->
    <div class="flex items-center justify-center min-h-screen py-12 px-4">
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-2xl border-4 border-batik-gold">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-batik-maroon rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-batik-gold text-3xl font-bold">🌟</span>
                </div>
                <h2 class="text-3xl font-bold text-batik-maroon mb-2">Bergabung dengan Kami</h2>
                <p class="text-gray-600">Daftar untuk menjadi bagian keluarga Batik Nusantara</p>
            </div>
            @if (session('success'))
                <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 border border-red-300 text-red-700 px-4 py-3">
                    <ul class="list-disc ml-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="registerForm" class="space-y-6" method="post" action="{{ route('register') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="firstName" class="block text-batik-maroon font-semibold mb-2">Nama Depan</label>
                        <input type="text" id="firstName" name="firstName" class="custom-input w-full"
                            placeholder="Nama depan" required>
                    </div>

                    <div>
                        <label for="lastName" class="block text-batik-maroon font-semibold mb-2">Nama Belakang</label>
                        <input type="text" id="lastName" name="lastName" class="custom-input w-full"
                            placeholder="Nama belakang" required>
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-batik-maroon font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="custom-input w-full"
                        placeholder="alamat@email.com" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-batik-maroon font-semibold mb-2">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" class="custom-input w-full"
                            placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div>
                        <label for="userType" class="block text-batik-maroon font-semibold mb-2">Jenis Akun</label>
                        <select id="userType" name="userType" class="custom-select w-full" required>
                            <option value="">Pilih jenis akun</option>
                            <option value="buyer">Pembeli</option>
                            <option value="seller">Penjual UMKM</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-batik-maroon font-semibold mb-2">Kata Sandi</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="custom-input w-full pr-12"
                            placeholder="Minimal 8 karakter" required>
                        <button type="button" id="togglePassword"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-batik-brown hover:text-batik-maroon">
                            👁️
                        </button>
                    </div>
                    <div id="passwordStrength" class="password-strength"></div>
                    <p id="passwordHint" class="text-sm text-gray-500 mt-2">Gunakan kombinasi huruf, angka, dan simbol
                    </p>
                </div>

                <div>
                    <label for="confirmPassword" class="block text-batik-maroon font-semibold mb-2">Konfirmasi Kata
                        Sandi</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="custom-input w-full"
                        placeholder="Ulangi kata sandi" required>
                </div>

                <div id="sellerFields" class="hidden space-y-6">
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-lg font-semibold text-batik-maroon mb-4">Informasi Toko</h3>

                        <div>
                            <label for="storeName" class="block text-batik-maroon font-semibold mb-2">Nama
                                Toko</label>
                            <input type="text" id="storeName" name="storeName" class="custom-input w-full"
                                placeholder="Nama toko batik Anda">
                        </div>

                        <div>
                            <label for="storeAddress" class="block text-batik-maroon font-semibold mb-2">Alamat
                                Toko</label>
                            <textarea id="storeAddress" name="storeAddress" rows="3" class="custom-input w-full resize-none"
                                placeholder="Alamat lengkap toko"></textarea>
                        </div>

                        <div>
                            <label for="storeDescription" class="block text-batik-maroon font-semibold mb-2">Deskripsi
                                Toko</label>
                            <textarea id="storeDescription" name="storeDescription" rows="3" class="custom-input w-full resize-none"
                                placeholder="Ceritakan tentang toko batik Anda"></textarea>
                        </div>
                    </div>
                </div>

                <div class="flex items-start">
                    <input type="checkbox" id="terms" class="mr-3 mt-1 accent-batik-gold" required>
                    <label for="terms" class="text-sm text-gray-600">
                        Saya menyetujui
                        <a href="#" class="custom-link">Syarat dan Ketentuan</a>
                        serta
                        <a href="#" class="custom-link">Kebijakan Privasi</a>
                        Batik Nusantara
                    </label>
                </div>

                <button type="submit" class="custom-button w-full text-lg">
                    Daftar Sekarang
                </button>

                <div class="text-center">
                    <p class="text-gray-600">
                        Sudah punya akun?
                        <a href="login.html" class="custom-link">Masuk di sini</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

  <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.textContent = type === 'password' ? '👁️' : '🙈';
        });

        // Show/hide seller fields
        document.getElementById('userType').addEventListener('change', function() {
            const sellerFields = document.getElementById('sellerFields');
            const sellerInputs = sellerFields.querySelectorAll('input, textarea');

            if (this.value === 'seller') {
                sellerFields.classList.remove('hidden');
                sellerInputs.forEach(input => input.required = true);
            } else {
                sellerFields.classList.add('hidden');
                sellerInputs.forEach(input => {
                    input.required = false;
                    input.value = '';
                });
            }
        });

        // Password strength checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.getElementById('passwordStrength');
            const hint = document.getElementById('passwordHint');

            let strength = 0;
            let feedback = [];

            if (password.length >= 8) strength++;
            else feedback.push('minimal 8 karakter');

            if (/[a-z]/.test(password)) strength++;
            else feedback.push('huruf kecil');

            if (/[A-Z]/.test(password)) strength++;
            else feedback.push('huruf besar');

            if (/[0-9]/.test(password)) strength++;
            else feedback.push('angka');

            if (/[^A-Za-z0-9]/.test(password)) strength++;
            else feedback.push('simbol');

            // Update strength bar
            strengthBar.className = 'password-strength';
            if (strength <= 2) {
                strengthBar.classList.add('strength-weak');
                strengthBar.style.width = '33%';
            } else if (strength <= 4) {
                strengthBar.classList.add('strength-medium');
                strengthBar.style.width = '66%';
            } else {
                strengthBar.classList.add('strength-strong');
                strengthBar.style.width = '100%';
            }

            // Update hint
            if (feedback.length > 0) {
                hint.textContent = 'Tambahkan: ' + feedback.join(', ');
                hint.className = 'text-sm text-red-500 mt-2';
            } else {
                hint.textContent = 'Kata sandi kuat!';
                hint.className = 'text-sm text-green-500 mt-2';
            }
        });

        // Form validation and submission
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            // Check password match
            if (password !== confirmPassword) {
                alert('Konfirmasi kata sandi tidak cocok!');
                return;
            }

            // Check password strength
            if (password.length < 8) {
                alert('Kata sandi harus minimal 8 karakter!');
                return;
            }
            this.submit();
        });
    </script>  
</body>

</html>
