<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\country;
use App\City;
use App\Order_Product;
use DB;
use Auth;
use App\User;
use App\Order;
use App\Product;
use App\Region;
use App\Billing;
use App\Shipping;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = country::all();
        $cities = City::all();
        $regions = Region::all();
        $users  = User::find(Auth::user()->id);

        // ::where('users.id','=',Auth::user()->id)->select('first_name');

        // $orderproducts = DB::table('order_products')
        //                             ->join('products','products.id','=','order_products.product_id')
        //                             ->join('orders', 'orders.id', '=', 'order_products.order_id')
        //                             ->where('orders.user_id','=',Auth::user()->id);
        $orderproducts = Order_Product::all();
        return view('frontend/ecommerce/modules/CheckOut/checkout',compact('countries','orderproducts','users','cities','regions'));
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

            # code...
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
        //
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
