<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    
}
