<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['category_id','photo', 'created_at', 'updated_at'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getPhoto($val)
    {
        return ($val !== null) ? asset('assets/images/banners/' . $val) : "";
    }
}
