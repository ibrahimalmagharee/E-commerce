<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const PAID = 'paid';
    const UNPAID = 'unpaid';

    protected $table = 'orders';
    protected $fillable = ['customer_id', 'total_price', 'status', 'payment_method', 'locale', 'created_at','updated_at'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
