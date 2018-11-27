<?php

namespace App\Http\Controllers\Ecommerce\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
class UserController extends Controller
{
    //
   
    public function dashboard(){

    	$users  = User::find(Auth::user()->id);
    	return view('frontend.ecommerce.dashboards.User.modules.dashboard',compact('users'));
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
        $profile_img = $request->profileImage;
        // echo $profile_img;
        //die();
        $file_name = $profile_img->getClientOriginalName();
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
    	$users->save();


    	  return Redirect()->back()->with('status', 'User profile Updated successfully!');
    }
public function Order(){

$orders = DB::table('order_products')
            ->join('orders' , 'orders.id', '=', 'order_products.order_id')
            ->join('products', 'products.id','=','order_products.product_id')
             ->join('discounts', 'discounts.id', '=', 'products.discount_id')
            ->where('orders.user_id', '=' , Auth::user()->id)
             ->select('orders.id','order_products.order_product_unit_price','order_products.order_product_quantity','orders.shipping_charges','orders.order_tax','order_products.order_product_total_price','products.product_name','discounts.discount_percent','orders.order_status','orders.payment_method')
            ->get();

 // $products = DB::table('products')
 //            ->join('order_products','order_products.product_id','=','products.id')
 //            // ->where('orders.user_id', '=' , Auth::user()->id)
 //             ->select('products.product_name')
 //            ->get();           

            //echo $orders;
            // echo $products;
             //die();
return view('frontend.ecommerce.dashboards.User.modules.myorders',compact('orders'));
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
    $user->password = $request->password1;
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
      $users->delete();

       return view('frontend.general.index');
    }



}
