<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product_Sub_Category;
use App\Product_Category;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Html\HtmlBuilder;
use Carbon\Carbon;


class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $subcategories = Product_Sub_Category::all();
        return view('admin/ecommerce/modules/categories/viewSubCategories',compact('subcategories')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Product_Category::all();
        return view('admin/ecommerce/modules/categories/create-sub',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scategory = new Product_Sub_Category();
        $scategory->product_category_id = $request->pcategory;
         $scategory->sub_category_name = $request->scategory;
          $features = $request->input('feature_names'); 
        $myArray = explode(',', $features);
        $scategory->feature_names = json_encode($myArray);
        // foreach ($myArray as $key => $value) {
        //     Product_Sub_Category::create([
        //         'feature_names' => strtolower($value),                
        //     ]);
        // }
        $scategory->save();
        return Redirect()->back()->with('status', 'SubCategory added successfully!');
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
              $id = \Crypt::decrypt($id);

        $subcategories = Product_Sub_Category::find($id);
         $categories = Product_Category::all();
         // print_r($subcategories);
         // die();
        return view('admin/ecommerce/modules/categories/editsubcategory', compact('subcategories','categories'));
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
        $subcategories = Product_Sub_Category::find($id);
        $subcategories->product_category_id = $request->pcategory;
         $subcategories->sub_category_name = $request->scategory;
          $features = $request->input('feature_names'); 
        $myArray = explode(',', $features);
        $subcategories->feature_names = json_encode($myArray);
        // foreach ($myArray as $key => $value) {
        //     Product_Sub_Category::create([
        //         'feature_names' => strtolower($value),                
        //     ]);
        // }
        
        $subcategories->update();
        return Redirect()->back()->with('status', 'SubCategory Updated successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategories = Product_Sub_Category::find($id);
      $subcategories->delete();

      return Redirect()->back()->with('status', 'SubCategory Deleted successfully!');
    }
}
