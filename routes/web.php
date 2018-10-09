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
//usama
Route::get('/', function () {
    return view('frontend/general/index');
});

Route::get('/admin', function () {
    return view('admin/ecommerce/modules/index');
});
Route::get('/admin2', function () {
    return view('admin/ecommerce/modules/index2');
}); 


// Route::get('/ecommerce', function () {
//     return view('frontend/ecommerce/modules/index');
// });

// Route::group(['middleware'=>'role:admin'], function(){

// });


// Route::get('/viewcategory', function () {
//     return view('admin/ecommerce/modules/categories/viewCategories');
// });



// fetching cities on selecting country

// Route::get('/register', function () {
//     return view('frontend/ecommerce/modules/registration/register');
// });

// Route::get('/Home', function () {
//     return view('index');
// });
 // Route::get('/register', 'Auth\RegisterController@register');
 Route::get('/login', 'Auth\LoginController@login');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



//////////////////JOB PORTAL LINKS//////////////////

///frontend links//

// Route::get('/ecommerce', function () {
//     return view('frontend/ecommerce/modules/index');
// });


// Route::get('/ecommerce', function () {
//     return view('frontend/ecommerce/modules/index');
// });


Route::get('/home', function () {
    return view('frontend/general/index');
});

// Route::get('/Ecommerce', function () {
//     return view('frontend/ecommerce/modules/index');
// });





// Route::get('/jobportal', function () {
//     return view('frontend/JobPortal/index');
// });

// Route::get('/employers', function () {
//     return view('frontend/JobPortal/pages/employers');
// });
// Route::get('/employerdetail', function () {
//     return view('frontend/JobPortal/pages/employerdetail');
// });
// Route::get('/aboutportal', function () {
//     return view('frontend/JobPortal/pages/AboutPortal');
// });
// Route::get('/contactus', function () {
//     return view('frontend/JobPortal/pages/ContactUs');
// });
// Route::get('/addjob', function () {
//     return view('frontend/JobPortal/pages/AddJob');
// });
