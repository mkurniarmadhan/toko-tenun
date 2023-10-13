<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{



    public function cartIndex()
    {


        $carts = \Cart::getContent();

        return view('pengguna.cart', compact('carts'));
    }
    public function cartAdd(Produk $produk)
    {


        $harga = str_replace(',', '', $produk->harga);

        \Cart::add([
            'id' => $produk->id, // inique row ID
            'name' =>  $produk->namaproduk,
            'price' => $harga,
            'quantity' => 1,
            'attributes' => []
        ]);


        return to_route('cart.index');
    }

    public function cartUpdate(Request $request)
    {

        if ($request->qty <= 0)  \Cart::remove($request->id);

        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            ),
        ));

        return response()->json('oke');
    }


    public function cartRemove($id)
    {
        \Cart::remove($id);
        return back();
    }
}
