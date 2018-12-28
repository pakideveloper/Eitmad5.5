<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Product_Category;
use App\Product_Sub_Category;
use DB;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        $categories= Product_Category::all();
        $sub_categories= Product_Sub_Category::all();

        return view('frontend/ecommerce/modules/products/products',compact('products','categories','sub_categories'));
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
        // $products = DB::table('products')->where('sub_category_id', $id)->get();
        $products = Product::where('sub_category_id','=', $id)->get();

        $categories= Product_Category::all();
        $sub_categories= Product_Sub_Category::all();

     // print_r($products_by_subcateg) ;
     // die();
        return view('frontend/ecommerce/modules/products/products',compact('products','categories','sub_categories'));


    }
        public function filterByPrice(Request $request)
    {

        $min_val = $_POST['minVal'];
        $max_val = $_POST['maxVal'];

        $categories= Product_Category::all();
        $sub_categories= Product_Sub_Category::all();
        $products = Product::whereBetween('product_price', array($min_val, $max_val ))->get();
                 if(count($products) == 0){
                     return Redirect()->back()->with('status','No Products Found In Given Range'); 

                 }else
                 {       
                     return view('frontend/ecommerce/modules/products/products',compact('products','categories','sub_categories'));
                }
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
