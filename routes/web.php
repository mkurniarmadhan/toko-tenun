<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return to_route('dashboard');
});
Route::get('/', function () {
    return to_route('dashboard');
});

// penggua
Route::get('pengguna', [PenggunaController::class, 'index'])->name('dashboard');
Route::get('katalog', [PenggunaController::class, 'katalog'])->name('katalog');
Route::get('katalog/2', [PenggunaController::class, 'katalogshow'])->name('katalog.show');
Route::get('cart', [PenggunaController::class, 'cart'])->name('cart');
Route::get('tentangkami', [PenggunaController::class, 'tentangkami'])->name('tentangkami');
Route::get('kontak', [PenggunaController::class, 'katalogshow'])->name('kontak');
Route::get('checkout', [PenggunaController::class, 'checkout'])->name('checkout');
Route::get('success', [PenggunaController::class, 'success'])->name('success');
Route::get('riwayat', [PenggunaController::class, 'riwayat'])->name('riwayat');
Route::get('riwayat/2', [PenggunaController::class, 'riwayatshow'])->name('riwayatshow');


Route::resource('home', HomeController::class);


// For Produk Controller 
Route::resource('produk', ProdukController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
