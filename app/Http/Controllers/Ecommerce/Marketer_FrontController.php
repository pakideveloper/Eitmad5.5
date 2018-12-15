<?php

namespace App\Http\Controllers\Ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bidding;
use Auth;
use App\User;

class Marketer_FrontController extends Controller
{
	var $check;
    //
    public function bidForm(Request $request){
    		//$this->check = $this->check;
          echo $this->check;
         //die();

        	# code...
   
       if($this->check == 0)
       {
    	$biddings = new Bidding();
    	$biddings->proposal = $request->proposal;
    	$biddings->commission_ratio = $request->ratio;
    	$ratio = $request->ratio;
    	$price = $request->price;
    	$biddings->timestamp= $request->timeline;
    	$users = User::find(Auth::user()->id);
    	$biddings->user_id = $users->id;
    	$biddings->product_id = $request->product;
    	$biddings->commission_amount = $ratio * $price/100;
    	 //echo $users;
    	 //die();
    	
    	$biddings->save();
    	
    }
$this->check = $this->check+1;
    	echo $this->check;
    	//die();
    	return Redirect()->back()->with('status', 'thanks for bidding !! Your Request is submitted to respective User Please wait for Confirmation!');
    


 
    	  
    }
}
