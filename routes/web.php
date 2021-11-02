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
    return view('home');
});

/**
 * Hoang 
 */
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
// Đăng nhập 
Route::get('/login','Auth\LoginController@getlogin')->name('login');
Route::post('/login', 'Auth\LoginController@postlogin')->name('login');
// Đăng xuất
Route::get('/logout','Auth\LogoutController@getLogout')->name('logout');
Route::post('/logout','Auth\LogoutController@getLogout')->name('logout');
//Doi mat khau
Route::get('/doimatkhau','AdminController@doimatkhau')->name('password.update');
Route::post('/doimatkhau','AdminController@doimatkhau')->name('password.update');
//Hien thi trang
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');
Route::get('/admins','AdminController@show')->name('admin.show');
//Quan ly Hien Thi danh sach user
Route::get('/detail','AdminController@detailuser')->name('admin.detailuser');
Route::get('/listuser', 'AdminController@listuser')->name('admin.listuser');
/**
 * end Diem
 */