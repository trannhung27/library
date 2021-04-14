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

Route::get('/login','App\Http\Controllers\LoginController@showLoginform');

Route::get('/signin','App\Http\Controllers\SigninController@showSigninform');
Route::post('/signin','App\Http\Controllers\SigninController@insertsignin');

Route::get('/home','App\Http\Controllers\Home@index');


// Route::get('/','App\Http\Controllers\Thu@index');

Route::group(['prefix'=>'khachhang'],function(){
    Route::get('/','App\Http\Controllers\Khachhang\Thu@index');
    Route::get('/home','App\Http\Controllers\Khachhang\HomeController@showHomeform');
    Route::get('/donmua','App\Http\Controllers\Khachhang\DonmuaController@showDonmuaform');
    Route::get('/taikhoan','App\Http\Controllers\Khachhang\TaikhoanController@showTaikhoanform');
    Route::get('/thongbao','App\Http\Controllers\Khachhang\ThongbaoController@showThongbaoform');
    Route::get('/sanpham','App\Http\Controllers\Khachhang\BaidangController@showBaidangform');
    Route::post('/load_comment','App\Http\Controllers\Khachhang\BaidangController@load_comment');
    Route::get('/load_comment','App\Http\Controllers\Khachhang\BaidangController@load_comment');
});


Route::get('/loadmore', 'App\Http\Controllers\Thu@index');
Route::post('/loadcomment', 'App\Http\Controllers\Thu@load_data');

Route::get('/thu1','App\Http\Controllers\Khachhang\Thu@load_data');
Route::get('/thu2','App\Http\Controllers\Khachhang\Thu@insert_data');

Route::get('/bt','App\Http\Controllers\Khachhang\Thu@th');




Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/getUsers', 'App\Http\Controllers\PagesController@getUsers');
Route::post('/addUser', 'App\Http\Controllers\PagesController@addUser');
Route::post('/updateUser', 'App\Http\Controllers\PagesController@updateUser');
Route::get('/deleteUser/{id}', 'App\Http\Controllers\PagesController@deleteUser');
Route::get('echodata','App\Http\Controllers\PagesController@echodata');