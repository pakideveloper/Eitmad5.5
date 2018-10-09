<?php

namespace App\Http\Controllers\Ecommerce\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

use App\Product;
use Session;

class CartController extends Controller
{
    public function addToCart($id)
    {
    	$cas = 'new';
    	$cart_items = Cart::instance('shopping')->content();
    	foreach ($cart_items as $key => $value) {
    		
    		if (\Crypt::decrypt($value->id) == \Crypt::decrypt($id)) {
    			$cas = 'old';
    			$rowId = $value->rowId;
    			$quantity = $value->qty + 1;
    		}
    	}
    	switch ($cas) {
    		case 'new':
    			$product = Product::find(\Crypt::decrypt($id));
    			
		    	Cart::instance('shopping')->add(
		    		$id, 
		    		$product->product_name,
		    		1, 
		    		$product->product_discounted_price, 
		    		['orignal_price' => $product->product_price,'image' => $product->title_image]
		    	);

                // $message = 
		    	// $item = CartProvider::instance('shopping')->getCartItems()->get($rowId);
		  //   	$total_quantity = Cart::instance('shopping')->count();
		  //   	$object = new \stdClass;
		  //   	$object->discount_id = $product->id;
		  //   	// $object->rowId = $item->rowId;
		  //   	$object->name = $product->product_name;
		  //   	$object->price = $product->product_discounted_price;
		  //   	$object->quantity = '1';
		  //   	$object->status = 'new';
		  //   	$object->totalItems = $total_quantity;
		  //   	$object->total = Cart::instance('shopping')->total;
				// $object = json_encode($object);

		    	return redirect()->back()->with('status', $product->product_name.' '.'was successfully added to your cart.');
    			// break;
			case 'old':
				Cart::instance('shopping')->update($rowId, $quantity);
				$item = Cart::instance('shopping')->get($rowId);
				// $object = new \stdClass;
		  //   	$object->discount_id = \Crypt::decrypt($id);
		  //   	$object->price = $item->price;
		  //   	$object->name = $item->name;
		  //   	$object->quantity = $item->quantity;
		  //   	$object->sub_total = $item->subtotal;
		  //   	$object->total = Cart::instance('shopping')->total;
		  //   	$object->total_quantity = Cart::instance('shopping')->count();
		  //   	$object->status = 'old';
				// $object = json_encode($object);

		    	return redirect()->back()->with('status', $item->name.' '.'was updated to your cart.');
				// break;
    		
    		
    	}
    	
    	


    }

    public function test(Request $request){
        Cart::instance('shopping')->destroy();
        $cart_items = Cart::instance('shopping')->content();
        // // print_r($cart_items);
        foreach ($cart_items as $key => $value) {
            print_r($value);
        }
        //     die;
        // CartProvider::instance('shopping')->add(new Item(
        //             'id', 
        //             'name',
        //             1, 
        //             '23', 
        //             1.00, 
        //             true, 
        //             [], 
        //             ['orignal_price' => 'ddd','image' => 'sdsd']
        //         ));
        //yaha sy ya session ma jaata???
        // ha ya packeg ha. ab packeg pechay seesion e use krta hoga
    	// session()->regenerate();
    	// die();
    	/*CartPr

        $request->session()->flush();
        /* print_r(session()->all());
    	die();*/
        // CartProvider::instance('shopping')->destroy();

        // die();
    	// $cart_items = CartProvider::instance('shopping')->getCartItems();
        // print_r(session()->all());die();
    	// print_r($cart_items);
    	// die();
    	// $object = new \stdClass();
    	// $object->rowId = '23233nm34m3n4m3n'; 
    	// $object->name = 'name'; 
    	// $object->price = '100'; 
    	// $object->quantity = '3'; 
    	// $object->total = '300'; 
    	// Session::set('mySession') = $object;
    	// Session::set('variableName', $object);
    	// session(['key' => $object]);
    	// $sess = Session::get('mySession'); 
    	// print_r($sess);
    	// if(CartProvider::instance('test')->add(new Item('293ad', 'Product 1', 1, 9.99))){
    	// 	echo "hogya";
    	// }
	// $product = new stdClass;
	// $product = json_encode($product);
	// // print_r($product);
	// return $product;
	// die();
	// CartProvider::instance('shopping')->destroy();
    // $cart_items = session('key');
    // 	print_r($cart_items);
    }
}
