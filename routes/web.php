<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Pengguna\KeranjangController;
use App\Http\Controllers\Pengguna\PenggunaController;
use Illuminate\Support\Facades\Route;





#akes unutk halaman utama
Route::get('/', fn () => to_route('dashboard'));

/**
 * 
 * Route untuk admin
 */

Route::prefix('admin', 'admin')->group(function () {
    Route::get('dashboard', AdminController::class)->name('admin.dashboard');
    Route::resource('produk', ProdukController::class);
    Route::resource('order', OrderController::class);
});


/**
 * 
 * Route untuk Pengguna
 */

Route::get('', [PenggunaController::class, 'index'])->name('dashboard');
Route::get('katalog', [PenggunaController::class, 'katalog'])->name('katalog');
Route::get('katalog/{produk}', [PenggunaController::class, 'katalog_detail'])->name('katalog.show');

#keranjang
Route::get('keranjang', [PenggunaController::class, 'keranjang'])->name('keranjang');
Route::get('tambah-keranjang/{produk}', [PenggunaController::class, 'tambah_item_keranjang'])->name('keranjang.tambah');
Route::get('keranjang/{id}', [PenggunaController::class, 'hapus_item_keranjang'])->name('keranjang.hapus');

Route::get('tentangkami', [PenggunaController::class, 'tentangkami'])->name('tentangkami');
Route::get('kontak', [PenggunaController::class, 'kontak'])->name('kontak');

#bikin orderan baru
Route::get('checkout', [PenggunaController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('checkout', [PenggunaController::class, 'checkoutStore'])->name('checkout.store')->middleware('auth');

#riwayat pemesanan
Route::get('riwayat', [PenggunaController::class, 'riwayat'])->name('riwayat')->middleware('auth');
Route::get('riwayat/{order}', [PenggunaController::class, 'riwayat_detail'])->name('riwayatshow')->middleware('auth');

#upload bukti bayar
Route::post('updateBukti/{order}', [PenggunaController::class, 'updateBukti'])->name('updateBukti')->middleware('auth');



/**
 * 
 * en
 * authentikasi
 * 
 */

#akses bagi yang belum melakukan login
Route::middleware('guest')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

#akses bagi yang sudah melakukan login
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout')->middleware('auth');
