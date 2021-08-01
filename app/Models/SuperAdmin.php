<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Multitenancy\Models\Concerns\UsesLandlordConnection;
use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;

class SuperAdmin extends  Authenticatable
{
    //use UsesTenantConnection;
    use UsesLandlordConnection;

    protected $table = "super_admins";
    protected $fillable = ['name','email','password','created_at','updated_at'];
    public $timestamps = true;
}
