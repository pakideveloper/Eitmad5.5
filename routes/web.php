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

<<<<<<< HEAD

//vendor
Route::view('/register/vendor','frontend.ecommerce.modules.registration.vendor-registration');
//vendor
=======
>>>>>>> 048b9e1bbb1fbc8b019dd226b42c2326b7cedc89
