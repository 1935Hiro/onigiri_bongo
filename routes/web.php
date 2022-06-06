<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordController;

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
  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/mypage', 'HomeController@mypage')->name('mypage');
    Route::get('/order', 'HomeController@order')->name('order');
    Route::get('/details', 'HomeController@details')->name('details');
    Route::get('/history', 'HomeController@history')->name('history');
    Route::get('/subsc', 'HomeController@subsc')->name('subsc');
});

Route::get('/file','FileUpController@index');
Route::post('/file','FileUpController@store');

Route::resource('users','UsersController',['only'=>['index','create','store']]);


//  Route::get('/', function () {
//      return view('home');
//   });


// Route::group(['prefix'=>'admin'],function(){
//     Route::get('mypage/create','Admin\MypageController@add')->middleware('auth');
// });

// Auth::routes();



// Route::get('/file','FileUpController@index');
// Route::post('/file','FileUpController@store');

// Route::resource('users','UsersController',['only'=>['index','create','store']]);