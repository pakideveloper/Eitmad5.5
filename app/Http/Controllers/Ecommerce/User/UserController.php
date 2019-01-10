<?php

namespace App\Http\Controllers\Ecommerce\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StatusLiked;
use Auth;
use App\User;
use App\country;
use App\City;
use App\Region;
use DB;
use App\Bidding;
use App\Order;
use App\claim;
use App\Product;
use App\wishlist;
use App\Events\SendRequest;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
    //
   
    public function dashboard(){

    	$users  = User::find(Auth::user()->id);
        $countries = country::all();
        $regions = Region::all();
        $cities = City::all(); 
        
    	return view('frontend.ecommerce.dashboards.User.modules.dashboard',compact('users','countries','regions','cities'));
    }
    public function Claim(Request $request){
        $claims = new claim();
        $claims->product_id = $request->product_id;
        $claims->claim_request = $request->claim_request;
        $claims->claim_issue = $request->issue;
        $claims->save();
        event(new ClaimRequest('username'));
         
        return Redirect()->back()->with('status', ' Your Claim is submitted to respective Vendor. They will Contact You soon!');
    }

    public function profileEdit(Request $request){

       // echo "string";
         //die();
    	$users  = User::find(Auth::user()->id);
    	 //echo $users;
    	 //die();
    	$users->first_name = $request->first_name;
    	$users->last_name = $request->last_name;
    	$users->email = $request->email;
    	$users->address= $request->address;
    	$users->cnic = $request->cnic;
    	$users->contact_number = $request->mobile;
    	$users->date_of_birth = $request->date_of_birth;
    	$users->gender = $request->gender;
    	$users->nationality = $request->nationality;
        // $users->area_id = $request->area;
        $users->city_id = $request->city;
        // $profile_img = $request->profileImage;
        $profile_img = Input::file('profileImage');
        // echo $profile_img;
        //die();
        if(Input::hasFile('profileImage')){
        $file_name = $profile_img->getClientOriginalName(0);
        $file_name = uniqid().$file_name;
         $file_name = preg_replace('/\s+/', '', $file_name);
         $file_type = $profile_img->getClientOriginalExtension();
            $profile_img -> move(public_path().'/dashboard/ecommerce/upload/profile',$file_name);
            $users->profile_pic = $file_name;
            $file_size = $profile_img->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $users->profile_pic_size = $file_size;
         $users->profile_pic_extension = $file_type;
     }

    	$users->save();


    	  return Redirect()->back()->with('status', 'User profile Updated successfully!');
    }
public function Order(){

// $orders = DB::table('order_products')
//             ->join('orders' , 'orders.id', '=', 'order_products.order_id')
//             ->join('products', 'products.id','=','order_products.product_id')
//              ->join('discounts', 'discounts.id', '=', 'products.discount_id')
//             ->where('orders.user_id', '=' , Auth::user()->id)
//              ->select('orders.id','order_products.order_product_unit_price','order_products.order_product_quantity','orders.shipping_charges','orders.order_tax','order_products.order_product_total_price','products.product_name','discounts.discount_percent','orders.order_status','orders.payment_method','products.sub_category_id')
//             ->get();
    $orders = Order::where('user_id','=',Auth::user()->id)
                ->get();
                // print_r($orders);
                // die();

 $claimOrder = Order::where('orders.user_id','=', Auth::user()->id)
                ->get();
                // echo $claimOrder;
                // die();           

 // $products = DB::table('products')
 //            ->join('order_products','order_products.product_id','=','products.id')
 //            // ->where('orders.user_id', '=' , Auth::user()->id)
 //             ->select('products.product_name')
 //            ->get();           

            // echo $orders;
            // echo $products;
             // die();
return view('frontend.ecommerce.dashboards.User.modules.myorders',compact('orders','claimOrder'));
// echo "welcome to order method";
// die();

}
public function changePass(Request $request)
{
//echo "welcome";
 //die();
 $user = User::find(Auth::user()->id);
 $pass1 = $request->password1;
 $pass2 = $request->password2;

 if ($pass1 == $pass2) {
    echo "correct";
    $user->password = bcrypt($request->password1);
    $user->save();
    // die();
     # code...
    return Redirect()->back()->with('status', 'User profile Updated successfully!');
 }
 else
 {
    echo "Sorry Password is not matched!!";
 }
 
// return view('frontend.ecommerce.dashboards.User.modules.changePassword');
}
public function destroy()
    {
        $users = User::find(Auth::user()->id);
      // $users->delete();
        $users->activation = 0;
        // echo $user->activation;
        // die();
        $users->save();

       return view('frontend.general.index');
    }


public function regions($id)
    {
        // echo "string";
        // die();
        //
         return Region::where('country_id',$id)->get();
    }
    public function cities($id)
    {
        // echo "string";
        // die();
        //
         return City::where('region_id',$id)->get();
    }


    public function request(){
        // echo "hello";
        //      die();


$requests = DB::table('biddings')
            ->join('users' , 'users.id', '=', 'biddings.to_user')
            ->join('products', 'products.id','=','biddings.product_id')
            ->where('biddings.to_user', '=' , Auth::user()->id)
             ->select('biddings.id','biddings.proposal','biddings.commission_ratio','biddings.timestamp','biddings.commission_amount','biddings.status','products.product_name','products.product_price')
            ->get();

            // echo $requests;
            //  die();

 
return view('frontend.ecommerce.dashboards.User.modules.marketer-request',compact('requests'));

}
public function CancelRequest($id)
{
$biddings = Bidding::find($id);
$biddings->delete();
return Redirect()->back()->with('status', 'Request Deleted successfully!');

}
public function AcceptRequest($id)
{
    // echo "ok";
    // die();
$biddings = Bidding::find($id);
$biddings->status = 1;
$biddings->save();

return Redirect()->back()->with('status', 'Request Accepted successfully!');

}

public function WishList($id)
{
    // echo "ok";
    // die();
$products = Product::find($id);
$wishlists = new wishlist();
// echo $products->id;
// die();
$wishlists->product_id = $products->id;
$wishlists->user_id = Auth::user()->id;
$wishlists_count = DB::table('users_wishlists_products')->where('users_wishlists_products.user_id','=',Auth::user()->id)->where('users_wishlists_products.product_id','=',$id)->count();
// echo $wishlists_count;
// die();
if($wishlists_count!=0){
return Redirect()->back()->with('status', 'Product Already in your Wishlist!');
}
else
    {
$wishlists->save();
return Redirect()->back()->with('status', 'Product Added To Wishlist successfully!');
    }
}

public function UserWishList()
{
     // echo "ok";
     // die();
// $user = User::find();
$wishlists = wishlist::where('user_id','=',Auth::user()->id)->get();

 
return view('frontend.ecommerce.dashboards.User.modules.wishlist',compact('wishlists'));

}
public function DeleteUserWishList($id)
{
      // echo "ok";
      // die();
// $user = User::find();
$wishlists = wishlist::where('user_id','=',Auth::user()->id)->where('product_id','=',$id);
$wishlists->delete();

 
return Redirect()->back()->with('status', 'Product Removed From Wishlist!');

}


}
