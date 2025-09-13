<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Batik Nusantara</title>
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
                    <a href="register.html" class="hover:text-batik-gold transition">Daftar</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Login Form -->
    <div class="flex items-center justify-center min-h-screen py-12 px-4">
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md border-4 border-batik-gold">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-batik-maroon rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-batik-gold text-3xl font-bold">🎨</span>
                </div>
                <h2 class="text-3xl font-bold text-batik-maroon mb-2">Selamat Datang</h2>
                <p class="text-gray-600">Masuk ke akun Batik Nusantara Anda</p>
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

            <form id="loginForm" class="space-y-6">
                <div>
                    <label for="email" class="block text-batik-maroon font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="custom-input w-full"
                        placeholder="Masukkan email Anda" required>
                </div>

                <div>
                    <label for="password" class="block text-batik-maroon font-semibold mb-2">Kata Sandi</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="custom-input w-full pr-12"
                            placeholder="Masukkan kata sandi" required>
                        <button type="button" id="togglePassword"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-batik-brown hover:text-batik-maroon">
                            👁️
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="mr-2 accent-batik-gold">
                        <span class="text-sm text-gray-600">Ingat saya</span>
                    </label>
                    <a href="#" class="custom-link text-sm">Lupa kata sandi?</a>
                </div>

                <button type="submit" class="custom-button w-full text-lg">
                    Masuk
                </button>

                <div class="text-center">
                    <p class="text-gray-600">
                        Belum punya akun?
                        <a href="register.html" class="custom-link">Daftar sekarang</a>
                    </p>
                </div>

                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Atau masuk dengan</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <button type="button"
                        class="flex items-center justify-center px-4 py-2 border-2 border-batik-gold rounded-lg hover:bg-batik-cream transition">
                        <span class="mr-2">📧</span>
                        <span class="text-batik-maroon font-medium">Google</span>
                    </button>
                    <button type="button"
                        class="flex items-center justify-center px-4 py-2 border-2 border-batik-gold rounded-lg hover:bg-batik-cream transition">
                        <span class="mr-2">📘</span>
                        <span class="text-batik-maroon font-medium">Facebook</span>
                    </button>
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

        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Basic validation
            if (!email || !password) {
                alert('Mohon lengkapi semua field!');
                return;
            }

            // Simulate login process
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;

            submitButton.textContent = 'Memproses...';
            submitButton.disabled = true;

            setTimeout(() => {
                alert('Login berhasil! Selamat datang di Batik Nusantara.');
                // Redirect to dashboard or home page
                window.location.href = 'index.html';
            }, 1500);
        });

        // Input focus effects
        document.querySelectorAll('.custom-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    </script>
</body>

</html>
