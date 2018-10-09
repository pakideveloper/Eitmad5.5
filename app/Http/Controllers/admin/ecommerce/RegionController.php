<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Region;
use App\country;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $regions = Region::all();
          $countries = country::all();
        return view('admin/ecommerce/modules/regions/index', compact('regions', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = country::all();
         return view('admin/ecommerce/modules/regions/create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
      
       
        $region= new Region();
        $region->region_name =$request -> Input('region_name');
        $region->country_id =$request -> Input('country_id');
       

        $region ->save();

        
          //Alert::success('Inserted', 'Record Inserted successfully');    
        return Redirect()->back()->with('status', 'Region added successfully!');
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
         $region=Region::find($id);
        $region->region_name=$request->input('region_name');
        $region->country_id=$request->input('country_id');
       
    
        $region->update();

        // Alert::success('Updated', 'Record Updated successfully');  
       return Redirect()->back()->with('status', 'Region updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $region= Region::find($id);
        
        $region->delete();
       // Alert::success('Deleted', 'Record deleted successfully');
        return Redirect()->back()->with('status', 'Region deleted successfully!');
    }

     public function validation(Request $request)
    {
         $messages = [
            'region_name.required' => 'please insert region name.',
            'country_id.required' => 'please select country.'
            
        ];
        $this->validate($request, [
            'region_name' => 'required',
            'country_id' => 'required'          
        ],$messages);

    }
}
