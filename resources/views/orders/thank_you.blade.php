<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terima Kasih Atas Pesanan Anda | Batik Nusantara</title>
    <style>
        /* [Kode CSS dari tema batik Anda ditempel di sini] */
        /* ... (Saya akan tambahkan beberapa style khusus di bawah) ... */
        :root {
            --batik-brown: #8B4513;
            --batik-gold: #DAA520;
            --batik-cream: #F5F5DC;
            --batik-maroon: #800000;
            --text: #222222;
            --muted: #666666;
            --radius: 10px;
            --success: #228B22;
        }

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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px
        }

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

        main {
            padding: 48px 0
        }

        .thankyou-wrap {
            display: grid;
            place-items: center;
            min-height: calc(100dvh - 180px);
            text-align: center;
        }

        .card {
            background: #fff;
            border-radius: var(--radius);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
            padding: 32px;
            max-width: 680px;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .success-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 16px;
            background: var(--success);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
        }

        .title {
            font-size: 28px;
            margin: 10px 0;
            font-weight: 700;
            color: var(--batik-maroon);
        }

        .subtitle {
            font-size: 16px;
            color: var(--muted);
            margin: 0 0 24px;
            max-width: 50ch;
            margin-left: auto;
            margin-right: auto;
        }

        .order-summary {
            background: var(--batik-cream);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: var(--radius);
            padding: 16px;
            text-align: left;
            margin-bottom: 24px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
        }

        .summary-item:last-child {
            border-bottom: 0;
            font-weight: bold;
            font-size: 18px;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: center;
        }

        footer {
            background: var(--batik-brown);
            color: #fff;
            margin-top: 32px
        }

        .footer-inner {
            padding: 28px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.18)
        }

        @media (max-width: 900px) {
            nav ul {
                gap: 12px
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
                    <div style="font-size:20px;font-weight:800;letter-spacing:.3px">bebatik.id</div>
                    <div style="font-size:12px;opacity:.9">UMKM Batik Indonesia</div>
                </div>
            </div>
            <nav aria-label="Navigasi utama">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/products">Produk</a></li>
                    <li><a href="/cart">Keranjang</a></li>
                    <li><a href="/seller-dashboard">Seller</a></li>
                </ul>
            </nav>
            <div class="actions">
                <a class="btn btn-gold" href="/profile" aria-label="Lihat profil">Profil Saya</a>
            </div>
        </div>
    </header>

    <main role="main" class="container thankyou-wrap">
        <section class="card" aria-labelledby="ty-title">
            <div class="success-icon" aria-hidden="true">✓</div>
            <h1 id="ty-title" class="title">Pembayaran Berhasil!</h1>
            <p class="subtitle">
                Terima kasih telah berbelanja. Pesanan Anda telah kami terima dan akan segera diproses. Cek email Anda
                untuk konfirmasi detail pesanan.
            </p>

            <div class="order-summary">
                <div class="summary-item">
                    <span>Nomor Pesanan:</span>
                    {{-- Gunakan ID unik yang dikirim ke Midtrans --}}
                    <span>#TRX-{{ $order->id }}-{{ $order->created_at->timestamp }}</span>
                </div>
                <div class="summary-item">
                    <span>Tanggal:</span>
                    <span>{{ $order->created_at->format('d F Y') }}</span>
                </div>
                <div class="summary-item">
                    <span>Total Pembayaran:</span>
                    <span>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                </div>
            </div>

            <div class="grid">
                {{-- Arahkan ke halaman riwayat pesanan (jika ada) --}}
                {{-- <a class="btn btn-brown" href="{{ route('orders.index') }}">Lihat Riwayat Pesanan</a> --}}
                {{-- <a class="btn btn-outline" href="{{ route('products.index') }}">Lanjut Berbelanja</a> --}}
            </div>

            <div class="grid">
                <a class="btn btn-brown" href="/orders">Lihat Riwayat Pesanan</a>
                <a class="btn btn-outline" href="/products">Lanjut Berbelanja</a>
            </div>
        </section>
    </main>

    <footer role="contentinfo">
        <div class="container footer-inner">
            <div style="text-align:center;color:#f1f1f1">
                © 2025 Batik Nusantara. Semua hak dilindungi.
            </div>
        </div>
    </footer>
</body>

</html>
