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
Auth::routes(['verify' => true]);
Route::get('/accueil', 'HomeController@index')->name('accueil');
//Route::get('accueil', 'ProductController@index')->name('accueil');

/*---------------------PANIER----------------------*/
Route::get('/detail/{n}', 'ProductController@show')->where('n','[0-9]+')->name('detail');

Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/detail/cart/{m}', 'CartController@addToCart')->where('m','[0-9]+');
Route::get('/cart/delete/{n}','CartController@destroy')->where('n','[0-9]+');
Route::get('/cart/deleteOne/{n}','CartController@destroyOne')->where('n','[0-9]+');
/*---------------------PANIER----------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
*/

/*----------------------CONTACTEZ-NOUS------------------------------*/
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
/*----------------------CONTACTEZ-NOUS------------------------------*/

/*----------------------SYSTEME DE PAIEMENT------------------------------*/
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
/*----------------------SYSTEME DE PAIEMENT------------------------------*/
