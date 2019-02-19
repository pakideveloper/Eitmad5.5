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
Route::get('migrate', function () {
//  echo 'd';
    /* php artisan migrate */
    Artisan::call('migrate');
    dd("Done");
});
Route::get('command', function () {
    Artisan::call('cache:clear');
     Artisan::call('config:cache');
    dd("Done");
});
Route::get('seed', function () {
    Artisan::call('db:seed');
    dd("Done");
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