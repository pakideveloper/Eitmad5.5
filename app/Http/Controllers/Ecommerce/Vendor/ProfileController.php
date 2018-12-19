<?php

namespace App\Http\Controllers\Ecommerce\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Area;
use App\City;
use App\Vendor;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Auth::user();
        if ($vendor->city_id) {
            $vendor->city = $vendor->city;
            $vendor->country = $vendor->city->country;
        }
        if ($vendor->area_id) {
            $vendor->area = $vendor->area;
        }

        $data['vendor'] = $vendor;
        $data['cities'] = City::all();
        $data['areas'] = Area::all();
        $data['company'] = Vendor::find(Auth::user()->id);

        return view('frontend.ecommerce.dashboards.vendor.modules.profile.index',$data);
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
        $vendor = User::find($id);
        $vendor->first_name = $request->first_name;
        $vendor->last_name = $request->last_name ;
        $vendor->email = $request->email ;
        $vendor->contact_number = $request->contact_number ;
        $vendor->cnic = $request->cnic ;
        $vendor->gender = $request->gender ;
        $vendor->area_id = $request->area ;
        $vendor->city_id = $request->city ;
        $vendor->nationality = $request->nationality ;
        $vendor->address = $request->address ;
        $vendor->date_of_birth = $request->date_of_birth ;
        // $vendor-> = $request-> ;
        // $vendor-> = $request-> ;
        $vendor->save();
        return Redirect()->back()->with('status', 'Profile updated successfully!');
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
    public function uploadImage(Request $request)
    {
        $title_image = $request->file;
        $id = $request->id;
        $vendor = User::find($id);
        // if ($request->title_image) {
            // $product_file = new Product_File();
            // $product_file->product_id = $product->id;                
            $file_name = $title_image -> getClientOriginalName();
            $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            // $file_type = $title_image->getClientOriginalExtension();
            $url = url('/').'/public/admin/ecommerce/upload/profile/'.$file_name;
            $title_image -> move(public_path().'/admin/ecommerce/upload/profile', $file_name);
            $vendor->profile_url = $url;
            $vendor->save();
        // }
        // $title_image -> move(public_path().'/admin/ecommerce/upload/profile', 'dd.jpg');
        print_r($url);
    }
}
