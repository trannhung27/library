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
Route::post('/addUser', 'App\Http\Controllers\SignupController@addUser');
Route::post('/login', 'App\Http\Controllers\LoginController@login');

Route::group(['prefix'=>'reader'],function(){
    Route::get('/home', 'App\Http\Controllers\Reader\HomeController@home');
    Route::get('/book/{id}', 'App\Http\Controllers\Reader\BookController@book');
    Route::post('/like', 'App\Http\Controllers\Reader\BookController@like');
    Route::post('/showlike', 'App\Http\Controllers\Reader\BookController@showlike');
    Route::post('/comment', 'App\Http\Controllers\Reader\BookController@comment');
    Route::post('/showcomment', 'App\Http\Controllers\Reader\BookController@showcomment');
    Route::get('/newbook', 'App\Http\Controllers\Reader\BooksController@book');
    Route::get('/about', 'App\Http\Controllers\Reader\AboutController@about');
    Route::get('/library', 'App\Http\Controllers\Reader\LibraryController@library');
    Route::get('/contact', 'App\Http\Controllers\Reader\ContactController@contact');
    Route::post('/card', 'App\Http\Controllers\Reader\BookController@card');
    Route::post('/muonsach', 'App\Http\Controllers\Reader\BookController@muonsach');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/home', 'App\Http\Controllers\Admin\AdminController@home');
    Route::post('/changepass', 'App\Http\Controllers\Admin\AdminController@changepass');
    Route::post('/changephone', 'App\Http\Controllers\Admin\AdminController@changephone');
    Route::post('/changeemail', 'App\Http\Controllers\Admin\AdminController@changeemail');
});
Route::post('/like', 'App\Http\Controllers\Reader\BookController@like');

