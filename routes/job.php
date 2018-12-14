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
    $user = App\User::find(Auth::user()->id);
    return view('frontend/JobPortal/index',compact('user'));
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

Route::get('/paperjobs', function()
{
  return view('frontend/JobPortal/pages/paperjob/paperjob');
});

Route::get('/single-paperjob/{id}', 'Job\PostController@single_post');
Route::get('/single-paperjob', function()
{
  return view('frontend/JobPortal/pages/paperjob/single-paperjob');
});

Route::get('/paperjobs', 'Job\PostController@post' );



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

// <<<<<<<<<<<<<<<<<<<<<<<< JOBS SECTION >>>>>>>>>>>>>>>>>>>>>>>>>
Route::get('company/dashboard','Job\dashboard\company\CompanyController@dashboard');
Route::get('candidate/dashboard','Job\dashboard\candidate\CandidateController@dashboard');

/////////// Job Section////////
Route::resource('company/dashboard/post-job', 'Job\dashboard\company\JobController');

// <<<<<<<<<<<<<<<<<<<<<Candidate Profile >>>>>>>>>>>>>>>>>>>>>>>>
//manage-cvs
/*Route::get('candidate/create-cv',function(){

    return view('frontend/JobPortal/dashboards/candidate/modules/manage-cv/create') ;
});*/
Route::resource('candidate/user-profile', 'Job\CandidateProfileController' );
Route::get("/candidate/user-profile/{id}/del", 'Job\CandidateProfileController@deleteFunction' );

// Route::resource('candidate/user-profile', 'Job\CandidateProfileController' );
// Route::resource('candidate/update-profile', 'Job\CandidateProfileController' );

// Route::resource('candidate/edit-profile', 'Job\CandidateProfileController' );

Route::post('candidate/user-edu-profile', 'Job\CandidateProfileController@storeEducation' ); 
Route::post('candidate/user-edu-certificates', 'Job\CandidateProfileController@storeCertificate' ); 
Route::post('candidate/user-add-project', 'Job\CandidateProfileController@storeProjects' ); 
Route::post('candidate/user-add-experience', 'Job\CandidateProfileController@storeExperience' ); 
Route::get('candidate/view-profile', 'Job\CandidateProfileController@indexToView' ); 

/*Route::post('candidate/user-profile-update',function(){

    return view('frontend/JobPortal/dashboards/candidate/modules/manage-cv/create') ;
});*/
