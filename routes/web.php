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

Route::get('/', function () {
    return view('website.home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth'], function() {
    Route::resource('categories','CategoriesController');
    Route::post('categories/subcategories/{id}','CategoriesController@subCategories')->name('categories.subcategories');
    Route::resource('subcategories','SubCategoriesController');
    Route::resource('products','ProductsController');
    Route::get('/dashboard', 'PagesController@dashboard');


    Route::resource('seller', 'sellerController');
});
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('dashboard', function() {
//         if($this->user->isAdmin())
//             return redirect('/dashboard/admin');
//         if($this->user->isManager())
//             return redirect('/dashboard/manager');

//         return redirect('/home');
//     });

//     Route::get('dashboard/admin', 'Admin\dashboard@index');
//     Route::get('dashboard/manage', 'Manager\dashboard@index');
//     Route::get('users', 'PagesController@manageUsers');
// });
