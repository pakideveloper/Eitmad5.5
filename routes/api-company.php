<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/getCategories', function(){
// 	$categories = App\Product_Category::all();
// 	return $categories;
// });
// Route::get('/getSubCategories', function(){
// 	$sub_categories = App\Product_Sub_Category::all();
// 	return $sub_categories;
// });
// Route::get('/getBrands', function(){
// 	$brands = App\Brand::all();
// 	return $brands;
// });
// Route::get('/getDiscounts', function(){
// 	$discounts = App\Discount::all();
// 	return $discounts;
// });
Route::Resource('add-job','Job\dashboard\company\JobController');
Route::Resource('all-jobs','Job\dashboard\company\JobController');
Route::Resource('del-job','Job\dashboard\company\JobController');
Route::get('all-jobs/search/{term?}','Job\dashboard\company\JobController@index');
