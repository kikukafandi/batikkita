<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/profile", [HomeController::class, "profile"])->name("profile");
Route::get("/", [HomeController::class, "index"])->name("homePage");

// 2. Halaman Daftar Produk
Route::get("/products", [ProductController::class, "index"])->name("products.index");

// 3. Halaman Detail Produk
Route::get("/products/{product}", [ProductController::class, "show"])->name("products.show");
// 4. Halaman Keranjang
// Route::get('/cart', function () {
//     $cartItems = [
//         ['id' => 1, 'name' => 'Batik Parang Kusumo', 'price' => 450000, 'quantity' => 1, 'image' => 'https://placehold.co/100x100/F5F5DC/4E342E?text=Batik+1'],
//         ['id' => 2, 'name' => 'Batik Mega Mendung', 'price' => 350000, 'quantity' => 2, 'image' => 'https://placehold.co/100x100/F5F5DC/4E342E?text=Batik+2'],
//     ];
//     return view('cart', compact('cartItems'));
// });

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
Route::get('/seller/dashboard', function () {
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
})->name('seller.dashboard');

// 7. Halaman Dashboard Admin
Route::get('/admin/dashboard', function () {
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


Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::get('/seller/add-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/seller/add-product', [ProductController::class, 'store'])->name('product.store');
Route::get('/seller/edit-product/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/seller/edit-product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/seller/edit-product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');

// web.php
Route::post('/trial/upload', [ProductController::class, 'trial'])->name('trial.upload');
// Tampilkan isi keranjang
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Tambahkan produk ke keranjang
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

// Update quantity item di keranjang
Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');

// Hapus item dari keranjang
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

// (Opsional) Kosongkan keranjang sekaligus
Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/checkout/direct', [OrderController::class, 'directCheckout'])->name('checkout.direct');
Route::post('/buy-now', [OrderController::class, 'buyNow'])->name('checkout.buyNow');
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout.index');
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
Route::get('/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');
Route::post('/midtrans/webhook', [MidtransController::class, 'webhook'])->name('midtrans.webhook');
Route::get('/orders/{order}/thank-you', [OrderController::class, 'thankYou'])->name('orders.thankYou');
Route::get('/payment/finish', [OrderController::class, 'finish'])->name('orders.finish');
Route::get('/payment/unfinish', [OrderController::class, 'unfinish'])->name('orders.unfinish');