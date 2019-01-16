<?php

namespace App\Http\Controllers\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use DB;
use App\newspaper;
use App\Job_Category;
class PostController extends Controller
{
    //
    public function post()
    {
        //
        $posts = Post::where('paper_posts.paper_ad_type','=','job_post')->latest()->paginate(20);
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
        $jobcategories = job_Category::all();
        return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('posts','pnewslogo','pnews','jobcategories'));

    }
    public function Tenderpost()
    {
        //
        $posts = Post::where('paper_posts.paper_ad_type','=','tender_post')->latest()->paginate(20);
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
        $posts = Post::where('paper_posts.paper_ad_type','=','admission_post')->latest()->paginate(20);
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
        $posts = post::where('paper_posts.paper_id', '=', $id)->latest()->paginate(20);
        $jobcategories = job_Category::all();
        // echo $posts;
        // die();
         $pnews = newspaper::all();
         return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('pnews','posts','jobcategories'));

    }


    public function search_job_post(Request $request)
    {
        // echo "string";
         $pnews = newspaper::all();
         $jobcategories = job_Category::all();
        $category = $request->cat;
        $date = $request->date;
           echo $jobcategories;
           die();
//          $posts = Post::where('paper_posts.paper_ad_category','=',$category)->where('paper_posts.created_at','=',$date)
//                 ->orWhere(function ($query,$date,$category) {                      
//     $query->where('paper_posts.created_at','=',$date)
//           ->orwhere('paper_posts.paper_ad_category','=',$category);
// })
// ->get();
        
                    // ->orwhere('paper_posts.paper_ad_category','=',$category)
        //              ->orwhere('paper_posts.created_at','=',$date)
        
        // ;
        if ($category == null) {
            # code...
            $posts = Post::where('paper_posts.created_at','like',$date.'%')->get();
        }elseif ($date == null) {
            # code...
            $posts = Post::where('paper_posts.paper_ad_category','=',$category)->get();
        }elseif ($date == null && $category == null) {
           return redirect()->back();
        }else{
            $posts = Post::where([['paper_posts.paper_ad_category','=',$category],[
        'paper_posts.created_at','like',$date.'%']])->get();
        }
        // echo $date;
        // echo "<br>";
        // print_r($posts) ;
        // die();
        // echo $posts;
        // die();
        
         return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('pnews','posts','jobcategories'));


    }

}
