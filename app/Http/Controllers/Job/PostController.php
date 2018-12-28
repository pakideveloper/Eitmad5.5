<?php

namespace App\Http\Controllers\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use DB;
use App\newspaper;
class PostController extends Controller
{
    //
    public function post()
    {
        //
        $posts = Post::where('paper_posts.paper_ad_type','=','job_post')->get();
        // print_r($posts);
        // die();
        // echo $posts->logo;
        // die();
         $pnews = newspaper::all();
        //  $pnewslogo = DB::table('newspaper')
        //  ->join('paper_posts','paper_posts.paper_id','=','newspaper.id')
        //   ->select('newspaper.paper_logo')
        //   ->distinct()
        //   ->where('paper_posts.paper_id','=',3)
        //  ->get();
         // echo $pnewslogo;
         // die();
        // $totaljobs = DB::table('paper_posts')->count()->where('');
        return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('posts','pnewslogo','pnews'));

    }
    public function Tenderpost()
    {
        //
        $posts = Post::where('paper_posts.paper_ad_type','=','tender_post')->get();
        // print_r($posts);
        // die();
        // echo $posts->logo;
        // die();
         $pnews = newspaper::all();
        //  $pnewslogo = DB::table('newspaper')
        //  ->join('paper_posts','paper_posts.paper_id','=','newspaper.id')
        //   ->select('newspaper.paper_logo')
        //   ->distinct()
        //   ->where('paper_posts.paper_id','=',3)
        //  ->get();
         // echo $pnewslogo;
         // die();
        // $totaljobs = DB::table('paper_posts')->count()->where('');
        return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('posts','pnews'));

    }
     public function Admissionpost()
    {
        //
        $posts = Post::where('paper_posts.paper_ad_type','=','admission_post')->get();
        // print_r($posts);
        // die();
        // echo $posts->logo;
        // die();
         $pnews = newspaper::all();
        //  $pnewslogo = DB::table('newspaper')
        //  ->join('paper_posts','paper_posts.paper_id','=','newspaper.id')
        //   ->select('newspaper.paper_logo')
        //   ->distinct()
        //   ->where('paper_posts.paper_id','=',3)
        //  ->get();
         // echo $pnewslogo;
         // die();
        // $totaljobs = DB::table('paper_posts')->count()->where('');
        return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('posts','pnews'));

    }



    public function single_post($id)
    {
        $posts = Post::find($id);

         $pnews = newspaper::all();
         return view ('frontend/JobPortal/modules/paperjob/single-paperjob',compact('pnews','posts'));

    }

    public function singlepaper_post($id)
    {
         // $posts = Post::all();
        // $posts = DB::table('paper_posts')
        // ->where('paper_posts.paper_id', '=', $id)
        // ->get();
        $posts = post::where('paper_posts.paper_id', '=', $id)->get();
        
        // echo $posts;
        // die();
         $pnews = newspaper::all();
         return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('pnews','posts'));

    }

}
