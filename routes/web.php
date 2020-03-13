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
    return view('auth.login');
});

Route::get('/masterlayout', function () {
    return view('layouts.master');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');*/

Route::get('/home', 'ProductAjaxController@index_user')->name('home');
Route::get('admin/home', 'ProductAjaxController@index')->name('admin.home')->middleware('is_admin');

Route::resource('ajaxproducts','ProductAjaxController');