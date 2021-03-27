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


Route::get('/index','App\Http\Controllers\SignupController@index');

// Route::post('insertdata','App\Http\Controllers\LoginController@insertdata');
// Route::post('insertdata','App\Http\Controllers\LoginController@insertdata');

Route::post('/addUser', 'App\Http\Controllers\SignupController@addUser');
Route::post('/login', 'App\Http\Controllers\LoginController@login');

Route::group(['prefix'=>'reader'],function(){
    Route::get('/home', 'App\Http\Controllers\Reader\HomeController@home');
    Route::get('/book/{id}', 'App\Http\Controllers\Reader\BookController@book');
    Route::get('/thu', 'App\Http\Controllers\Reader\Thu@index');
    // Route::post('/addUser', 'App\Http\Controllers\SignupController@addUser');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/home', 'App\Http\Controllers\Admin\AdminController@home');
    Route::post('/changepass', 'App\Http\Controllers\Admin\AdminController@changepass');
});
Route::post('/like', 'App\Http\Controllers\Reader\BookController@like');