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
         $slider = Slider::latest()->get();
         return view('/admin/ecommerce/modules/slider/index',compact('slider')); 

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
       return view('/admin/ecommerce/modules/slider/create');   
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
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->slider_type = $request->slider_type;
        if ($request->file)
        {
        $file_name = $request->file-> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_name = preg_replace('/\s+/', '', $file_name);
        $file_type = $request->file->getClientOriginalExtension();
        $request->file-> move(public_path().'/admin/upload/sliders',$file_name);
        $file_size = $request->file->getClientSize();
        $file_size = $file_size/1000;
        $file_size = $file_size.' '.'kb';
        $new_path = url('/').'/public/admin/upload/sliders'.$file_name;
        $slider->image_name = $file_name;
        $slider->image_size = $file_size;
        $slider->image_extension = $file_type;
        $slider->image_url = $new_path;
    }
        $slider->save();
        return Redirect()->back()->with('status', 'Slider added successfully!');
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
        $slider = Slider::find($id);
        return view('admin/ecommerce/modules/slider/edit', compact('slider'));

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
      
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->slider_type = $request->slider_type;
        if ($request->file)
        {
        $file_name = $request->file -> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_name = preg_replace('/\s+/', '', $file_name);
        $file_type = $request->file->getClientOriginalExtension();
        $request->file-> move(public_path().'/admin/upload/sliders',$file_name);
        $file_size = $request->file->getClientSize();
        $file_size = $file_size/1000;
        $file_size = $file_size.' '.'kb';
        $new_path = url('/').'/public/admin/ecommerce/upload/sliders'.$file_name;
        $slider->image_name = $file_name;
        $slider->image_size = $file_size;
        $slider->image_extension = $file_type;
        $slider->image_url = $new_path; 
        }
        $slider->update();
        return Redirect()->back()->with('status', 'Slider updated successfully!');
       }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
    $slider = Slider::find($id);
    $data=$slider->image_name;
    $dir = public_path().'/admin/ecommerce/upload/sliders/';
    $dirHandle = opendir($dir);
    while ($file = readdir($dirHandle)) {
                                         if($file==$data) {
                                                    unlink($dir.'/'.$file);
                                         }
    }
        $slider->delete();
        return Redirect('/ecommerce/admin/sliders');
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
