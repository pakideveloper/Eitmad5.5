<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\country;
use App\Order_Product;
use DB;
use Auth;
use App\User;
use App\Order;
use App\Product;


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
        $users  = User::find(Auth::user()->id);
        // ::where('users.id','=',Auth::user()->id)->select('first_name');

        // $orderproducts = DB::table('order_products')
        //                             ->join('products','products.id','=','order_products.product_id')
        //                             ->join('orders', 'orders.id', '=', 'order_products.order_id')
        //                             ->where('orders.user_id','=',Auth::user()->id);
        $orderproducts = Order_Product::all();
        return view('frontend/ecommerce/modules/CheckOut/checkout',compact('countries','orderproducts','users'));
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
