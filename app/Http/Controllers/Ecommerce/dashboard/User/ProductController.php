<?php

namespace App\Http\Controllers\Ecommerce\dashboard\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product_Category;
use App\Product_Sub_Category;
use App\Brand;
use App\Discount;
use App\Product;
use App\Product_File;
use DB;
use App\User;
use Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        //
         // $products = DB::table('products')
         //             ->where('products.added_by_user','=',$user->id)
         //             ->get();
        
            # code...
          $products = product::where('products.added_by_user', '=' , $user->id)
                      ->get();
                      // echo $products;
                      // die();
        

        return view('frontend.ecommerce.dashboards.User.modules.product.index',compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Product_Category::all();
        $sub_categories = Product_Sub_Category::all();
        $brands = Brand::all();
        $discounts = Discount::all();
        return view('frontend.ecommerce.dashboards.User.modules.product.addProduct',compact('categories','sub_categories','brands','discounts'));
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
        // $file=$request->SKU;
        // $file = json_decode($file);
        // print_r($file);
        // echo $request->sub_category_id;
        // die();
        if ($request->sub_category_id) {
            $this->storeValidation_second($request , $request->sub_category_id);
        }
        // die;
        $this->storeValidation($request);
        $product = new Product();
        $product->product_name = $request->product_name ;
        $product->product_description = $request->product_description ;
        $product->product_size = $request->product_size ;
        $product->product_colour = $request->product_colour ;
        $product->product_price = $request->product_price ;
        $product->product_quantity = $request->product_quantity ;
        $product->sub_category_id = $request->sub_category_id ;
        $discount = Discount::find($request->discount_id);
        $product->product_discounted_price = $request->product_price - (($discount->discount_percent * $request->product_price) / 100);
        $product->brand_id = $request->brand_id ;
        $product->discount_id = $request->discount_id;

        $sub_category = Product_Sub_Category::find($product->sub_category_id);
        $features = json_decode($sub_category->feature_names);
        $features_array = array();
        foreach ($features as $key => $value) {
            $value = preg_replace('/\s+/', '', $value);
            $input = 'product_'.$value;
            $features_array[$value] = $request->$input;
        }
        $product->other_features = json_encode($features_array);
        
        $slug = $this->makeSlug($product->product_name); 
        $product->slug = $slug;
        $product->added_by_user = Auth::user()->id;
     // echo $product->added_by_user;
     // die();
        $product->save();
        /*tilte image*/
        $title_image = $request->title_image;
        if ($request->title_image) {
            $product_file = new Product_File();
            $product_file->product_id = $product->id;                
            $file_name = $title_image -> getClientOriginalName();
            $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            $file_type = $title_image->getClientOriginalExtension();
            $title_image -> move(public_path().'/admin/ecommerce/upload/products', $file_name);
            $file_size = $title_image->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $product_file->product_file_name = $file_name;
            $product_file->product_file_size = $file_size;
            $product_file->product_file_extension = $file_type;
            $product_file -> save();
        }
        $product = Product::find($product->id);
        $product->title_img_id = $product_file->id;
        $product->update();

        if ($request->images) {
            $images = $request->images;
            foreach ($images as $key => $image) {
                $product_file = new Product_File();
                $product_file->product_id = $product->id;                
                $file_name = $image -> getClientOriginalName();
                $file_name = uniqid().$file_name;
                $file_name = preg_replace('/\s+/', '', $file_name);
                $file_type = $image->getClientOriginalExtension();
                $image -> move(public_path().'/admin/ecommerce/upload/products', $file_name);
                $file_size = $image->getClientSize();
                $file_size = $file_size/1000;
                $file_size = $file_size.' '.'kb';
                $product_file->product_file_name = $file_name;
                $product_file->product_file_size = $file_size;
                $product_file->product_file_extension = $file_type;
                $product_file -> save();
            }
            
        }
        return Redirect()->back()->with('status', 'Product added successfully!');
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
        $product = Product::find($id);
        $categories = Product_Category::all();
        $sub_categories = Product_Sub_Category::all();
        $brands = Brand::all();
        $discounts = Discount::all();
        return view('frontend.ecommerce.dashboards.User.modules.product.edit',compact('product','categories','sub_categories','brands','discounts'));

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
        //
        // $file=$request->SKU;
        // $file = json_decode($file);
        // print_r($file);
        // echo $request->sub_category_id;
        // die();
        if ($request->sub_category_id) {
            $this->storeValidation_second($request , $request->sub_category_id);
        }
        // die;
        $this->storeValidation($request);
        $product = Product::find($id);
        $product->product_name = $request->product_name ;
        $product->product_description = $request->product_description ;
        $product->product_size = $request->product_size ;
        $product->product_colour = $request->product_colour ;
        $product->product_price = $request->product_price ;
        $product->product_quantity = $request->product_quantity ;
        $product->sub_category_id = $request->sub_category_id ;
        $discount = Discount::find($request->discount_id);
        $product->product_discounted_price = $request->product_price - (($discount->discount_percent * $request->product_price) / 100);
        $product->brand_id = $request->brand_id ;
        $product->discount_id = $request->discount_id;

        $sub_category = Product_Sub_Category::find($product->sub_category_id);
        $features = json_decode($sub_category->feature_names);
        $features_array = array();
        foreach ($features as $key => $value) {
            $value = preg_replace('/\s+/', '', $value);
            $input = 'product_'.$value;
            $features_array[$value] = $request->$input;
        }
        $product->other_features = json_encode($features_array);
        
        $slug = $this->makeSlug($product->product_name); 
        $product->slug = $slug;

        $product->update();
        /*tilte image*/
        $title_image = $request->title_image;
        if ($request->title_image) {
            // $product_file =Product_File::where('product_files.product_id','=',$id)->get();
            $product_file = new Product_File();
            $product_file->product_id = $product->id;                
            $file_name = $title_image -> getClientOriginalName();
            $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            $file_type = $title_image->getClientOriginalExtension();
            $title_image -> move(public_path().'/admin/ecommerce/upload/products', $file_name);
            $file_size = $title_image->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $product_file->product_file_name = $file_name;
            $product_file->product_file_size = $file_size;
            $product_file->product_file_extension = $file_type;
            $product_file -> save();
        }
        $product = Product::find($product->id);
        $product->title_img_id = $product_file->id;
        $product->update();

        if ($request->images) {
            $images = $request->images;
            foreach ($images as $key => $image) {
                // $product_file =Product_File::where('product_files.product_id','=',$id)->get();
                $product_file = new Product_File();
                $product_file->product_id = $product->id;                
                $file_name = $image -> getClientOriginalName();
                $file_name = uniqid().$file_name;
                $file_name = preg_replace('/\s+/', '', $file_name);
                $file_type = $image->getClientOriginalExtension();
                $image -> move(public_path().'/admin/ecommerce/upload/products', $file_name);
                $file_size = $image->getClientSize();
                $file_size = $file_size/1000;
                $file_size = $file_size.' '.'kb';
                $product_file->product_file_name = $file_name;
                $product_file->product_file_size = $file_size;
                $product_file->product_file_extension = $file_type;
                $product_file -> save();
            }
            
        }
        return Redirect()->back()->with('status', 'Product Updated successfully!');
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
        $product = Product::find($id);
        $files = Product_File::where('product_id', $id)->get();
        foreach ($files as $key => $value) {
            $dir = public_path()."/admin/ecommerce/upload/products/";
            $dirHandle = opendir($dir);
            // echo $dir;
            // die();
            while ($fil = readdir($dirHandle)) {
                if($fil==$value->product_file_name) {
                    unlink($dir.'/'.$fil);
                 }
            }
        }
        $product->delete();
        return Redirect()->back()->with('status', 'Product Deleted successfully!');
    }
    public function getFeatures($id){
        $sub_category = Product_Sub_Category::find($id);
        $features = json_decode($sub_category->feature_names);
        return $features;
    }
    public function storeValidation(Request $request){
        $messages = [
            'product_name.required' => 'please enter product name',
            'product_description.required' => 'please enter product name',
            'product_size.required' => 'please enter size',
            'product_colour.required' => 'please enter product color',
            'product_price.required' => 'please enter product price',
            'product_quantity.required' => 'please enter product quantity',
            'sub_category_id.required' => 'please select product category',
            'discount_id.required' => 'please select iscount type',
            'brand_id.required' => 'please select brand ',
            'title_image.required' => 'please select title image',
            'images.required' => 'please select at least one image',
            
        ];
        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_size' => 'required',
            'product_colour' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'sub_category_id' => 'required',
            'discount_id' => 'required', 
            'brand_id' => 'required',            
            'title_image' => 'required',            
            'images' => 'required',            
        ],$messages);
    }
    public function storeValidation_second(Request $request, $id){
        // echo "ss" ;
        // die();
        $messages = [
            'product_name.required' => 'please enter product name',
            'product_description.required' => 'please enter product name',
            'product_size.required' => 'please enter size',
            'product_colour.required' => 'please enter product color',
            'product_price.required' => 'please enter product price',
            'product_quantity.required' => 'please enter product quantity',
            'sub_category_id.required' => 'please select product category',
            'discount_id.required' => 'please select iscount type',
            'brand_id.required' => 'please select brand ',
            'title_image.required' => 'please select title image',
            'images.required' => 'please select at least one image',
            
        ];
        $input_name_array = [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_size' => 'required',
            'product_colour' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'sub_category_id' => 'required',
            'discount_id' => 'required', 
            'brand_id' => 'required',            
            'title_image' => 'required',            
            'images' => 'required',            
        ];


        
        $sub_category = Product_Sub_Category::find($id);
        $features = json_decode($sub_category->feature_names);
        $features_array = array();
        foreach ($features as $key => $value) {
            $re_value = preg_replace('/\s+/', '', $value);
            $input = 'product_'.$re_value;
            $messages[$input] = "please enter ".$value." ";
            $input_name_array[$input] = "required";
        }
        // print_r($input_name_array);
        // die;


        $this->validate($request, $input_name_array ,$messages);
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

    public function AllProducts()
    {
        // $products = product::all();
         $user = User::find(Auth::user()->id);
        //
        // $products = product::all();
        $products = product::where('products.added_by_user', '=' , $user->id)
                      ->get();
                    // echo $products;
                    // die();
        return view('frontend.ecommerce.dashboards.User.modules.product.all-products',compact('products'));
    }

}
