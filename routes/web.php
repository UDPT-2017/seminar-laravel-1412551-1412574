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
Route::get('home', 'PageController@getHome')->name('home');
Route::get('about', 'PageController@getAbout');
Route::get('account', 'PageController@getAccount')->name('account');
Route::post('account','PageController@postAccount');
Route::get('faq', 'PageController@getFaq');
Route::get('login', 'PageController@getLogin')->name('login');
Route::post('login', 'PageController@postLogin');
Route::get('cart', 'PageController@getCart')->name('shoppingcart');
Route::get('contact', 'PageController@getContact');
Route::get('product/{id}/{tenkhongdau}.html', 'PageController@getProduct');
Route::get('listproduct/{idhangsp}/{tenkhongdau}.html', 'PageController@getListProduct');
Route::get('addcart/{idsp}', 'PageController@getAddCart');
Route::get('editcart/{idsp}/{qty}', 'PageController@getEditCart');
Route::get('deletecart/{id}', 'PageController@getDeleteCart');
Route::get('logout','PageController@getLogout')->name('logout');
Route::get('signup', 'PageController@getSignup')->name('signup');
Route::post('signup', 'PageController@postSignup');
Route::get('changepassword','PageController@getChangepassword')->name('changepassword');
Route::post('changepassword','PageController@postChangepassword');