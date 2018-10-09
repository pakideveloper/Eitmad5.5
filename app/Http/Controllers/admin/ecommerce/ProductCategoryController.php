<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product_Category;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Product_Category::all();
        return view('admin/ecommerce/modules/categories/viewCategories',compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/ecommerce/modules/categories/create-parent');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $pcategory = new Product_Category();
        $pcategory->category_name = $request->category_name;
        $pcategory->save();
        return Redirect()->back()->with('status', 'Category added successfully!');
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
         $categories = Product_Category::find($id);
        
        return view('admin/ecommerce/modules/categories/editcategory', compact('categories','id'));
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
         $categories = Product_Category::find($id);
        $categories->category_name = $request->category_name;
        
        $categories->update();
         return Redirect()->back()->with('status', 'Category updated successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Product_Category::find($id);
      $categories->delete();

       return Redirect()->back()->with('status', 'Category Deleted successfully!');
    }
}
