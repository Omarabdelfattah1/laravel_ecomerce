<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'Products';
    protected $fillable=[
        'seller_id',
        'category_id',
        'sub_category_id',
        'coupoun_id',
        'production_date',
        'expiration_date',
        'price',
        'quantity'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
    
}
