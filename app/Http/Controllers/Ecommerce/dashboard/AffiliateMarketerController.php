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

$requests = DB::table('biddings')
            ->join('users' , 'users.id', '=', 'biddings.user_id')
            ->join('products', 'products.id','=','biddings.product_id')
            ->where('biddings.user_id', '=' , Auth::user()->id)
             ->select('orders.id','order_products.order_product_unit_price','order_products.order_product_quantity','orders.shipping_charges','orders.order_tax','order_products.order_product_total_price','products.product_name','discounts.discount_percent','orders.order_status','orders.payment_method')
            ->get();

 
return view('frontend.ecommerce.dashboards.Affiliate_Marketer.modules.requested',compact('requests'));

}

}
