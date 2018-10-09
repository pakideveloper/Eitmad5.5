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
	$mainslider = App\Main_Slider::latest()->get();
    return view('frontend/ecommerce/modules/index',compact('mainslider'));
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

Route::get('/shoppingcart', function () {
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

Route::get('/product/addToCart/{id}', 'Ecommerce\Cart\CartController@addToCart');
Route::Resource('/checkout', 'Ecommerce\CheckoutController');


