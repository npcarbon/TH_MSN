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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth','prefix' => 'review'], function(){

});

Route::group(['middleware' => 'auth','prefix' => 'report'], function(){
    
});

Route::group(['middleware' => 'auth','prefix' => 'content'], function(){
    
});

Route::group(['middleware' => 'auth','prefix' => 'manage'], function(){
    
});
