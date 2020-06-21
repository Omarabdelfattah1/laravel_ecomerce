<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupoun extends Model
{
    protected $table = 'coupouns';

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}
