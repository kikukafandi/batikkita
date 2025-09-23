<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - Halaman Tidak Ditemukan | Batik Nusantara</title>
    <style>
        /* Tema batik tanpa framework: warna, tipografi, layout */
        :root {
            --batik-brown: #8B4513;
            --batik-gold: #DAA520;
            --batik-cream: #F5F5DC;
            --batik-maroon: #800000;
            --text: #222222;
            --muted: #666666;
            --radius: 10px;
        }

        /* Reset ringkas & dasar tipografi */
        *,
        *::before,
        *::after {
            box-sizing: border-box
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background: var(--batik-cream);
        }

        a {
            color: inherit;
            text-decoration: none
        }

        a:focus,
        button:focus,
        input:focus {
            outline: 3px solid var(--batik-gold);
            outline-offset: 2px
        }

        img {
            max-width: 100%;
            height: auto;
            display: block
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px
        }

        /* Header */
        header {
            background: var(--batik-maroon);
            color: #fff;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 0;
        }

        .brand {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .brand-mark {
            width: 40px;
            height: 40px;
            border-radius: 999px;
            background: var(--batik-gold);
            display: grid;
            place-items: center;
            color: var(--batik-maroon);
            font-weight: 800;
            font-size: 20px;
        }

        nav ul {
            display: flex;
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0
        }

        nav a {
            opacity: .95;
            transition: color .2s ease, opacity .2s ease
        }

        nav a:hover {
            color: var(--batik-gold);
            opacity: 1
        }

        .actions {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 0;
            cursor: pointer;
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 16px;
            transition: background-color .2s ease, color .2s ease, transform .08s ease;
        }

        .btn:active {
            transform: translateY(1px)
        }

        .btn-gold {
            background: var(--batik-gold);
            color: var(--batik-maroon)
        }

        .btn-gold:hover {
            background: #e1bf32
        }

        /* 404 Section */
        main {
            padding: 48px 0
        }

        .notfound-wrap {
            display: grid;
            place-items: center;
            min-height: calc(100dvh - 180px);
        }

        .card {
            background: #fff;
            border-radius: var(--radius);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
            padding: 28px;
            max-width: 760px;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .badge {
            display: inline-block;
            background: var(--batik-gold);
            color: var(--batik-maroon);
            font-weight: 700;
            border-radius: 999px;
            padding: 6px 12px;
            margin-bottom: 12px;
        }

        .title-404 {
            font-size: 64px;
            line-height: 1.05;
            margin: 6px 0 10px;
            font-weight: 800;
            color: var(--batik-maroon);
            letter-spacing: 1px;
        }

        .subtitle {
            font-size: 18px;
            color: var(--muted);
            margin: 0 0 20px
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 18px;
        }

        .btn-outline {
            border: 2px solid var(--batik-maroon);
            background: transparent;
            color: var(--batik-maroon);
        }

        .btn-outline:hover {
            background: var(--batik-maroon);
            color: #fff
        }

        .btn-brown {
            background: var(--batik-brown);
            color: #fff
        }

        .btn-brown:hover {
            background: #6e3610
        }

        .hint {
            font-size: 14px;
            color: var(--muted);
            margin-top: 18px
        }

        /* Quick links */
        .quick-links {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 18px
        }

        .ql-item {
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.06);
            border-radius: 10px;
            padding: 12px 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: transform .08s ease, box-shadow .15s ease, border-color .2s ease;
        }

        .ql-item:hover {
            transform: translateY(-1px);
            border-color: var(--batik-gold);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        }

        .ql-item span {
            color: var(--batik-brown);
            font-weight: 600
        }

        .ql-item small {
            color: var(--muted)
        }

        /* Footer */
        footer {
            background: var(--batik-brown);
            color: #fff;
            margin-top: 32px
        }

        .footer-inner {
            padding: 28px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.18)
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr;
            gap: 18px
        }

        .footer-title {
            font-weight: 700;
            margin: 0 0 10px
        }

        .footer-link {
            color: #e9e9e9;
            display: block;
            margin: 6px 0
        }

        .footer-link:hover {
            color: var(--batik-gold)
        }

        /* Responsive */
        @media (max-width: 900px) {
            nav ul {
                gap: 12px
            }

            .title-404 {
                font-size: 44px
            }

            .footer-grid {
                grid-template-columns: 1fr
            }

            .quick-links {
                grid-template-columns: 1fr
            }
        }

        @media (max-width: 640px) {
            .header-inner {
                flex-direction: column;
                gap: 10px;
                align-items: flex-start
            }

            nav ul {
                flex-wrap: wrap
            }
        }
    </style>
</head>

<body>
    <header role="banner">
        <div class="container header-inner">
            <div class="brand">
                <div class="brand-mark" aria-hidden="true">B</div>
                <div>
                    <div style="font-size:20px;font-weight:800;letter-spacing:.3px">Batik Nusantara</div>
                    <div style="font-size:12px;opacity:.9">UMKM Batik Indonesia</div>
                </div>
            </div>

            <nav aria-label="Navigasi utama">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/products">Produk</a></li>
                    <li><a href="/cart">Keranjang</a></li>
                    <li><a href="/seller-dashboard">Seller</a></li>
                    <li><a href="/admin-dashboard">Admin</a></li>
                </ul>
            </nav>

            <div class="actions">
                <a class="btn btn-gold" href="/login" aria-label="Masuk ke akun">Masuk</a>
            </div>
        </div>
    </header>

    <main role="main" class="container notfound-wrap">
        <section class="card" aria-labelledby="nf-title">
            <span class="badge">Kode: 404</span>
            <h1 id="nf-title" class="title-404">Halaman Tidak Ditemukan</h1>
            <p class="subtitle">
                Maaf, halaman yang Anda cari tidak tersedia atau sudah dipindahkan.
                Silakan kembali ke beranda atau jelajahi katalog produk kami.
            </p>

            <div class="grid">
                <a class="btn btn-brown" href="/">Kembali ke Beranda</a>
                <a class="btn btn-outline" href="/products">Lihat Semua Produk</a>
            </div>

            <p class="hint">Butuh bantuan? Coba link cepat di bawah ini:</p>
            <div class="quick-links" role="list">
                <a class="ql-item" role="listitem" href="/products">
                    <span>Kategori Batik</span>
                    <small>Telusuri koleksi</small>
                </a>
                <a class="ql-item" role="listitem" href="/seller-dashboard">
                    <span>Dashboard Seller</span>
                    <small>Kelola produk</small>
                </a>
                <a class="ql-item" role="listitem" href="/profile">
                    <span>Profil</span>
                    <small>Data & pesanan</small>
                </a>
            </div>
        </section>
    </main>

    <footer role="contentinfo">
        <div class="container footer-inner">
            <div class="footer-grid">
                <div>
                    <h3 class="footer-title">Batik Nusantara</h3>
                    <p style="margin:0;color:#f1f1f1;max-width:48ch">
                        Platform e-commerce batik terpercaya untuk mendukung UMKM dan melestarikan budaya Nusantara.
                    </p>
                </div>
                <div>
                    <h4 class="footer-title">Kategori</h4>
                    <a class="footer-link" href="/products">Batik Tulis</a>
                    <a class="footer-link" href="/products">Batik Cap</a>
                    <a class="footer-link" href="/products">Batik Print</a>
                </div>
                <div>
                    <h4 class="footer-title">Bantuan</h4>
                    <a class="footer-link" href="/login">Akun & Masuk</a>
                    <a class="footer-link" href="/cart">Cara Berbelanja</a>
                    <a class="footer-link" href="/profile">Pengaturan Profil</a>
                </div>
            </div>
            <div
                style="border-top:1px solid rgba(255,255,255,0.22);margin-top:16px;padding-top:12px;text-align:center;color:#f1f1f1">
                © 2025 Batik Nusantara. Semua hak dilindungi.
            </div>
        </div>
    </footer>
</body>

</html>
