<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function foto(): Attribute
    {
        return Attribute::make(
            get: function ($x) {
                if ($x) {
                    return asset("admin/img/produks/$x");
                }
                return 'https://api.dicebear.com/6.x/fun-emoji/svg?seed=amar';
            },
        );
    }
    protected function harga(): Attribute
    {
        return Attribute::make(
            get: function ($x) {
                return   number_format($x);
            },
        );
    }


    public function kategori()
    {

        return $this->belongsTo(Kategori::class);
    }
}
