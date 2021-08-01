<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Concerns\UsesLandlordConnection;

class ContactVendor extends Model
{
    use UsesLandlordConnection;
    protected $table = "contact_vendors";
    protected $fillable = [
        'vendor_id',
        'name',
        'email',
        'message',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
