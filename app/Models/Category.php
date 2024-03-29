<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Category extends Model implements TranslatableContract
{
    protected $table = 'categories';
    use Translatable;
    public $translatedAttributes = ['name', 'description'];


    public function SubCategory()
    {
        return $this->hasMany('App\Models\SubCategory', 'category_id');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
