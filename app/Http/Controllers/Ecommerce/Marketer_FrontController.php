<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bidding;
use Auth;
use App\User;
use DB;
use App\Events\SendRequest;

class Marketer_FrontController extends Controller
{
	 private $check;
    //
    public function bidForm(Request $request){
    		 
echo $this->check;
        	# code...
    if ($this->check == 0) {
        # code...
    
    	$biddings = new Bidding();
    	$biddings->proposal = $request->proposal;
    	$biddings->commission_ratio = $request->ratio." "."%";
    	$ratio = ($request->ratio);
    	$price = $request->price;
    	$biddings->timestamp= $request->timeline." ".$request->time;
        $users = User::find(Auth::user()->id);

    	$checks = DB::table('biddings')
                ->select('biddings.user_id')
                ->where('biddings.user_id','=', $users->id)
                ->get();
                
                //  echo $checks;
                // die();
        
    	$biddings->user_id = $users->id;
        $products = DB::table('products')
                    ->select('products.id')
                    ->where('products.product_name','=',$request->product)
                    ->get();

                   
         
         foreach ($products as  $value) {
             # code...
         
            $biddings->product_id = $value->id;                        # code...
         }                      

    	// $biddings->product_id = $request->product;
    	$biddings->commission_amount = $ratio * $price/100;
    	 //echo $users;
    	 //die();
         $checks = DB::table('biddings')
                ->select('biddings.user_id')
                ->where('biddings.product_id','=', $value->id)
                ->get();
                // echo $checks;
                // die();
        if ($checks == '[]') {
            $biddings->save();
            event(new SendRequest('Sender'));
            return Redirect()->back()->with('status', 'thanks for bidding !! Your Request is submitted to respective User Please wait for Confirmation!');
           
            # code...
        }
        else
        {
            event(new SendRequest('Sender'));
             echo "SORRY!! YOU ARE ALREADY BID THIS PROJECT IF U WANT TO CHANGE THEN GO TO YOUR DASHBOARD AND UPDATE IT...THANKU";
            
        }
    	
    	
       
    	
    	
    
}
   


 
    	  
    }
}
