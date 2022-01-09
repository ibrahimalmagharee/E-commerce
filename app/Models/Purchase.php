<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    protected $fillable = ['customer_id', 'order_id', 'product_id', 'quantity', 'payment_method', 'transaction_id', 'created_at','updated_at'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
