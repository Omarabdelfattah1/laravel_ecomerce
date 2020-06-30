<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubcategoryTranslation extends Model
{
    
    public $timestamps = false;
    protected $fillable = ['name', 'description'];
}
