<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\newspaper;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = newspaper::all();
        return view('admin.job.modules.Newspaper.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin/job/modules/Newspaper/create');

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
        $this->storeValidation($request);
        $news = new newspaper();
        $news->paper_name = $request->paper_name;
        $logo = $request->newspaper_logo[0];
        $file_name = $logo -> getClientOriginalName();
        $file_name = uniqid().$file_name;
         $file_name = preg_replace('/\s+/', '', $file_name);
         $file_type = $logo->getClientOriginalExtension();
            $logo -> move(public_path().'/admin/job/upload/Logo',$file_name);
            $news->paper_logo = $file_name;
            $file_size = $logo->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $news->paper_logo_size = $file_size;
         $news->paper_logo_extension = $file_type;
         $news->save();      
         return Redirect()->back()->with('status', 'Newspaper added successfully!');
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
        $news = newspaper::find($id);
        return view('admin/job/modules/Newspaper/edit' , compact('news'));
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
        //
       
        $news = newspaper::find($id);
        $news->paper_name = $request->paper_name;
        $logo = $request->newspaper_logo[0];
        $file_name = $logo -> getClientOriginalName();
        $file_name = uniqid().$file_name;
         $file_name = preg_replace('/\s+/', '', $file_name);
         $file_type = $logo->getClientOriginalExtension();
            $logo -> move(public_path().'/admin/job/upload/Logo',$file_name);
            $news->paper_logo = $file_name;
            $file_size = $logo->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $news->paper_logo_size = $file_size;
         $news->paper_logo_extension = $file_type;
         $news->update();      
         return Redirect()->back()->with('status', 'Newspaper Updated successfully!');
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
        $news = newspaper::find($id);
        $news->delete();
        return Redirect()->back()->with('status', 'Newspaper deleted successfully!');
    }

    public function logodeleteFile(Request $request)
    {
        // echo "string";
        // die();
        $news = newspaper::find($request->file_id);
        $file_name=$news->paper_logo;

         $dir = public_path()."/admin/job/upload/Logo/";        
         $dirHandle = opendir($dir);
         while ($fil = readdir($dirHandle)) {
           if($fil==$file_name) {
                  unlink($dir.'/'.$fil);
           }
         }
        
      
        return response()->json(['code'=>200,'success' => $request->file_id],200);
    }

     public function storeValidation(Request $request){
        $messages = [
            'paper_name.required' => 'please Enter paper name',
            
             'newspaper_logo.required' => 'please Select newspaper logo',
            
            
        ];
        $this->validate($request, [
             'paper_name' => 'required',
                     
            'newspaper_logo' => 'required',            
                        
        ],$messages);
    }
}
