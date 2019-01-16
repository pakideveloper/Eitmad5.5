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


Route::group(['middleware' => 'role:vendor'], function() {
	Route::get('dashboard','Ecommerce\Vendor\VendorController@dashboard');
	Route::get('/','Ecommerce\Vendor\VendorController@dashboard');
	Route::Resource('product','Ecommerce\Vendor\ProductController');
	Route::Resource('profile','Ecommerce\Vendor\ProfileController');
	Route::Resource('order','Ecommerce\Vendor\OrderController');
	Route::get('search','Ecommerce\Vendor\OrderController@search');
	Route::post('upload/profile','Ecommerce\Vendor\ProfileController@uploadImage');
	Route::get('product/{id}/features','Ecommerce\Vendor\ProductController@getFeatures');
});