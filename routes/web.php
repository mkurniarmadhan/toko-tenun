<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;






Route::get('/', fn () => to_route('dashboard'));



// admin

Route::prefix('admin', 'admin')->group(function () {
    Route::get('dashboard', fn () => view('admin.dashboard'))->name('admin.dashboard');
    Route::resource('produk', ProdukController::class);
    Route::resource('order', OrderController::class);
});

// penggua
Route::get('', [PenggunaController::class, 'index'])->name('dashboard');
Route::get('katalog', [PenggunaController::class, 'katalog'])->name('katalog');
Route::get('katalog/{produk}', [PenggunaController::class, 'katalogshow'])->name('katalog.show');
Route::get('tentangkami', [PenggunaController::class, 'tentangkami'])->name('tentangkami');
Route::get('kontak', [PenggunaController::class, 'kontak'])->name('kontak');
Route::get('checkout', [PenggunaController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('checkout', [PenggunaController::class, 'checkoutStore'])->name('checkout.store')->middleware('auth');
Route::get('riwayat', [PenggunaController::class, 'riwayat'])->name('riwayat')->middleware('auth');
Route::get('riwayat/{order}', [PenggunaController::class, 'riwayatshow'])->name('riwayatshow')->middleware('auth');
Route::post('updateBukti/{order}', [PenggunaController::class, 'updateBukti'])->name('updateBukti')->middleware('auth');


// cart
Route::get('cart', [CartController::class, 'cartIndex'])->name('cart.index');
Route::get('cartAdd/{produk}', [CartController::class, 'cartAdd'])->name('cart.add');
Route::get('cartRemove/{id}', [CartController::class, 'cartRemove'])->name('cart.remove');
Route::patch('cartUpdate', [CartController::class, 'cartUpdate'])->name('cart.update');




require __DIR__ . '/auth.php';
