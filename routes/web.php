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


Route::get('/index','App\Http\Controllers\IndexController@index');
Route::post('/addUser', 'App\Http\Controllers\SignupController@addUser');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\LogoutController@Logout');
Route::get('/book/{id}', 'App\Http\Controllers\IndexController@book');

Route::group(['prefix'=>'reader'],function(){

    Route::get('/home', 'App\Http\Controllers\Reader\HomeController@home');
    Route::get('/book/{id}', 'App\Http\Controllers\Reader\BookController@book');
    Route::post('/like', 'App\Http\Controllers\Reader\BookController@like');
    Route::post('/checklike', 'App\Http\Controllers\Reader\BookController@checklike');
    Route::post('/showlike', 'App\Http\Controllers\Reader\BookController@showlike');
    Route::post('/comment', 'App\Http\Controllers\Reader\BookController@comment');
    Route::post('/showcomment', 'App\Http\Controllers\Reader\BookController@showcomment');
    Route::get('/newbook', 'App\Http\Controllers\Reader\BooksController@book');
    Route::get('/about', 'App\Http\Controllers\Reader\AboutController@about');
    Route::get('/library', 'App\Http\Controllers\Reader\LibraryController@library');
    Route::get('/contact', 'App\Http\Controllers\Reader\ContactController@contact');
    Route::post('/card', 'App\Http\Controllers\Reader\BookController@card');
    Route::post('/muonsach', 'App\Http\Controllers\Reader\BookController@muonsach');
    Route::post('/checkrequest', 'App\Http\Controllers\Reader\BookController@checkrequest');
    Route::post('/search', 'App\Http\Controllers\Reader\HomeController@search');
    Route::post('/check', 'App\Http\Controllers\Reader\HomeController@check');
    Route::get('/chapter/{id}', 'App\Http\Controllers\Reader\ChapterController@showChapter');
    Route::post('/listchapter', 'App\Http\Controllers\Reader\BookController@listchapter');
    Route::post('/chapter_content', 'App\Http\Controllers\Reader\ChapterController@chapter_content');
    Route::post('/unseen_notification', 'App\Http\Controllers\Reader\BookController@unseen_notification');
    Route::post('/notification', 'App\Http\Controllers\Reader\BookController@notification');
    Route::get('/information', 'App\Http\Controllers\Reader\InformationController@showInfo');

    Route::post('/changepass', 'App\Http\Controllers\Reader\InformationController@changepass');
    Route::post('/changephone', 'App\Http\Controllers\Reader\InformationController@changephone');
    Route::post('/changeemail', 'App\Http\Controllers\Reader\InformationController@changeemail');
    Route::get('/borrow_return/{id}', 'App\Http\Controllers\Reader\InformationController@borrow_return');
    Route::post('/requiredDate', 'App\Http\Controllers\Reader\InformationController@requiredDate');
    Route::get('/favorite_book/{id}', 'App\Http\Controllers\Reader\InformationController@favorite_book');
    Route::post('/favorite_delete', 'App\Http\Controllers\Reader\InformationController@favorite_delete');
    Route::post('/category', 'App\Http\Controllers\Reader\HomeController@category');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/home', 'App\Http\Controllers\Admin\AdminController@home');
    Route::post('/changepass', 'App\Http\Controllers\Admin\AdminController@changepass');
    Route::post('/changephone', 'App\Http\Controllers\Admin\AdminController@changephone');
    Route::post('/changeemail', 'App\Http\Controllers\Admin\AdminController@changeemail');
    Route::get('/manage_reader', 'App\Http\Controllers\Admin\AdminController@manage_reader');
    Route::get('/manage_doc', 'App\Http\Controllers\Admin\AdminController@manage_doc');
    Route::get('/borrow_return', 'App\Http\Controllers\Admin\AdminController@borrow_return');
    Route::post('/duyet', 'App\Http\Controllers\Admin\AdminController@duyet');
    Route::get('/dangmuon', 'App\Http\Controllers\Admin\AdminController@dangmuon');
    Route::post('/delete', 'App\Http\Controllers\Admin\AdminController@delete');
    Route::post('/delete_book', 'App\Http\Controllers\Admin\AdminController@delete_book');
    Route::post('/add_book', 'App\Http\Controllers\Admin\AdminController@add_book');
    Route::get('/add_date', 'App\Http\Controllers\Admin\AdminController@add_date');
});
Route::post('/like', 'App\Http\Controllers\Reader\BookController@like');


Route::get('/aaaa', 'App\Http\Controllers\Reader\BooksController@test');