<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected function foto(): Attribute
    {
        return Attribute::make(
            get: function ($x) {
                if (is_null($x)) {
                    return 'https://api.dicebear.com/6.x/fun-emoji/svg?seed=amar';
                }
                return    Storage::url('produk/' . $x);
            },
        );
    }


    public function kategori()
    {

        return $this->belongsTo(Kategori::class);
    }
}
