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
Route::get('/test', function () {
    echo "string";
});

Route::get('/', function () {
    return view('admin/ecommerce/modules/index');
});

Route::resource('/brands','admin\ecommerce\BrandController');
Route::resource('/products','admin\ecommerce\ProductController');
Route::get('/products/{id}/features','admin\ecommerce\ProductController@getFeatures');
Route::post('/products/deleteFile','admin\ecommerce\ProductController@deleteFile');
Route::resource('/categories','admin\ecommerce\ProductCategoryController');
Route::resource('/subcategories','admin\ecommerce\ProductSubCategoryController');
Route::resource('/countries','admin\ecommerce\CountryController');
Route::resource('/cities','admin\ecommerce\CityController');
Route::get('/city/selectcities/{id}','admin\ecommerce\CityController@selectcities');
Route::Resource('/roles','admin\ecommerce\RoleController');
Route::resource('/sliders','admin\ecommerce\SliderController');
Route::resource('/mainsliders','admin\ecommerce\SliderController');

Route::Resource('/orders','admin\ecommerce\OrderController');


/*Route::get('abc', function(){
	return view('admin/ecommerce/modules/roles/index');

}); */
// Discount
Route::resource('/discount','admin\ecommerce\DiscountController');
//Discount end
// Region
Route::resource('/region','admin\ecommerce\RegionController');
//Region end

// Area
Route::resource('/area','admin\ecommerce\AreaController');
//Area end
//User
Route::resource('/users','admin\ecommerce\UserController');
//User end
Route::post('RoleUpdate','admin\ecommerce\UserController@update2');
// fetching cities on selecting country
Route::get('/area/cities/{id}/cities.json','admin\ecommerce\CityController@cities');