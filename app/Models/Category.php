<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $with = ['translations'];

    protected $translatedAttributes = ['name'];

    protected $fillable = ['parent_id', 'slug', 'photo', 'is_active'];

    protected $hidden = ['translations'];

    protected $casts = [
        'is_active' => 'boolean',
    ];


    public function scopeChild($query)
    {
        return  $query -> whereNotNull('parent_id');
    }


    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/images/categories/' . $val) : "";

    }

    public function _parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function categories()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function scopeParent($query)
    {
        return  $query -> whereNull('parent_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(self::class, 'parent_id')->with('categories');
    }

}
