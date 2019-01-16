<?php

namespace App\Http\Controllers\Ecommerce\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Order_Product;
use App\Product;
use Auth;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('added_by_user',Auth::user()->id)->select('id')->get();
        $products = $products->toArray();
        $products = array_column($products, 'id');
        $order_ids = Order_Product::whereIn('product_id',$products)->select('order_id')->distinct()->get();
        $order_ids = $order_ids->toArray();
        $order_ids = array_column($order_ids, 'order_id');
        $orders = Order::whereIn('id', $order_ids)->latest()->paginate(1);
        Session::forget('vendor_order_cs');
        $vendor_order_cs = Session::get('vendor_order_cs');
        // print_r($vendor_order_cs);
        // die();
        return view('frontend.ecommerce.dashboards.vendor.modules.order.index',compact('orders', 'vendor_order_cs'));
    }
    public function search()
    {
        (isset($_GET['c_1'])) ? $c_1 = $_GET['c_1'] : $c_1 = null; 
        (isset($_GET['c_2'])) ? $c_2 = $_GET['c_2'] : $c_2 = null; 
        (isset($_GET['c_3'])) ? $c_3 = $_GET['c_3'] : $c_3 = null; 
        (isset($_GET['c_4'])) ? $c_4 = $_GET['c_4'] : $c_4 = null; 
        if (!$c_1 && !$c_2 && !$c_3 && !$c_4 && isset($_GET['in_form'])) {
            Session::forget('vendor_order_cs');
        }
        (isset($_GET['search_key'])) ? $search_key = $_GET['search_key'] : $search_key = null;


        $products = Product::where('added_by_user',Auth::user()->id)->select('id')->get();
        $products = $products->toArray();
        $products = array_column($products, 'id');
        $order_ids = Order_Product::whereIn('product_id',$products)->select('order_id')->distinct()->get();
        $order_ids = $order_ids->toArray();
        $order_ids = array_column($order_ids, 'order_id');

        $vendor_order_cs = Session::get('vendor_order_cs');
        if (isset($vendor_order_cs)) {
            $orders = Order::whereIn('id', $order_ids)->whereIn('order_status', $vendor_order_cs)->latest()->paginate(1);
        }else{
            $orders = Order::whereIn('id', $order_ids)->latest()->paginate(1);
        }
        if ($c_1 || $c_2 || $c_3 || $c_4) {
            $vendor_order_cs = array('c_1' => $c_1, 'c_2' => $c_2, 'c_3' => $c_3,'c_4' => $c_4 );
            $orders = Order::whereIn('id', $order_ids)->whereIn('order_status', $vendor_order_cs)->latest()->paginate(1);
            Session::put('vendor_order_cs', $vendor_order_cs);
        }
        if ($search_key) {
            $user_ids = User::where('first_name', 'LIKE', "%$search_key%")->select('id')->get();
            $user_ids = $user_ids->toArray();
            $user_ids = array_column($user_ids, 'id');
            if (isset($vendor_order_cs)) {
                $orders = Order::whereIn('id', $order_ids)->whereIn('order_status', $vendor_order_cs)->whereIn('user_id', $user_ids)->latest()->paginate(1);
            }else{
                $orders = Order::whereIn('id', $order_ids)->whereIn('user_id', $user_ids)->latest()->paginate(1);
            }                
        }
        $vendor_order_cs = Session::get('vendor_order_cs');
        return view('frontend.ecommerce.dashboards.vendor.modules.order.index',compact('orders', 'vendor_order_cs','search_key'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->order_status = $request->status;
        $order->save();
        return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
