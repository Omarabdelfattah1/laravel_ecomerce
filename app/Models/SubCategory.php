<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Subcategory extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'subcategories';
    protected $fillable=['category_id'];
    
    public $translatedAttributes = ['name', 'description'];

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
