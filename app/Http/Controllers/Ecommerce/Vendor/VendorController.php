<?php

namespace App\Http\Controllers\Ecommerce\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Order;
use App\Order_Product;
use Carbon\Carbon;

class VendorController extends Controller
{
    public function dashboard(){
    	$products = Product::where('added_by_user',Auth::user()->id)->select('id')->get();
        $products = $products->toArray();
        $products = array_column($products, 'id');
        $order_ids = Order_Product::whereIn('product_id',$products)->select('order_id')->distinct()->get();
        $order_ids = $order_ids->toArray();
        $order_ids = array_column($order_ids, 'order_id');
        $orders = Order::whereIn('id', $order_ids)->get();
        // $orders = $orders->toArray();
        $graphData = array();
        for ($i=0; $i <12 ; $i++) { 
        	$inner_array = array();
        	$inner_array['year'] = 2019;
        	$inner_array['month'] = $i+1;
        	$inner_array['sale'] = 0;
        	$inner_array['profit'] = 0;
    		array_push($graphData, $inner_array);
        }
        // print_r($graphData);
        // die();
        
        foreach ($orders as $key => $order) {
        	$year =  (int)Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->year;
        	$month =  (int)Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->month;
        	$graphData[$month-1]['year'] = $year;
        	// echo $year;
        	// die();
        	$graphData[$month-1]['sale'] = $graphData[$month-1]['sale']+$order->order_amount_receivable;
        	// echo $month;
        	// echo array_search(1, array_column($graphData, 'month'));
        	// if ($orders[$key]->created_at == 12) {
        	// 	echo "string";
        		// die();
        	// }
        }
        // print_r($graphData);
        // die();
        // echo array_search(10, array_column($orders, 'id'));
        // die();
        // in_array("Glenn", $people)
        // $ordersLength = sizeof($orders);
        // echo $ordersLength;
  //       $timestemp = "2016-4-5 05:06:01";
		// $month = Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->month;
		// // dd($month);
  //       // die();
  //       $graphData = array();
  //       foreach ($orders as $key => $order) {
        	
  //       }
  //       for ($i=0; $i < 12 ; $i++) { 
  //       	$object = new stdClass();
  //       	$object->month = $i+1;
  //       	// $object->month_sale = 
  //       }
    	return view('frontend.ecommerce.dashboards.vendor.modules.dashboard',compact('graphData'));
    }
    public function addProduct(){    	
    	return view('frontend.ecommerce.dashboards.vendor.modules.products.add-product');
    }
}
