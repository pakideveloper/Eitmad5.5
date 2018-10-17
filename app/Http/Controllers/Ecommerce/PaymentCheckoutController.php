<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Order;
use App\Order_Product;
use App\Product;
use App\Region;
use App\Billing;
use App\Shipping;
use Cart;
 // use App\Http\Controllers\Ecommerce\Cart;


class PaymentCheckoutController extends Controller
{

            
        
    //
    public function callback(Request $request)
    {


         
          echo "success";
          // $cart_items = Cart::instance('shopping')->content();
     // dd($request->all());
//     	$hashSecretWord = 'hassan'; //2Checkout Secret Word
// $hashSid = 901394952; //2Checkout account number
// $hashTotal = $_REQUEST['total']; //Sale total to validate against
// $hashOrder = $_REQUEST['order_number']; //2Checkout Order Number
// $StringToHash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal));

// if ($StringToHash != $_REQUEST['key']) {
// 	$result = 'Fail - Hash Mismatch'; 
// 	} else { 
// 	$result = 'Success - Hash Matched';
// }

// echo $result;
$orders = new Order();
        $orders->order_status = 0;
        $orders->shipper_id = 1;
        $orders->biller_id = 1;
        
        
        $orders->order_amount = $_REQUEST['total'];
        $orders->order_item = $_REQUEST['li_0_name'];
        $orders->order_amount_receivable = $_REQUEST['total'];
        
        $orders->shipping_charges = "100";
        $orders->order_tax = "100";
        
        $orders->user_id = Auth::user()->id;
        $orders->city_id = 1;
        $orders->discount_id = 1;
        $orders->save();
        $orderproducts = new Order_Product();
        $orderproducts->order_product_price = $_REQUEST['total'];
        $orderproducts->order_product_quantity = $_REQUEST['li_0_quantity'];
        $orderproducts->order_product_total_price = $_REQUEST['total'];
         $orderproducts->order_id = $orders->id;
        
         $oproducts = Product::where('product_name', '=' , $_REQUEST['li_0_name'])
        ->select('products.id')
        ->get();
            
          foreach ($oproducts as  $oproduct) {
             $orderproducts->product_id = $oproduct->id;

         
          }
         
         $orderproducts->save();



}
public function create(Request $request)
{






        $billings = new Billing();
        $billings->biller_first_name = $request->b_f_name;
        $billings->biller_last_name = $request->b_l_name;
        $billings->biller_email = $request->b_email;
        $billings->biller_phone_number = $request->b_phone;
        $billings->country_id = $request->b_country;
        $billings->region_id = $request->b_region;
        $billings->city_id = $request->b_city;
        $billings->biller_address = $request->b_address;
        if($request->s_check=='on')
        {
        $billings->address_check = 1;
        }
        else
        {
         $billings->address_check = 0;
        }

        $billings->save();
        


        if ($billings->address_check == 1) {

        
            $shippings = new Shipping();
        $shippings->shipper_first_name = $request->s_f_name;
        $shippings->shipper_last_name = $request->s_l_name;
        $shippings->shipper_email = $request->s_email;
        $shippings->shipper_phone_number = $request->s_phone;
        $shippings->country_id = $request->s_country;
        $shippings->region_id = $request->s_region;
        $shippings->city_id = $request->s_city;
        $shippings->shipper_address = $request->s_address;
        $shippings->save();
        }
        else
        {
            $shippings = new Shipping();
        $shippings->shipper_first_name = $request->b_f_name;
        $shippings->shipper_last_name = $request->b_l_name;
        $shippings->shipper_email = $request->b_email;
        $shippings->shipper_phone_number = $request->b_phone;
        $shippings->country_id = $request->b_country;
        $shippings->region_id = $request->b_region;
        $shippings->city_id = $request->b_city;
        $shippings->shipper_address = $request->b_address;
        $shippings->save();

        



        
        return view('frontend/ecommerce/modules/CheckOut/paymentcheckout');



}


}
}