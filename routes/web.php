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

Route::get('/', function () {
    return view('welcome');
});
  /*-------------------------------*/ 
    
    Route::get('/contact', [
        'uses' => 'ContactMessageController@create'
    ])->name('contactG');
    
    Route::post('/contact', [
        'uses' => 'ContactMessageController@store',
        'as' => '/contact.store'
    ]);
    /*-------------------------------*/
        Route::get('/inscription', function () {
            return view('auth/register');
        });
        /*------------------------------*/
            Auth::routes();
            Route::get('/', 'HomeController@index')->name('home');
        /*----------------------------------*/


