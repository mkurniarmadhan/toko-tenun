<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;


    public $table = 'order_item';


    public function produk()
    {

        return $this->belongsTo(Produk::class);
    }
}
