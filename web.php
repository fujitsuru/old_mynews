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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create','Admin\NewsController@add')->middleware('auth');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/edit','Admin\NewsController@add')->middleware('auth');
});



//課題3
Route::get('XXX', 'AAAController@bbb');

//課題4
Route::group(['prefix' => 'admin'], function(){
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
