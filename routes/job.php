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
    $jobs = App\Job::where('featuring_status','=','1')
            ->take(8)
            ->get();
            // print_r($jobs);
            // die();
    return view('frontend/JobPortal/index', compact('jobs'));
});

///// all jobs on frontend///////////
Route::get('/job', function()
{
  $jobs = App\Job::where('approval_status','=','1')
            ->where('active_status','=','1')
            ->paginate(6);
            $latest_jobs = App\Job::where('approval_status','=','1')
            ->where('active_status','=','1')
            ->latest()->take(8)->get();
            // print_r($latest_jobs);
            // die();
  return view('frontend/JobPortal/modules/Jobs/jobs', compact('jobs','latest_jobs'));
});

/////// single job on front end///////////
Route::get('/single_job/{id}', function($id)
{
    $job = App\Job::find($id);
    $similar_jobs = App\Job::where('job_sub_category_id','=', $job->job_sub_category_id)
                    ->take(4)
                    ->get();

  return view('frontend/JobPortal/modules/Jobs/single_job', compact('job','similar_jobs'));
});


Route::get('/employers', function () {
    return view('frontend/JobPortal/modules/company/companies');
});
Route::get('/employerdetail', function () {
    return view('frontend/JobPortal/modules/employerdetail');
});
Route::get('/aboutportal', function () {
    return view('frontend/JobPortal/modules/AboutPortal');
});
Route::get('/contactus', function () {
    return view('frontend/JobPortal/modules/ContactUs');
});
Route::get('/addjob', function () {
    return view('frontend/JobPortal/modules/AddJob');
});

Route::get('/paperjobs', function()
{
  return view('frontend/JobPortal/modules/paperjob/paperjob');
});


Route::get('/single-paperjob/{id}', 'Job\PostController@single_post');
Route::get('/paperjobs/{id}', 'Job\PostController@singlepaper_post');
Route::get('/single-paperjob', function()
{
  return view('frontend/JobPortal/modules/paperjob/single-paperjob');
});

Route::get('/paperjobs', 'Job\PostController@post' );
Route::get('/paperjobs/Tender', 'Job\PostController@Tenderpost' );
Route::get('/paperjobs/Admission', 'Job\PostController@Admissionpost' );
//manage-cvs
Route::get('candidate/manage-cv',function(){

    return view('frontend/JobPortal/dashboards/candidate/modules/manage-cv/index') ;
});



/////////// Company Registration /////
Route::get('/addcompany', function () {
	$industries = App\Industry::all();
	$countries = App\country::all();
    return view('frontend/JobPortal/modules/company/addcompany', compact('industries', 'countries'));
});

Route::resource('company_registration', 'Job\CompanyController');

	// fetching cities off country on add company page
Route::get('/addcompany/cities/{country}/cities.json', function($country){
    return App\City::where('country_id',$country)->get();
});

Route::get('company/dashboard','Job\dashboard\company\CompanyController@dashboard');
Route::get('candidate/dashboard','Job\dashboard\candidate\CandidateController@dashboard');

/////////// Job Section////////
Route::resource('company/dashboard/post-job', 'Job\dashboard\company\JobController');