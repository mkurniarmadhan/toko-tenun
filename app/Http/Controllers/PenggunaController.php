<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produks = Produk::paginate(3);
        return view('pengguna.index', compact('produks'));
    }
    public function katalog()
    {
        $produks = Produk::paginate(2);
        return view('pengguna.katalog', compact('produks'));
    }
    public function katalogshow(Produk $produk)
    {
        return view('pengguna.katalog-single', compact('produk'));
    }
    public function cart()
    {
        return view('pengguna.cart');
    }
    public function checkout()
    {
        return view('pengguna.checkout');
    }
    public function success()
    {
        return view('pengguna.success');
    }

    public function riwayat()
    {

        $id = Auth::id();
        $orders =    Order::where('user_id', $id)->get();
        return view('pengguna.riwayat', compact('orders'));
    }

    public function riwayatshow()
    {

        $x =  Order::first('id', 1)->get();

        // dd($x);

        return view('pengguna.riwayat-singel');
    }

    public function tentangkami()
    {

        return view('pengguna.tentangkami');
    }

    public function kontak()
    {

        return view('pengguna.kontak');
    }
}
