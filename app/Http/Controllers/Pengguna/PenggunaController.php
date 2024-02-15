<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

use App\Services\Cart;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{



    public function index()
    {

        $produks = Produk::paginate(3);
        return view('pengguna.index', compact('produks'));
    }

    public function katalog()
    {
        $produks = Produk::paginate(6);
        return view('pengguna.katalog', compact('produks'));
    }


    public function katalog_detail(Produk $produk)
    {
        return view('pengguna.katalog-single', compact('produk'));
    }


    public function keranjang()
    {

        $items =  collect(request()->session()->get('cart'));

        $totalBayar = 0;
        if (session('cart')) {
            foreach ($items as $key => $item) {
                $totalBayar += $item['jumlah'] * $item['harga'];
            }
        }

        return view('pengguna.keranjang', compact('items', 'totalBayar'));
    }


    public function tambah_item_keranjang(Produk $produk)
    {
        $cart = request()->session()->get('cart', []);

        if (isset($cart[$produk->id])) {
            $cart[$produk->id]['jumlah']++;
        } else {
            $cart[$produk->id] = [
                "name" => $produk->namaproduk,
                "jumlah" => 1,
                "harga" => $produk->harga
            ];
        }

        request()->session()->put('cart', $cart);


        return back();
    }

    public function hapus_item_keranjang($id)
    {

        $cart = request()->session()->get('cart');
        if (isset($cart[$id])) {

            unset($cart[$id]);
        }
        request()->session()->put('cart', $cart);


        return back();
    }

    public function checkout()
    {

        $items =  collect(request()->session()->get('cart'));

        $totalBayar = 0;
        if (session('cart')) {
            foreach ($items as $key => $item) {
                $totalBayar += $item['jumlah'] * $item['harga'];
            }
        }

        return view('pengguna.checkout', compact('items', 'totalBayar'));
    }
    public function checkoutStore(Request $request)
    {
        $carts =  collect(request()->session()->get('cart'));



        $totalBayar = 0;
        if (session('cart')) {
            foreach ($carts as $key => $item) {
                $totalBayar += $item['jumlah'] * $item['harga'];
            }
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'namapemesan' => $request->namapemesan,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'totalbayar' => $totalBayar
        ]);


        $carts->each(function ($produk, $id)  use ($order) {
            $order->produks()->attach(
                $order,
                [
                    'produk_id' => $id,
                    'jumlah' => $produk['jumlah']
                ]
            );
        });




        $request->session()->put('cart', []);
        return to_route('riwayat');
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

    public function riwayat_detail(Order $order)
    {

        return view('pengguna.riwayat-singel', compact('order'));
    }
    public function updateBukti(Request $request, Order $order)
    {

        $request->validate([
            'buktibayar' =>    'required|image|mimes:pdf,jpg,png,jpeg|max:2048',
        ]);

        if ($request->has('buktibayar')) {

            $imageName = time() . '.' . $request->buktibayar->extension();
            $request->buktibayar->move(public_path('admin/img/buktibayar/'), $imageName);
            $request['buktibayar'] = $imageName;
        }





        $order->update(['buktibayar' => $request->buktibayar]);
        return back();
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
