<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// 1. Halaman Home
Route::get('/', function () {
    $products = [
        ['id' => 1, 'name' => 'Batik Parang Kusumo', 'price' => 'Rp 450.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+Parang'],
        ['id' => 2, 'name' => 'Batik Mega Mendung', 'price' => 'Rp 350.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+Mega+Mendung'],
        ['id' => 3, 'name' => 'Batik Kawung', 'price' => 'Rp 375.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+Kawung'],
        ['id' => 4, 'name' => 'Batik Sidomukti', 'price' => 'Rp 500.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+Sidomukti'],
        ['id' => 5, 'name' => 'Batik Tujuh Rupa', 'price' => 'Rp 320.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+Tujuh+Rupa'],
        ['id' => 6, 'name' => 'Batik Lasem', 'price' => 'Rp 550.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+Lasem'],
    ];
    return view('home', compact('products'));
});

// 2. Halaman Daftar Produk
Route::get('/products', function () {
    $products = array_merge(
        [['id' => 1, 'name' => 'Batik Parang Kusumo', 'price' => 'Rp 450.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+1', 'category' => 'Batik Tulis'],],
        [['id' => 2, 'name' => 'Batik Mega Mendung', 'price' => 'Rp 350.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+2', 'category' => 'Batik Cap'],],
        [['id' => 3, 'name' => 'Batik Kawung', 'price' => 'Rp 375.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+3', 'category' => 'Batik Tulis'],],
        [['id' => 4, 'name' => 'Kemeja Batik Print', 'price' => 'Rp 150.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+4', 'category' => 'Batik Print'],],
        [['id' => 5, 'name' => 'Batik Sidomukti', 'price' => 'Rp 500.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+5', 'category' => 'Batik Tulis'],],
        [['id' => 6, 'name' => 'Outer Batik Cap', 'price' => 'Rp 280.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+6', 'category' => 'Batik Cap'],],
        [['id' => 7, 'name' => 'Batik Tujuh Rupa', 'price' => 'Rp 320.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+7', 'category' => 'Batik Tulis'],],
        [['id' => 8, 'name' => 'Syal Batik Print', 'price' => 'Rp 95.000', 'image' => 'https://placehold.co/400x400/F5F5DC/4E342E?text=Batik+8', 'category' => 'Batik Print'],]
    );
    $categories = ['Batik Tulis', 'Batik Cap', 'Batik Print'];
    return view('products.index', compact('products', 'categories'));
});

// 3. Halaman Detail Produk
Route::get('/products/{id}', function ($id) {
    $product = [
        'id' => $id,
        'name' => 'Batik Parang Kusumo',
        'price' => 'Rp 450.000',
        'description' => 'Batik Parang Kusumo adalah salah satu motif batik tertua di Indonesia. Motifnya yang menyerupai ombak di lautan melambangkan perjuangan hidup yang tidak pernah putus. Dibuat dengan teknik tulis tangan oleh pengrajin ahli dari Solo.',
        'main_image' => 'https://placehold.co/600x600/F5F5DC/4E342E?text=Batik+Utama',
        'thumbnails' => [
            'https://placehold.co/100x100/F5F5DC/4E342E?text=Thumb+1',
            'https://placehold.co/100x100/F5F5DC/4E342E?text=Thumb+2',
            'https://placehold.co/100x100/F5F5DC/4E342E?text=Thumb+3',
        ]
    ];
    return view('products.show', compact('product'));
})->name('products.show');

// 4. Halaman Keranjang
Route::get('/cart', function () {
    $cartItems = [
        ['id' => 1, 'name' => 'Batik Parang Kusumo', 'price' => 450000, 'quantity' => 1, 'image' => 'https://placehold.co/100x100/F5F5DC/4E342E?text=Batik+1'],
        ['id' => 2, 'name' => 'Batik Mega Mendung', 'price' => 350000, 'quantity' => 2, 'image' => 'https://placehold.co/100x100/F5F5DC/4E342E?text=Batik+2'],
    ];
    return view('cart', compact('cartItems'));
});

// 5. Halaman Checkout
Route::get('/checkout', function () {
    $orderSummary = [
        ['name' => 'Batik Parang Kusumo', 'price' => 450000, 'quantity' => 1],
        ['name' => 'Batik Mega Mendung', 'price' => 350000, 'quantity' => 2],
    ];
    $total = 450000 + (350000 * 2);
    return view('checkout', compact('orderSummary', 'total'));
});

// 6. Halaman Dashboard Seller
Route::get('/seller/dashboard', function() {
    $products = [
        ['id' => 1, 'name' => 'Batik Parang Kusumo', 'price' => 'Rp 450.000', 'stock' => 15],
        ['id' => 2, 'name' => 'Batik Mega Mendung', 'price' => 'Rp 350.000', 'stock' => 20],
        ['id' => 3, 'name' => 'Batik Kawung', 'price' => 'Rp 375.000', 'stock' => 8],
    ];
    $orders = [
        ['id' => 'ORD-001', 'customer' => 'Budi Santoso', 'total' => 'Rp 800.000', 'status' => 'Menunggu Pembayaran'],
        ['id' => 'ORD-002', 'customer' => 'Ani Wijaya', 'total' => 'Rp 350.000', 'status' => 'Dikemas'],
        ['id' => 'ORD-003', 'customer' => 'Citra Lestari', 'total' => 'Rp 500.000', 'status' => 'Dikemas'],
    ];
    return view('seller.dashboard', compact('products', 'orders'));
});

// 7. Halaman Dashboard Admin
Route::get('/admin/dashboard', function() {
    $stats = [
        'users' => 1250,
        'sellers' => 75,
        'orders' => 3200,
    ];
    $recentOrders = [
        ['id' => 'ORD-125', 'customer' => 'Dewi Anggraini', 'date' => '2025-09-08', 'total' => 'Rp 450.000', 'status' => 'Dikirim'],
        ['id' => 'ORD-124', 'customer' => 'Rian Hidayat', 'date' => '2025-09-08', 'total' => 'Rp 700.000', 'status' => 'Selesai'],
        ['id' => 'ORD-123', 'customer' => 'Sari Pertiwi', 'date' => '2025-09-07', 'total' => 'Rp 150.000', 'status' => 'Selesai'],
        ['id' => 'ORD-122', 'customer' => 'Eko Prasetyo', 'date' => '2025-09-07', 'total' => 'Rp 950.000', 'status' => 'Dikirim'],
    ];
    return view('admin.dashboard', compact('stats', 'recentOrders'));
});


Route::get('/register',[AuthController::class,'registerPage'])->name('registerPage');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',[AuthController::class,'loginPage'])->name('loginPage');