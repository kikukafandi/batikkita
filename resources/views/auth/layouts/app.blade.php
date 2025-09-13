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

    @yield('content')

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
