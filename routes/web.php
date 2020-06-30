<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/sub-categories',function(){
    $cat=Input::input('id');
    $category=App\Models\subCategory::where('category_id','=',$cat)->get();
    return $category;
});

Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth'], function() {
    Route::resource('categories','CategoriesController');
    Route::post('categories/subcategories/{id}','CategoriesController@subCategories')->name('categories.subcategories');
    Route::resource('subcategories','SubCategoriesController');
    Route::resource('products','ProductsController');
    Route::get('/dashboard', 'PagesController@dashboard');
    Route::get('/', 'PagesController@website');


    Route::resource('seller', 'sellerController');
});
