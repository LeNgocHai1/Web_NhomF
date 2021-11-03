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
    return redirect('home');
});
Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('/product', 'ProductController');
// Route::get('/product/{id}/{slug?}', 'ProductController@show')->name('product.show');
Auth::routes();





Route::get('/listuser', 'AdminController@listuser')->name('admin.listuser');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin/manage-category','CategoryController@list')->name('manage-category')->middleware('admin');
Route::get('/admin/manage-category/create','CategoryController@create')->middleware('admin');
Route::post('/admin/manage-category/delete/{id}','CategoryController@delete')->name('manage-category.destroy')->middleware('admin');
Route::get('/admin/manage-category/edit/{id}','CategoryController@edit')->name('manage-category.find')->middleware('admin');
Route::post('/admin/manage-category/store','CategoryController@store')->name('manage-category-store')->middleware('admin');
Route::post('/admin/manage-category/update/{id}','CategoryController@update')->name('manage-category.update')->middleware('admin');
Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');
Route::get('/admins','AdminController@show')->name('admin.show');
Route::get('/detail','AdminController@detaiuser')->name('admin.detailuser');
//Route::delete('delete/', 'AdminController@destroy')->name('admin.destroy');
// Route::resource('/comment', 'CommentController');
// Route::resource('/category', 'CategoryController');