<?php

namespace App\Http\Controllers\admin\job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DegreeType;
use App\DegreeLevel;
use App\vdegreelevel;
class DegreeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $degreetype = DegreeType::latest()->get();
    return view('admin/job/modules/DegreesType/index',compact('degreetype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $degrees = DegreeLevel::all();
        return view('admin/job/modules/DegreesType/create',compact('degrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->storeValidate($request);
        $degreetype = new DegreeType(); 
        $degreetype->degree_type_name = $request->degree_type_name;
        $degreetype->degree_level_id = $request->level;
        $degreetype->save();
         return Redirect()->back()->with('status', 'Degree Type created successfully!');

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
         $degreetype = DegreeType::find($id);
         $degrees = DegreeLevel::all();
         return view('admin/job/modules/DegreesType/edit', compact('degreetype','degrees'));
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
        $this->storeValidate($request);
        $degreetype = DegreeType::find($id);
        $degreetype->degree_type_name = $request->degree_type_name;
        $degreetype->degree_level_id = $request->level;
        $degreetype->update();
         return Redirect()->back()->with('status', 'Degree Type Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $degreetype = DegreeType::find($id);
      $degreetype->delete();
      return redirect('/jobs/admin/degree_types');
    }
     public function storeValidate(Request $request){
       
        $messages = [
            'degree_type_name.required' => 'please insert Degree type name',
        ];
        $this->validate($request, [
            'degree_type_name' => 'required',      
        ],$messages);
    }
}
