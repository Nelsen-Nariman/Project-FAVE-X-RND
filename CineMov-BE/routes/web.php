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

Route::group(["middleware" => "auth"], function(){
    Route::get('/', 'ArticleController@index');

    // insert
    Route::get('/create', 'ArticleController@create');
    Route::get('/landing', 'ArticleController@landing');
    Route::post('/stores', 'ArticleController@store');
    Route::get('/update/{id}', 'ArticleController@edit');
    Route::put('/update/{id}', 'ArticleController@update');
    Route::delete('/delete/{id}', 'ArticleController@destroy');

});

Route::get('/home', 'HomeController@index')->name('home');
