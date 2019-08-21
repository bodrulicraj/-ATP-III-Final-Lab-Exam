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

Route::get('/welcome', function () {
   	return view('index');
});


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/user', 'HomeController@user')->name('user.index');
Route::get('/product', 'HomeController@product')->name('user.product');
Route::get('/asus', 'HomeController@asus')->name('asus.product');

// ******************* Routes For Signup Controller *************************
Route::get('/signup', 'SignUpController@index')->name('signup.index');
Route::post('/signup', 'SignUpController@create_user');

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/CustomerReviewsList', 'AdminController@CustomerReviewsList')->name('admin.CustomerReviewsList');
Route::get('student_detail', 'AdminController@detailStudent')->name('admin.detailStudent');
Route::get('delete_student', 'AdminController@deleteStudent')->name('admin.deleteStudent');


Route::get('/customer', 'CustomerController@index')->name('customer.index');




Route::get('/logout', 'LogoutController@index')->name('logout.logout');
