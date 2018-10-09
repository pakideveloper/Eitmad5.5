<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Area;
use App\country;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
          $countries = country::all();
        return view('admin/ecommerce/modules/areas/index', compact('areas', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $countries = country::all();
         return view('admin/ecommerce/modules/areas/create', compact('countries'));
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
      
       
        $area= new Area();
        $area->area_name =$request -> Input('area_name');
        $area->area_code =$request -> Input('area_code');
        $area->city_id =$request -> Input('city_id');
       

        $area ->save();

        
          //Alert::success('Inserted', 'Record Inserted successfully');    
        return Redirect()->back()->with('status', 'Area added successfully!');
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
        $area=Area::find($id);
        $area->area_name=$request->input('area_name');
         $area->area_code=$request->input('area_code');
        $area->city_id=$request->input('city_id');
       
    
        $area->update();

        // Alert::success('Updated', 'Record Updated successfully');  
       return Redirect()->back()->with('status', 'Area updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area= Area::find($id);
        
        $area->delete();
       // Alert::success('Deleted', 'Record deleted successfully');
        return Redirect()->back()->with('status', 'Area deleted successfully!');
    }

    public function validation(Request $request)
    {
         $messages = [
            'area_name.required' => 'please insert area name.',
            'city_id.required' => 'please select city.'
            
        ];
        $this->validate($request, [
            'area_name' => 'required',
            'city_id' => 'required'          
        ],$messages);

    }
}
