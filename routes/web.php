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
    return view('index');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('product/create','Admin\ProductController@add')->middleware('auth');
    Route::post('product/create','Admin\ProductController@create')->middleware('auth');
    Route::get('product','Admin\ProductController@index')->middleware('auth');
    Route::get('product/edit','Admin\ProductController@edit')->middleware('auth');
    Route::post('product/edit','Admin\ProductController@update')->middleware('auth');
    Route::get('product/delete','Admin\ProductController@delete')->middleware('auth');
});

Auth::routes();

Route::get('/file','FileUpController@index');
Route::post('/file','FileUpController@store');

Route::resource('users','UsersController',['only'=>['index','create','store']]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index');