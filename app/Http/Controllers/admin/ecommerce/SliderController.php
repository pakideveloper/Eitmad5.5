<?php

namespace App\Http\Controllers\admin\ecommerce;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Slider;
use File;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $mainslider = Slider::latest()->get();
       return view('/admin/ecommerce/modules/mainslider/index',compact('mainslider'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/admin/ecommerce/modules/mainslider/create');   
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
        $mainslider = new Slider();
        $mainslider->title = $request->title;
        $mainslider->description = $request->description;
        if ($request->file)
        {
        $file_name = $request->file-> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_name = preg_replace('/\s+/', '', $file_name);
        $file_type = $request->file->getClientOriginalExtension();
        $request->file-> move(public_path().'/admin/upload/mainsliders',$file_name);
        $file_size = $request->file->getClientSize();
        $file_size = $file_size/1000;
        $file_size = $file_size.' '.'kb';
        $new_path = url('/').'/public/admin/upload/mainsliders'.$file_name;
        $mainslider->image_name = $file_name;
        $mainslider->image_size = $file_size;
        $mainslider->image_extension = $file_type;
        $mainslider->image_url = $new_path;
    }
        $mainslider->save();
        return Redirect()->back()->with('status', 'Main Slider added successfully!');
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
        $mainslider = Slider::find($id);
        return view('admin/ecommerce/modules/mainslider/edit', compact('mainslider'));

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
      
        $mainslider = Slider::find($id);
        $mainslider->title = $request->title;
        $mainslider->description = $request->description;

        if ($request->file)
        {
        $file_name = $request->file -> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_name = preg_replace('/\s+/', '', $file_name);
        $file_type = $request->file->getClientOriginalExtension();
        $request->file-> move(public_path().'/admin/upload/mainsliders',$file_name);
        $file_size = $request->file->getClientSize();
        $file_size = $file_size/1000;
        $file_size = $file_size.' '.'kb';
        $new_path = url('/').'/public/admin/upload/mainsliders'.$file_name;
        $mainslider->image_name = $file_name;
        $mainslider->image_size = $file_size;
        $mainslider->image_extension = $file_type;
        $mainslider->image_url = $new_path; 
        }
        $mainslider->update();
        return Redirect()->back()->with('status', 'Main Slider updated successfully!');
       }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $mainslider = Slider::find($id);
      $mainslider->delete();
      return redirect()->back()->with('status', 'successfully deleted!');
    }
    public function storeValidate(Request $request){
       
        $messages = [
            'title.required' => 'please insert brand name',
            'description.required' => 'please insert description',
            'file.required' => 'please upload image',
            
        ];
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
             'file' => 'required',       
        ],$messages);
    }
}
