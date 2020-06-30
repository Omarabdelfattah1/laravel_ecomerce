<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'products';
    public $translatedAttributes = ['name', 'description'];

    protected $fillable=[
        'seller_id',
        'category_id',
        'subcategory_id',
        'coupon_id',
        'production_date',
        'expiration_date',
        'price',
        'quantity'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\ProductImages');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');

    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory');

    }

}
