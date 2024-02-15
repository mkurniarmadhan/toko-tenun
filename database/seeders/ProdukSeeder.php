<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([

            'namaproduk' => 'Produk 1',
            'harga' => 10000,
            'stok' => 100,
            'keterangan' => 'produk1',

        ]);
        Produk::create([

            'namaproduk' => 'Produk 2',
            'harga' => 10000,
            'stok' => 100,
            'keterangan' => 'produk1',

        ]);
        Produk::create([
            'namaproduk' => 'Produk 3',
            'harga' => 10000,
            'stok' => 100,
            'keterangan' => 'produk2',

        ]);
    }
}
