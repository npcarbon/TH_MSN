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

Route::group(['prefix' => 'report'], function(){
    Route::get('/result-register', 'ReportController@result');
    Route::get('/THCOM', 'ReportController@thcom');
    Route::get('/THORG', 'ReportController@thorg');
    Route::get('/duballcup', 'ReportController@duballcup');
    Route::get('/duballhd', 'ReportController@duballhd');
    Route::get('/duballmobile', 'ReportController@duballmobile');
    Route::get('/duballhdfree', 'ReportController@duballhdfree');
    Route::get('/landingpage', 'ReportController@landingpage');
    Route::get('/rakastep', 'ReportController@rakastep');
    Route::get('/steptaek', 'ReportController@steptaek');
    Route::get('/tdball', 'ReportController@tdball');
});

Route::group(['middleware' => 'auth','prefix' => 'content'], function(){
    
});

Route::group(['middleware' => 'auth','prefix' => 'manage'], function(){
    
});
