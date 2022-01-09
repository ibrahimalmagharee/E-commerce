<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity',
        'created_at',
        'updated_at'
    ];
}
