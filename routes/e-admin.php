<?php
use App\EcomVisitor;
use App\EcomMessage;
use Illuminate\Http\Request;
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
Route::get('/test', function () {
    auth()->logout();
});
Route::group(['middleware'=> 'role:e_admin'], function(){
Route::get('/', function () {
    return view('admin/ecommerce/modules/index');
});

Route::resource('/brands','admin\ecommerce\BrandController');
Route::resource('/products','admin\ecommerce\ProductController');
Route::get('/products/{id}/features','admin\ecommerce\ProductController@getFeatures');
Route::post('/products/deleteFile','admin\ecommerce\ProductController@deleteFile');
Route::resource('/categories','admin\ecommerce\ProductCategoryController');
Route::resource('/subcategories','admin\ecommerce\ProductSubCategoryController');
Route::resource('/countries','admin\ecommerce\CountryController');
Route::resource('/cities','admin\ecommerce\CityController');
Route::get('/city/selectcities/{id}','admin\ecommerce\CityController@selectcities');
Route::Resource('/roles','admin\ecommerce\RoleController');
Route::resource('/sliders','admin\ecommerce\SliderController');
Route::resource('/mainsliders','admin\ecommerce\SliderController');

Route::Resource('/orders','admin\ecommerce\OrderController');


/*Route::get('abc', function(){
	return view('admin/ecommerce/modules/roles/index');

}); */
// Discount
Route::resource('/discount','admin\ecommerce\DiscountController');
//Discount end
// Region
Route::resource('/region','admin\ecommerce\RegionController');
//Region end

// Area
Route::resource('/area','admin\ecommerce\AreaController');
//Area end
//User
Route::resource('/users','admin\ecommerce\UserController');
//User end
Route::post('RoleUpdate','admin\ecommerce\UserController@update2');
// fetching cities on selecting country
Route::get('/area/cities/{id}/cities.json','admin\ecommerce\CityController@cities');
Route::get('/live-chat',function(){
	$visitors = EcomVisitor::latest()->get();
	return view('admin/ecommerce/modules/LiveChat/messages',compact('visitors'));
});
});
Route::post('postSignin', function(Request $request){
	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
        	$id = Auth::user()->id;
            $admin = DB::table('users')
	        ->join('role_user','users.id', '=' , 'role_user.user_id')
	        ->join('roles','roles.id', '=' , 'role_user.role_id')
	        ->where('users.id', '=' , $id)
	        ->where('roles.name', '=' , 'e_admin')
	        ->first(); 
	        if ( empty($admin))
        	{
	            auth()->logout();
	           	return Redirect()->back()->with('status','Sorry ! Please login as admin');
           	}
        }
        else
        {
             return Redirect()->back()->with('status','Sorry ! Wrong password or email');
        }
        return Redirect()->back();
    });