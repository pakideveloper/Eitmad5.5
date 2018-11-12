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
        $posts = Post::all();
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
        return view ('frontend/JobPortal/pages/paperjob/paperjob',compact('posts','pnewslogo','pnews'));

    }
    public function single_post($id)
    {
        $posts = Post::find($id);

         $pnews = newspaper::all();
         return view ('frontend/JobPortal/pages/paperjob/single-paperjob',compact('pnews','posts'));

    }

}
