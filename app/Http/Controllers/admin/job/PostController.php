<?php

namespace App\Http\Controllers\admin\job;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\newspaper;
use DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        
        return view ('admin/job/modules/newspaper_Post/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
$news = newspaper::all();
        return view ('admin/job/modules/newspaper_Post/create',compact('news'));
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
        $posts = new Post();
        $posts->paper_id = $request->paper_id;
        $posts->paper_post_title = $request->post_title;
        $posts->post_description = $request->paper_descrip;
        $posts->paper_ad_type = $request->post_type;
        $posts->number_of_jobs = $request->no_of_jobs;
        $posts->expired = $request->expires_after;
        // $logo = $request->newspaper_logo[0];
        // $file_name = $logo -> getClientOriginalName();
        // $file_name = uniqid().$file_name;
        //  $file_name = preg_replace('/\s+/', '', $file_name);
        //  $file_type = $logo->getClientOriginalExtension();
        //     $logo -> move(public_path().'/admin/job/upload/Logo',$file_name);
        //     $posts->paper_logo = $file_name;
            // $file_size = $logo->getClientSize();
            // $file_size = $file_size/1000;
            // $file_size = $file_size.' '.'kb';

        $ad = $request->post_ad_images[0];
        $file_name = $ad -> getClientOriginalName();
        $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            $file_type = $ad->getClientOriginalExtension();
            $ad -> move(public_path().'/admin/job/upload/Ad',$file_name);
            $file_size = $ad->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $posts->paper_ad = $file_name;
         $posts->paper_ad_size = $file_size;
         $posts->paper_ad_extension = $file_type;
         $posts->posted_by = 'Admin';

         $posts->save();      
         return Redirect()->back()->with('status', 'Post added successfully!');



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
        $posts = Post::find($id);
       $selectnews = $posts->paper_id;

       $finalnews = DB::table('newspaper')
       //      ->join('newspaper', 'paper_posts.paper_id', '=', 'newspaper.id')
             ->select( 'newspaper.paper_name','newspaper.id')
             ->where('newspaper.id','=',$selectnews)
            ->get();

            // echo $finalnews;
            // die();
            
            
        $news = newspaper::all();
        return view ('admin/job/modules/newspaper_Post/edit',compact('posts','news','finalnews'));
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
        
        $posts = Post::find($id);
        $posts->paper_id = $request->paper_id;
        $posts->paper_post_title = $request->post_title;
        $posts->post_description = $request->paper_descrip;
        $posts->paper_ad_type = $request->post_type;
         $posts->number_of_jobs = $request->no_of_jobs;
        $posts->expired = $request->expires_after;
        // $logo = $request->newspaper_logo[0];
        // $file_name = $logo -> getClientOriginalName();
        // $file_name = uniqid().$file_name;
        //  $file_name = preg_replace('/\s+/', '', $file_name);
        //  $file_type = $logo->getClientOriginalExtension();
        //     $logo -> move(public_path().'/admin/job/upload/Logo',$file_name);
        //     $posts->paper_logo = $file_name;
            // $file_size = $logo->getClientSize();
            // $file_size = $file_size/1000;
            // $file_size = $file_size.' '.'kb';

        $ad = $request->post_ad_images[0];
        $file_name = $ad -> getClientOriginalName();
        $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            $file_type = $ad->getClientOriginalExtension();
            $ad -> move(public_path().'/admin/job/upload/Ad',$file_name);
            $file_size = $ad->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $posts->paper_ad = $file_name;
         $posts->paper_ad_size = $file_size;
         $posts->paper_ad_extension = $file_type;
         $posts->posted_by = 'Admin';

         $posts->update();      
         return Redirect()->back()->with('status', 'Post Updated successfully!');


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
        $posts = Post::find($id);
        $posts->delete();
        return Redirect()->back()->with('status', 'Post deleted successfully!');

    }
    public function logodeleteFile(Request $request)
    {
        // echo "string";
        // die();
        $posts = Post::find($request->file_id);
        $file_name=$posts->paper_ad;

         $dir = public_path()."/admin/job/upload/Ad/";        
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
            'paper_id.required' => 'please select paper name',
            'post_title.required' => 'please enter post title',
            'paper_descrip.required' => 'please enter post Description',
            'post_type.required' => 'please select post type',
            'no_of_jobs.required' => 'please select Number of Jobs',
            'expires_after.required' => 'please select expiry date',
            // 'newspaper_logo.required' => 'please select newspaper logo',
            'post_ad_images.required' => 'please select post ad image',
            
        ];
        $this->validate($request, [
             'paper_id' => 'required',
            'post_title' => 'required',
            'paper_descrip' => 'required',
            'post_type' => 'required',
            'expires_after' => 'required',          
             'no_of_jobs' => 'required',            
            'post_ad_images' => 'required',            
        ],$messages);
    }




}
