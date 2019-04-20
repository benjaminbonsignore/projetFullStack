<?php

use App\Http\Controllers\WelcomeController;

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

Route::get('/', 'ProductController@index')->name('accueil');

Route::get('/products', 'ProductController@display');
Route::get('/products/{n}', 'ProductController@filter');

Route::get('/detail/{n}', 'ProductController@show')->where('n','[0-9]+')->name('detail');

Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/detail/cart/{m}', 'CartController@addToCart')->where('m','[0-9]+');
Route::get('/cart/delete/{n}','CartController@destroy')->where('n','[0-9]+');
Route::get('/cart/deleteOne/{n}','CartController@destroyOne')->where('n','[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', [
    'uses' => 'ContactMessageController@create'
]);

Route::post('/contact', [
    'uses' => 'ContactMessageController@store',
    'as' => '/contact.store'
]);