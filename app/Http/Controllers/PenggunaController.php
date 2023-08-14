<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengguna.index');
    }
    public function katalog()
    {
        return view('pengguna.katalog');
    }
    public function katalogshow()
    {
        return view('pengguna.katalog-single');
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
        return view('pengguna.riwayat');
    }

    public function riwayatshow()
    {
        return view('pengguna.riwayat-singel');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
