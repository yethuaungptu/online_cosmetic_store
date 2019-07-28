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

Route::get('/','CustomerController@home');
Route::get('/customer/cart/{id}','CustomerController@cart');
Route::get('/customer/removeP/{id}','CustomerController@remove');
Route::get('/product/detail/{id}','CustomerController@pdetail');
Route::get('/products','CustomerController@list');
Route::get('/productsCat/{id}','CustomerController@procat');
Route::get('/productsBnd/{id}','CustomerController@probnd');
Route::get('/refineS','CustomerController@refine');
Route::get('/customer/cartview', 'CustomerController@cartview');
Route::get('/customer/checkout', 'CustomerController@checkout');
Route::get('/customer/login', 'CustomerController@login');
Route::get('/customer/register', 'CustomerController@register');
Route::post('/customer/register', 'CustomerController@registerUser');
Route::post('/customer/login', 'CustomerController@loginUser');
Route::get('/customer/logout', 'CustomerController@logout');
Route::post('/customer/cart', 'CustomerController@cartS');
Route::get('/customer/invoice','CustomerController@invoice');
Route::post('/customer/confirm','CustomerController@confirm');
Route::get('/search','CustomerController@search');
Route::get('/contact','CustomerController@contact');

Route::get('/clear','CustomerController@clear');


Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
Route::get('/admin/orders', 'AdminController@orders')->middleware('auth');
Route::get('/admin/orderN', 'AdminController@orderN')->middleware('auth');
Route::get('/admin/order/{id}', 'AdminController@detail')->middleware('auth');
Route::post('/admin/order', 'AdminController@updateO')->middleware('auth');
Route::get('/admin/customers', 'AdminController@customers')->middleware('auth');
Route::get('/admin/customersN', 'AdminController@customersN')->middleware('auth');
Route::resource('admin/category','CategoryController')->middleware('auth');
Route::resource('admin/brand','BrandController')->middleware('auth');
Route::resource('admin/product','ProductController')->middleware('auth');
