<?php

namespace App\Http\Controllers\Ecommerce\dashboard;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\country;
use App\City;
use App\Region;
use DB;
use App\Marketer;
use Illuminate\Http\Request;
use App\Bidding;
use Illuminate\Support\Facades\Input;
class AffiliateMarketerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users  = User::find(Auth::user()->id);
        $countries = country::all();
        $regions = Region::all();
        $cities = City::all(); 
        return view('frontend.ecommerce.dashboards.Affiliate_Marketer.modules.dashboard',compact('users','countries','regions','cities'));
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
        if(Input::hasFile('profileImage'))
        {
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
     }
        $users->save();
        $marketers = new Marketer();
        $marketers->user_id = $users->id;
        $marketers->payment_method = $request->p_method;
        $marketers->save();


          return Redirect()->back()->with('status', 'profile Updated successfully!');
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
        $biddings =Bidding::find($id);
        $biddings->proposal = $request->proposal;
        $biddings->commission_ratio = $request->ratio;
        $ratio = $request->ratio;
        $price = $request->price;
        $biddings->timestamp= $request->timeline;
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

       
            $biddings->update();
            return Redirect()->back()->with('status', 'Your Form has been successfully updated');
           
            # code...
        
        
        
        
       
        
        
    

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
    return Redirect()->back()->with('status', 'Marketer Password Updated successfully!');
 }
 else
 {
    echo "Sorry Password is not matched!!";
 }
 
// return view('frontend.ecommerce.dashboards.User.modules.changePassword');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        $user = User::find(Auth::user()->id);
        $user->activation = 0;
        // echo $user->activation;
        // die();
        $user->save();
        // $user->delete();
         return Redirect()->back()->with('status', 'Your profile has been successfully deactivated');
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
            // die();


$requests = DB::table('biddings')
            ->join('users' , 'users.id', '=', 'biddings.user_id')
            ->join('products', 'products.id','=','biddings.product_id')
            ->where('biddings.user_id', '=' , Auth::user()->id)
             ->select('biddings.id','biddings.proposal','biddings.commission_ratio','biddings.timestamp','biddings.commission_amount','biddings.status','products.product_name','products.product_price')
            ->get();

            // echo $requests;
            // die();

 
return view('frontend.ecommerce.dashboards.Affiliate_Marketer.modules.requested',compact('requests'));

}

public function deleteRequest($id)
    {
        //
        $biddings = Bidding::find($id);
$biddings->delete();
return Redirect()->back()->with('status', 'Request Deleted successfully!');


    }

}
