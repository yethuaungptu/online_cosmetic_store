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

Route::get('/clear','CustomerController@clear');


Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
Route::resource('admin/category','CategoryController')->middleware('auth');
Route::resource('admin/brand','BrandController')->middleware('auth');
Route::resource('admin/product','ProductController')->middleware('auth');
