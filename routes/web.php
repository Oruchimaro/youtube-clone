<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;

Route::get('/', function (){
    return view('front/home');
});

Route::get('/shop', 'HomeController@shop');
// Route::get('/user', 'UserController@index');

/**Product routes */
Route::get('/products', function (){
    return view('front/shop');
});
Route::get('/product_detailes/{id}', 'HomeController@product_detailes');
/**End of product routes */

/**Shopping cart routes */
Route::get('/cart', 'CartController@index');
/**End of Shopping cart routes*/


Route::get('/about', function (){
    return view('front/about');
});

Route::get('/contact', function (){
    return view('front/contact');
});


// Route::get('/shop', 'HomeController@shop')->name('shop.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contactus');

//admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin.index');

    // Route::post('/', 'AdminController@index')->name('admin.index');
    // Route::post('/store', 'AdminController@store')->name('admin.store');

    Route::resource('product', 'ProductsController');
});
