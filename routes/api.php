<?php

use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('cart', function () {
    return App\Services\Cart::getCart();
});
