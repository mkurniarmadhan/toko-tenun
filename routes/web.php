<?php

use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;





// admin

Route::get('admin', fn () => view('admin.dashboard'));

Route::prefix('admin')->group(function () {
    Route::resource('produk', ProdukController::class);
});
Route::get('admin/order/', fn () => view('admin.order.index'));
Route::get('admin/order/c', fn () => view('admin.order.show'));



Route::get('/', function () {
    return to_route('home.index');
});

// penggua
Route::get('pengguna', [PenggunaController::class, 'index'])->name('dashboard');


Route::get('katalog', [PenggunaController::class, 'katalog'])->name('katalog');
Route::get('katalog/{produk}', [PenggunaController::class, 'katalogshow'])->name('katalog.show');
Route::get('tentangkami', [PenggunaController::class, 'tentangkami'])->name('tentangkami');
Route::get('kontak', [PenggunaController::class, 'kontak'])->name('kontak');
Route::get('checkout', [PenggunaController::class, 'checkout'])->name('checkout');
Route::get('success', [PenggunaController::class, 'success'])->name('success');
Route::get('riwayat', [PenggunaController::class, 'riwayat'])->name('riwayat');
Route::get('riwayat/2', [PenggunaController::class, 'riwayatshow'])->name('riwayatshow');


// cart

Route::get('cart', [CartController::class, 'cartIndex'])->name('cart.index');
Route::get('cartAdd/{produk}', [CartController::class, 'cartAdd'])->name('cart.add');
Route::get('cartRemove/{id}', [CartController::class, 'cartRemove'])->name('cart.remove');
Route::patch('cartUpdate', [CartController::class, 'cartUpdate'])->name('cart.update');


// Order

Route::resource('order', OrderController::class);

// Route::resource('home', HomeController::class);


// For Produk Controller
// Route::resource('produk', ProdukController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
