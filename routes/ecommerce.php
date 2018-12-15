<?php
// use CartProvider;
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
	$slider = App\Slider::latest()->get();
    return view('frontend/ecommerce/modules/index',compact('slider'));
});
Auth::routes();

Route::get('/home', function () {
    return view('frontend/general/index');
});


Route::get('/items', function () {

    
	// CartProvider::instance('shopping')->destroy();

	// CartProvider::instance('test')->add(new Item('293ad', 'Product 1', 1, 9.99));
	// $product = new stdClass;
	// $product = json_encode($product);
	// // print_r($product);
	// return $product;
	// die();
	// CartProvider::instance('shopping')->destroy();
    $cart_items = CartProvider::instance('test')->getCartItems();
    	print_r($cart_items);
    	// die();
    // foreach ($cart_items as $key => $value) {
    // 	echo $key;
    // 	echo "<br>";
    // 	print_r( $value->name);
    // }
});

Route::get('/test','Ecommerce\Cart\CartController@test');

Route::get('/products', function () {
	$products = App\Product::latest()->get();
    return view('frontend/ecommerce/modules/products/products',compact('products'));
});

Route::get('/single-product/{slug}', function ($slug) {
	$product = App\Product::where('slug', $slug)->first();
    return view('frontend/ecommerce/modules/products/single-product',compact('product'));
});

Route::get('/category/{slug}', function ($slug) {
    $sub_category_id = App\Product_Sub_Category::where('sub_category_name',$slug)->first()->id;
    $products = App\Product::where('sub_category_id', $sub_category_id)->get();
    return view('frontend/ecommerce/modules/products/products',compact('products'));
});

Route::get('/cart', function () {
    return view('frontend/ecommerce/modules/shopping-cart/cart');
});
Route::get('/wishlist', function () {
    return view('frontend/ecommerce/modules/wishlist/wishlist');
});
// Route::get('/checkout', function () {
//     return view('frontend/ecommerce/modules/CheckOut/checkout');
// });
Route::get('/blog', function () {
    return view('frontend/ecommerce/modules/blog/blog');
});
Route::get('/singleblog', function () {
    return view('frontend/ecommerce/modules/blog/single_blog');
});
Route::get('/about', function () {
    return view('frontend/ecommerce/modules/About/aboutus');
});
Route::get('/support', function () {
    return view('frontend/ecommerce/modules/Support/support');
});
Route::post('/product/addToCart', 'Ecommerce\Cart\CartController@addToCart');
Route::get('/removeFromCart/{rowId}', 'Ecommerce\Cart\CartController@romoveOne');
Route::Resource('/checkout', 'Ecommerce\CheckoutController');
Route::get('/city/selectregions/{id}', 'Ecommerce\CheckoutController@selectregions');
Route::get('/city/selectcities/{id}', 'Ecommerce\CheckoutController@selectcities');
Route::get('/city/regions/{id}', 'Ecommerce\User\UserController@regions');
Route::get('/city/cities/{id}', 'Ecommerce\User\UserController@cities');
Route::get('/callback', 'Ecommerce\PaymentCheckoutController@callback');
Route::post('/ship_bill_details', 'Ecommerce\PaymentCheckoutController@create');
Route::post('/banktransfer', function () {
    return view('frontend/ecommerce/modules/CheckOut/paymentcheckout');
    });
//vendor
    /*dasboard*/
    Route::get('vendor/dashboard','Ecommerce\Vendor\VendorController@dashboard');
    Route::get('user/dashboard','Ecommerce\User\UserController@dashboard');
    Route::post('/profile','Ecommerce\User\UserController@profileEdit');
    Route::get('/myorders','Ecommerce\User\UserController@Order');
    Route::get('/deactivate','Ecommerce\User\UserController@destroy');
   Route::get('/changepassword', function () {
    return view('frontend/ecommerce/dashboards/User/modules/changePassword');
    });
   Route::Resource('/user/addproduct', 'Ecommerce\dashboard\User\ProductController');
   Route::Resource('/marketer/dashboard', 'Ecommerce\dashboard\AffiliateMarketerController');
   Route::Post('/city/regions/{id}', 'Ecommerce\dashboard\AffiliateMarketerController@regions');
   Route::Post('/city/cities/{id}', 'Ecommerce\dashboard\AffiliateMarketerController@cities');
   Route::post('/user/show/AllProducts', 'Ecommerce\dashboard\User\ProductController@AllProducts');
   Route::post('/passwordchange','Ecommerce\User\UserController@changePass');
   Route::post('/marketer/bidForm', 'Ecommerce\Marketer_FrontController@bidForm');
    Route::get('/{vue_capture?}', function () { return redirect()->back(); })->where('vue_capture', '[\/\w\.-]*');

    //add product
    // Route::get('vendor/add-product','Ecommerce\Vendor\VendorController@addProduct')->name('add-product');
    //add product
    /*dasboard*/

//vendor



