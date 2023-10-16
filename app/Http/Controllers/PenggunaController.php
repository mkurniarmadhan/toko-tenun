<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $produks = Produk::paginate(6);
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
    public function checkoutStore(Request $request)
    {



        $carts = \Cart::getContent();


        $order = Order::create([
            'user_id' => Auth::id(),
            'namapemesan' => $request->namapemesan,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'totalbayar' => \Cart::getSubTotal()
        ]);


        foreach ($carts as $cart) {
            DB::table('order_item')->insert([

                'order_id' => $order->id,
                'produk_id' => $cart->id,
                'qty' => $cart->quantity,
                'jumlah' => $cart->getPriceSum()
            ]);    # code...
        }


        \Cart::clear();

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

    public function riwayatshow(Order $order)
    {

        // dd($order);

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
            $request->buktibayar = $imageName;
        }





        $order->update(['buktibayar' => $request->buktibayar]);
        return back();
        // return view('pengguna.riwayat-singel');
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
