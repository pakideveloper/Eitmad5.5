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
    return view('frontend/JobPortal/index');
});

Route::get('/employers', function () {
    return view('frontend/JobPortal/pages/employers');
});
Route::get('/employerdetail', function () {
    return view('frontend/JobPortal/pages/employerdetail');
});
Route::get('/aboutportal', function () {
    return view('frontend/JobPortal/pages/AboutPortal');
});
Route::get('/contactus', function () {
    return view('frontend/JobPortal/pages/ContactUs');
});
Route::get('/addjob', function () {
    return view('frontend/JobPortal/pages/AddJob');
});