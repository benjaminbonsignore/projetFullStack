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

//Route::get('accueil', 'ProductController@index')->name('accueil');

Route::get('/detail/{n}', 'ProductController@show')->where('n','[0-9]+')->name('detail');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');