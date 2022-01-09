<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Multitenancy\Models\Concerns\UsesLandlordConnection;

class Vendor extends Authenticatable
{
    use UsesLandlordConnection;

    protected $table = "tenants";
    protected $fillable = [
        'name',
        'domain',
        'database',
        'email',
        'mobile',
        'password',
        'subscription',
        'subscription_type',
        'subscription_amount',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
