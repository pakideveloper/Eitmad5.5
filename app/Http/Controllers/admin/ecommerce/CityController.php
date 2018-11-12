<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\City;
use App\Region;
use App\country;
use DB;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $cities =City::all();
    return view('admin/ecommerce/modules/Cities/viewcities',compact('cities'));
    }

     public function cities($id){
        return City::where('country_id',$id)->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $countries = country::all();
          $regions = Region::all();

        return view('admin/ecommerce/modules/Cities/addcities',compact('regions','countries'));
    }


    public function selectcities($id)
    {
        // echo $id;
        //  die();
        // $regions = DB::table("regions")
        // ->select("region_name","id")
                    // ->where("country_id",$id);
                    
                    

                     // ->lists("region_name","id");
        // return json_encode($regions);
    return Region::where('country_id',$id)->get();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cities = new City();
        $cities->city_name = $request->city_name;
        $cities->city_code = $request->city_code;
        $cities->country_id = $request->c_name;
        $cities->region_id = $request->region;
        $cities->save();
       return Redirect()->back()->with('status', 'City added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "gggggg";
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
        $cities = City::find($id);
        $regions = Region::all();
         $countries = country::all();
        return view('admin/ecommerce/modules/Cities/editcities', compact('cities','regions','countries'));
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
        $cities = City::find($id);
        $cities->city_name = $request->city_name;
        $cities->city_code = $request->city_code;
        $cities->region_id = $request->region;
        
        $cities->update();
         return Redirect()->back()->with('status', 'City updated successfully!');

        
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cities = City::find($id);
      $cities->delete();

       return Redirect()->back()->with('status', 'City Deleted successfully!');
    }
}
