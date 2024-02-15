<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{


    public function showCart()
    {
        $carts = collect(request()->session()->get('cart'));

        $cart_total = 0;
        if (session('cart')) {
            foreach ($carts as $key => $product) {
                $cart_total += $product['jumlah'];
            }
        }

        // dd($carts);
        return view('pengguna.keranjang', compact('carts', 'cart_total'));

        // // /*dd($cart_total);*/
        // $products = Produk::has('images')->with('images')->latest()->limit(10)->get();
        // $total_products_count = request()->session()->get('cart') ? count(request()->session()->get('cart')) : 0;
        // return view('frontend.cart.cart', compact('products', 'cart_products', 'cart_total', 'total_products_count'));
    }


    public function tambahItem(Produk $produk, Request $request)
    {



        if (isset($cart[$produk->id])) {
            $cart[$produk->id]['jumlah']++;
        } else {
            $cart[$produk->id] = [
                "name" => $produk->namaproduk,
                "jumlah" => $request->quantity ?? 1,
                "harga" => $produk->harga
            ];
        }

        $request->session()->put('cart', $cart);


        return back();
        // $cart_products = collect(request()->session()->get('cart'));
        // $cart_total = 0;

        // foreach ($cart_products as $key => $product) {

        //     $cart_total += $product['quantity'] * $product['discount_price'];
        // }

        // $renderHTML = view('frontend.cart.mini-cart-render', compact('cart_products', 'cart_total'))->render();
        // $total_products_count = count(request()->session()->get('cart'));
        // return response()->json(['renderHTML' => $renderHTML, 'total_products_count' => $total_products_count], 200);
    }

    public function update(Request $request)
    {

        if (isset($request->product_id) && isset($request->quantity)) {
            $cart = $request->session()->get('cart');

            $cart[$request->product_id]['quantity'] = $request->quantity;
            $request->session()->put('cart', $cart);

            $update_amount_of_product = $cart[$request->product_id]['quantity'] * $cart[$request->product_id]['discount_price'];

            $cart_products = collect(request()->session()->get('cart'));
            $cart_total = 0;
            if (session('cart')) {
                foreach ($cart_products as $key => $product) {

                    $cart_total += $product['quantity'] * $product['discount_price'];
                }
            }

            return response()->json(['success' => true, 'update_amount_of_product' => $update_amount_of_product, 'cart_total' => $cart_total]);
        }
    }



    public function destroy(Request $request)
    {
        $id = $request->product_id;

        $cart = $request->session()->get('cart');
        if (isset($cart[$id])) {

            unset($cart[$id]);
        }
        $request->session()->put('cart', $cart);
    }
}
