<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function ordered_products()
    {
        return $this->hasMany('App\Models\Ordered_products');
    }
    
}
