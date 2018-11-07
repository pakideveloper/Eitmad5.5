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
<<<<<<< HEAD
Route::get('/paperjobs', function()
{
  return view('frontend/JobPortal/pages/paperjob/paperjob');
});
Route::get('/single-paperjob', function()
{
  return view('frontend/JobPortal/pages/paperjob/single-paperjob');
});
=======
Route::get('/paperjobs', 'Job\PostController@post' );

>>>>>>> 6f6e0723928738f18680fa41032c9ef1f38c2a04

/////////// Company Registration /////
Route::get('/addcompany', function () {
	$industries = App\Industry::all();
	$countries = App\country::all();
    return view('frontend/JobPortal/pages/company/addcompany', compact('industries', 'countries'));
});

Route::resource('company_registration', 'Job\CompanyController');

	// fetching cities off country on add company page
Route::get('/addcompany/cities/{country}/cities.json', function($country){
    return App\City::where('country_id',$country)->get();
});

Route::get('company/dashboard','Job\dashboard\company\CompanyController@dashboard');
Route::get('candidate/dashboard','Job\dashboard\candidate\CandidateController@dashboard');