<?php

namespace App\Http\Controllers\admin\job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DegreeLevel;

class DegreeLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $degreelevel = DegreeLevel::latest()->get();
            return view('admin/job/modules/DegreesLevel/index',compact('degreelevel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/job/modules/DegreesLevel/create');
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
        $degreelevel = new DegreeLevel(); 
        $degreelevel->degree_level_name = $request->degree_level_name;
        $degreelevel->save();
         return Redirect()->back()->with('status', 'Degree Level created successfully!');

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
        $degreelevel = DegreeLevel::find($id);
        return view('admin/job/modules/DegreesLevel/edit', compact('degreelevel'));
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
        $degreelevel = DegreeLevel::find($id);
        $degreelevel->degree_level_name = $request->degree_level_name;
        $degreelevel->update();
        return Redirect()->back()->with('status', 'Degree Level Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $degreelevel = DegreeLevel::find($id);
      $degreelevel->delete();
      return redirect('/jobs/admin/degree_levels');
    }
    public function storeValidate(Request $request){
       
        $messages = [
            'degree_level_name.required' => 'please insert Degree level name',
        ];
        $this->validate($request, [
            'degree_level_name' => 'required',      
        ],$messages);
    }
}
