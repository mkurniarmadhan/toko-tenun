<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order1 =    Order::create([
            'user_id' => 2,
            'totalbayar' => 10000,
            'metodebayar' => 'BCA'
        ]);
        DB::table('order_item')->insert([
            'order_id' => $order1->id,
            'produk_id' => 1,
            'qty' => 2,
            'jumlah' => 100000,
        ]);
        DB::table('order_item')->insert([
            'order_id' => $order1->id,
            'produk_id' => 2,
            'qty' => 2,
            'jumlah' => 100000,
        ]);
    }
}
