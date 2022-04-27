<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\PageController;
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

Route::group(['middleware'=>'ShareData'],function(){
    Route::get('/','PageController@index');
Route::get('/product/{slug}','PageController@productDetail');
Route::get('/product/cart/add/{slug}','PageController@addToCart');
Route::get('cart','PageController@cart');
Route::get('order/make','PageController@makeOrder');
// Route::get('/', [PageController::class, 'index']);

#user auth
Route::get('/login','User\AuthController@showLogin');
Route::post('/login','User\AuthController@postLogin');
Route::get('logout','User\AuthController@logOut');
Route::get('/register','User\AuthController@showRegister');
Route::post('/register','User\AuthController@postRegister');

});

#admin auth
Route::get('/admin/login','Admin\AuthController@showLogin');
Route::post('/admin/login','Admin\AuthController@postLogin');

Route::group(['prefix'=>'admin','namespace'=>'Admin', 'as'=>'admin.','middleware'=>'Admin'],function(){
    Route::get('/','PageController@dashboard');
    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');

    # For Order
    Route::get('/order/pending','OrderController@pending');
    Route::get('/order/complete','OrderController@complete');
    Route::get('/order/complete/{id}','OrderController@makeComplete');

    #for User
    Route::get('/user','PageController@alluser');
    Route::get('/logout','AuthController@logout');
});
