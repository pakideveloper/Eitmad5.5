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

Route::get('/make/seed', function () {
    $seeds = array('areas','biddings','billing_details','billing_infos','brands','brand_subcategory_assoc','candidate_certificates','candidate_educational_profiles','candidate_experience','candidate_job_associations','candidate_profiles','candidate_projects','cities','claim_orders','companies','company_ceo_info','countries','custom_questions','cus_q_c_j_a','degree_levels','degree_types','discounts','ecom_messages','ecom_visitors','industries','jobs','job_categories','job_sub_categories','job_types','marketers','migrations','newspaper','orders','order_products','paper_posts','password_resets','permissions','permission_role','products','product_categories','product_files','product_sub_categories','regions','roles','role_user','shipping_details','sliders','tenders','tender_products','tender_responses','users','users_wishlists_products','vendors','verify_users');
    // print_r($seeds);
    // die();
    foreach ($seeds as $key => $value) {
        \Iseed::generateSeed($value,'Con', 'No');
    }
	
});

Route::get('migrate', function () {
//  echo 'd';
    /* php artisan migrate */
    Artisan::call('migrate');
    dd("migrated succesfully");
});
Route::get('command', function () {
    Artisan::call('cache:clear');
     Artisan::call('config:cache');
    dd("cace cleared");
});
Route::get('seed', function () {
    Artisan::call('db:seed');
    dd("seeding success");
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

Route::post('test2/{id}', function ($id) {
    // event(new App\Events\StatusLiked('Someone'));
    // return "Event has been sent!";
    $user = App\User::find(Auth::user()->id);
    $biddings = App\Bidding::find($id);
$biddings->status = 1;
$biddings->save();
$products = DB::table('products')
            ->where('products.id','=',$biddings->product_id)
            ->get();
         foreach ($products as $product) {
            	# code...
            }   
            
            event(new App\Events\StatusLiked($biddings->to_user));
        
            // echo $products;
            // die();
    return Redirect()->back()->with('status', 'Request Accepted successfully! Now Your Product go to Marketer Bucket');
});


Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');