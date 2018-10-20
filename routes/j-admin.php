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
    return view('admin/job/modules/dashboard');
});
Route::resource('/degree_levels','admin\job\DegreeLevelController');
Route::resource('/degree_types','admin\job\DegreeTypeController');
<<<<<<< HEAD
Route::resource('/industries','admin\job\IndustryController');
=======

///////////COMPANIES///////////
Route::resource('companies','admin\job\AdminCompanyController');
Route::post('companies/updateStatus','admin\job\AdminCompanyController@UpdateStatus');
>>>>>>> d981d22a5f5d796e03232e04a1ef4100cc6e82a0
