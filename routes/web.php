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

//định tuyến đến trang admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['namespace'=>'admin'], function () {
       Route::resources([
           'category'=>'CategoryController',
           'product'=>'ProductController',
           'user'=>'UsersController',
           'bill'=>'AdminBillController',
           'banner'=>'BannerController',
           'prodetail'=>'ProductdetailController'
       ]);
       Route::get('/','AdminController@index')->name('admin.index');
       Route::post('find','AdminController@find')->name('admin.find');
       
     });
   });
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


Route::get('/', function () {
    return view('home');
});
// điều hướng đến trang thông tin tài khoản
Route::resources([
    'info'=>'UserController',
  ]);
/**
 * end Diem
 */
Route::get('/', function () {
    return redirect('home');
});
Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('/product', 'ProductController');
// Route::get('/product/{id}/{slug?}', 'ProductController@show')->name('product.show');
Auth::routes();




// Route::get('/listuser', 'AdminController@listuser')->name('admin.listuser');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin/manage-category','CategoryController@list')->name('manage-category')->middleware('admin');
Route::get('/admin/manage-category/create','CategoryController@create')->middleware('admin');
Route::post('/admin/manage-category/delete/{id}','CategoryController@delete')->name('manage-category.destroy')->middleware('admin');
Route::get('/admin/manage-category/edit/{id}','CategoryController@edit')->name('manage-category.find')->middleware('admin');
Route::post('/admin/manage-category/store','CategoryController@store')->name('manage-category-store')->middleware('admin');
Route::post('/admin/manage-category/update/{id}','CategoryController@update')->name('manage-category.update')->middleware('admin');
Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');
// Route::get('/admins','AdminController@show')->name('admin.show');
// Route::get('/detail','AdminController@detaiuser')->name('admin.detailuser');
// Route::delete('delete/', 'AdminController@destroy')->name('admin.destroy');
// Route::resource('/comment', 'CommentController');
// Route::resource('/category', 'CategoryController');
