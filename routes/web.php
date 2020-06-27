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
Route::resource('categories','CategoriesController');

Route::get('/sub-categories',function(){
    $cat=Input::input('id');
    $category=App\Models\subCategory::where('category_id','=',$cat)->get();
    return $category;
});
Route::resource('subcategories','SubCategoriesController');
Route::resource('products','ProductsController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'PagesController@dashboard');
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
