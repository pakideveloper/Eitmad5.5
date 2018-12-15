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
	
    return view('frontend/JobPortal/dashboards/company/modules/dashboard');
});

Auth::routes();

Route::Resource('add-job','Job\dashboard\company\JobController');
Route::Resource('all-jobs','Job\dashboard\company\JobController');
Route::Resource('job','Job\dashboard\company\JobController');

///Fetch data for adding job////
Route::get('add-job/cities/{id}/cities.json','Job\dashboard\company\JobController@citiesforjob');
Route::get('add-job/sub_categories/{id}/sub_categories.json','Job\dashboard\company\JobController@job_sub_categories');
Route::get('add-job/degree_types/{id}/degree_types.json','Job\dashboard\company\JobController@degree_types');

///Fetch data for Edit job////
$GLOBALS['CompanyDashboard']="/Eitmad5.5/jobs/company";
Route::get('cities/{id}/cities.json','Job\dashboard\company\JobController@citiesforjob');
Route::get('sub_categories/{id}/sub_categories.json','Job\dashboard\company\JobController@job_sub_categories');
Route::get('degree_types/{id}/degree_types.json','Job\dashboard\company\JobController@degree_types');

