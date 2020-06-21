<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    
}
