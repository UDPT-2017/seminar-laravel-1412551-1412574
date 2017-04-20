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

Route::get('/', 'PageController@getHome');
Route::get('home', 'PageController@getHome');
Route::get('about', 'PageController@getAbout');
Route::get('account', 'PageController@getAccount');
Route::get('faq', 'PageController@getFaq');
Route::get('login', 'PageController@getLogin');
Route::get('cart', 'PageController@getCart');
Route::get('contact', 'PageController@getContact');
Route::get('product/{id}/{tenkhongdau}.html', 'PageController@getProduct');
Route::get('listproduct/{idhangsp}/{tenkhongdau}.html', 'PageController@getListProduct');