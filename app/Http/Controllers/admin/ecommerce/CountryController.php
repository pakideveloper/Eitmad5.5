<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $countries = country::all();
        return view('admin/ecommerce/modules/Countries/viewcountry',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/ecommerce/modules/Countries/addcountry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new country();
        $country->country_name = $request->c_name;
        $country->save();
        return Redirect()->back()->with('status', 'Country added successfully!');
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
         $id = \Crypt::decrypt($id);
         $countries = country::find($id);
        
        return view('admin/ecommerce/modules/Countries/editcountry', compact('countries','id'));
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
        $countries = country::find($id);
        $countries->country_name = $request->c_name;
        
        $countries->update();
        return Redirect()->back()->with('status', 'Country updated successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $countries = country::find($id);
      $countries->delete();

       return Redirect()->back()->with('status', 'Country Deleted successfully!');
    }
}
