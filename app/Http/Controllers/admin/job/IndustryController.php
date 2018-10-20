<?php

namespace App\Http\Controllers\admin\job;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Industry;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry = Industry::latest()->get();
        return view('admin/job/modules/Industries/index',compact('industry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/job/modules/Industries/create');
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
         $industry = new Industry(); 
         $industry->industry_name = $request->industry_name;
         $industry->save();
         return Redirect()->back()->with('status', 'Industry created successfully!');
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
       $industry = Industry::find($id);
       return view('admin/job/modules/industries/edit',compact('industry'));
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
         $industry = Industry::find($id);
         $industry->industry_name = $request->industry_name;
         $industry->update();
         return Redirect()->back()->with('status', 'Industry Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $industry = Industry::find($id);
      $industry->delete();

       return Redirect()->back()->with('status', 'Industry Deleted successfully!');
    }

    public function storeValidate(Request $request){
       
        $messages = [
            'industry_name.required' => 'please insert industry name',
            
        ];
        $this->validate($request, [
            'industry_name' => 'required',       
        ],$messages);
    }
}
