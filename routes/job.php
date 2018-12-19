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
   
    if(isset(Auth::user()->id)){
    $user = App\User::find(Auth::user()->id);
     $jobs = App\Job::where('featuring_status','=','1')
            ->take(8)
            ->get();
    
    return view('frontend/JobPortal/index',compact('user','jobs'));
}else{
     $jobs = App\Job::where('featuring_status','=','1')
            ->take(8)
            ->get();
    return view('frontend/JobPortal/index',compact('jobs'));

}
// >>>>>>> b7d465a0adab1f31eac6eb3ae2d03d9987391413  
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
// login from job portal
Route::post('login', 'Auth\LoginController@loginFromJob' ); 

/*Route::post('/login', function(){
    return "hello";
});*/