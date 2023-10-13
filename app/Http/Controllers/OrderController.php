<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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


        // dd($request);

        $order =     Order::create([
            'user_id' => Auth::id(),
            'totalbayar' => \Cart::getSubTotal()
        ]);

        DB::table('order_detail')->insert([
            'order_id' => $order->id,
            'namalengkap' => $request->namalengkap,
            'alamatlengkap' => $request->alamatlengkap,
            'phone' => $request->phone,
        ]);

        $carts =      \Cart::getContent();

        $carts->each(function ($item) use ($order) {

            DB::table('order_item')->insert([
                'order_id' => $order->id,
                'produk_id' => $item->id,
                'qty' => $item->quantity,
                'jumlah' => $item->getPriceSum()
            ]);
        });

        \Cart::clear();


        return to_route('riwayat');
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
