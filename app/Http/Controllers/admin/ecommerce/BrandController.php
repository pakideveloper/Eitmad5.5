<?php

namespace App\Http\Controllers\admin\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Brand;
use App\Brand_Sub_Category_Assoc;
use App\Product_Sub_Category;
use DB;
use File;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::latest()->get();
        return view('admin/ecommerce/modules/brand/index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Product_Sub_Category::all();
        return view('admin/ecommerce/modules/brand/create',compact('subcategories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->storeValidate($request);
        $brand = new Brand(); 
        $subcategories = new Product_Sub_Category();
        $brand->brand_name = $request->brand_name;
        $subcategories->sub_category_id = $request->sub_category_id;
        $file_name = $request->file['0'] -> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_name = preg_replace('/\s+/', '', $file_name);
        $file_type = $request->file['0']->getClientOriginalExtension();
        $request->file['0'] -> move(public_path().'/admin/upload/brands',$file_name);
        $file_size = $request->file['0']->getClientSize();
        $file_size = $file_size/1000;
        $file_size = $file_size.' '.'kb';
        $brand->brand_logo = $file_name;
        $brand->brand_logo_size = $file_size;
        $brand->brand_logo_file_type = $file_type;
        $brand->save();
         if ($request->subcategories) 
        {
            foreach ($request->subcategories as $key => $value) 
            {
                $Brand_Sub_Category_Assoc = new Brand_Sub_Category_Assoc();
                $Brand_Sub_Category_Assoc->sub_category_id = $value;
                $Brand_Sub_Category_Assoc->brand_id = $brand->id;
                $Brand_Sub_Category_Assoc->save();
                
                // print_r($request->Brand_Sub_Category_Assoc);
            }
        }   
        return Redirect()->back()->with('status', 'Brand created successfully!');
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
         $brand = Brand::find($id);
         $subcategories= Product_Sub_Category::all();
         $project_categories =  DB::table('brand_subcategory_assoc')
        ->where('brand_subcategory_assoc.brand_id', '=' , $brand->id)
        ->join('product_sub_categories', 'product_sub_categories.id' , '=' , 'brand_subcategory_assoc.sub_category_id')
        ->select('product_sub_categories.sub_category_name','product_sub_categories.id')        
        ->get();


        $existing_c = array();
        foreach ($project_categories as $key => $value) {
              $existing_c[$key] = $value->id;
          }  
        return view('admin/ecommerce/modules/brand/edit', compact('brand','subcategories','project_categories','existing_c'));
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
        $brand = Brand::find($id);
        $subcategories = new Product_Sub_Category();
        $brand->brand_name = $request->brand_name;

        if ($request->file['0'])
        {
            $file_name = $request->file['0'] -> getClientOriginalName();
            $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            $file_type = $request->file['0']->getClientOriginalExtension();
            $request->file['0'] -> move(public_path().'/admin/ecommerce/upload/brands', $file_name);
            $file_size = $request->file['0']->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $brand->brand_logo = $file_name;
            $brand->brand_logo_size = $file_size;
            $brand->brand_logo_file_type = $file_type;
        }     
        if ($request->subcategories) {
            DB::table('brand_subcatogory_assoc')->where('brand_id', $id)->delete();
            foreach ($request->subcategories as $key => $value) {
                $Brand_Sub_Category_Assoc = new Brand_Sub_Category_Assoc();
                $Brand_Sub_Category_Assoc->category_id=$value;
                $Brand_Sub_Category_Assoc->brand_id = $brand->id;;
                $Brand_Sub_Category_Assoc->save();
            }
        }  
        $brand->update();
        return Redirect()->back()->with('status', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
    $brand = Brand::find($id);
    $data=$brand->brand_logo;
    $dir = public_path().'/admin/ecommerce/upload/brands/';
    $dirHandle = opendir($dir);
    while ($file = readdir($dirHandle)) {
                                         if($file==$data) {
                                                    unlink($dir.'/'.$file);
                                         }
    }
        $brand->delete();
        return Redirect('/ecommerce/admin/brands');
    }
    
    public function storeValidate(Request $request){
       
        $messages = [
            'brand_name.required' => 'please insert brand name',
            'file.required' => 'please upload brand logo',
            
        ];
        $this->validate($request, [
            'brand_name' => 'required',
             'file' => 'required',       
        ],$messages);
    }
}
