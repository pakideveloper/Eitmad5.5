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
	$slider = App\Slider::latest()->get();
    return view('frontend/general/index',compact('slider'));
});

Auth::routes();

Route::get('/home', function () {
    return view('frontend/general/index');
});

//vendor
Route::view('/register/vendor','frontend.ecommerce.modules.registration.vendor-registration');
//vendor

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

