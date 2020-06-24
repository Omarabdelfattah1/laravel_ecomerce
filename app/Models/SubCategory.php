<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class SubCategory extends Model implements TranslatableContract
{
    protected $table = 'sub_category';
    use Translatable;
    public $translatedAttributes = ['name', 'description'];
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    
}
