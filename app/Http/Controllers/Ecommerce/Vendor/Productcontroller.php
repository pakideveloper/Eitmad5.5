<?php

namespace App\Http\Controllers\Ecommerce\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Product_Category;
use App\Product_Sub_Category;
use App\Product_File;
use App\Brand;
use App\Discount;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $file=$request->SKU;
        // $file = json_decode($file);
        // print_r($file);
        // echo $request->sub_category_id;
        // die();
        $product = new Product();
        $product->product_name = $request->name ;
        $product->product_description = $request->description ;
        $product->product_size = $request->size ;
        $product->product_colour = $request->color ;
        $product->product_price = $request->price ;
        $product->product_quantity = $request->quantity ;
        $product->sub_category_id = $request->sub_category_id ;
        $discount = Discount::find($request->discount);
        $product->product_discounted_price = $request->price - (($discount->discount_percent * $request->price) / 100);
        $product->brand_id = $request->brand ;
        $product->discount_id = $request->discount;

        $sub_category = Product_Sub_Category::find($product->sub_category_id);
        $features = json_decode($sub_category->feature_names);
        $features_array = array();
        foreach ($features as $key => $value) {
            $value = preg_replace('/\s+/', '', $value);
            // $input = 'product_'.$value;
            $features_array[$value] = $request->$value;
        }
        $product->other_features = json_encode($features_array);
        
        $slug = $this->makeSlug($product->product_name); 
        $product->slug = $slug;

        $product->save();
        /*tilte image*/
        if ($request->titleImage) {
            $titleImage = $request->titleImage;
            $product_file = new Product_File();
            $product_file->product_id = $product->id;                
            $file_name = $titleImage -> getClientOriginalName();
            $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            $file_type = $titleImage->getClientOriginalExtension();
            $titleImage -> move(public_path().'/admin/ecommerce/upload/products', $file_name);
            $file_size = $titleImage->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $product_file->product_file_name = $file_name;
            $product_file->product_file_size = $file_size;
            $product_file->product_file_extension = $file_type;
            $product_file -> save();
            $product->title_img_id = $product_file->id;
            $product->save();          
        }
        if ($request->sliderImages) {
            $sliderImages = $request->sliderImages;
            foreach ($sliderImages as $key => $sliderImage) {
                $product_file = new Product_File();
                $product_file->product_id = $product->id;                
                $file_name = $sliderImage -> getClientOriginalName();
                $file_name = uniqid().$file_name;
                $file_name = preg_replace('/\s+/', '', $file_name);
                $file_type = $sliderImage->getClientOriginalExtension();
                $sliderImage -> move(public_path().'/admin/ecommerce/upload/products', $file_name);
                $file_size = $sliderImage->getClientSize();
                $file_size = $file_size/1000;
                $file_size = $file_size.' '.'kb';
                $product_file->product_file_name = $file_name;
                $product_file->product_file_size = $file_size;
                $product_file->product_file_extension = $file_type;
                $product_file -> save();
            }
        }  


        /*tilte image*/
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
    public function makeSlug($title){
        $reg="/\s/"; 
        $rep="-"; 
        $slug=preg_replace($reg, $rep,$title);
        $product = Product::where('slug', $slug)->first();
        $increament = 1;

        while ($product != null) {
            $slug = $slug.'-'.$increament;
            $increament++;
            $product = Product::where('slug', $slug)->first();
        }
        return $slug;
    }
}
