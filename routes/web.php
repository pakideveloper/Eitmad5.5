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
    $biddings = App\Bidding::find($id);
$biddings->status = 1;
$biddings->save();
$products = DB::table('products')
            ->where('products.id','=',$biddings->product_id)
            ->get();
         foreach ($products as $product) {
            	# code...
            }   
            event(new App\Events\StatusLiked($product->added_by_user));
            // echo $products;
            // die();
    return Redirect()->back()->with('status', 'Request Accepted successfully! Now Your Product go to Marketer Bucket');
});

Route::post('test3/{id}', function ($id) {
    event(new App\Events\SendRequest('Sender'));
    // return "Event has been sent!";
//     $biddings = App\Bidding::find($id);
// $biddings->status = 1;
// $biddings->save();
    return Redirect()->back()->with('status', 'Request Send successfully!');
});