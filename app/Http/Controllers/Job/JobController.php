<?php

namespace App\Http\Controllers\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;
use App\Candidate_Profile;
use Auth;
use DB;
use App\Candidate_Job_Association;
use App\newspaper;
use DateTime;
use Carbon;
class JobController extends Controller
{
    //
    public function apply_for_job($id)
    {
        // print_r(Auth::User()->id);
        // die();
        if(isset(Auth::User()->id))
        {
            $user_id = Auth::User()->id;
            
        $job = Job::find($id);
        $candidate = Candidate_Profile::where('id','=',$user_id)->first();

        $today = new DateTime();
            $birthdate = new DateTime($candidate->profileId->date_of_birth);
            $interval = $today->diff($birthdate);
            $age =  $interval->format('%y');

            $expire_dt = new DateTime(Carbon\Carbon::parse($job->apply_by));
            if ($expire_dt < $today) 
            { 
               return Redirect()->back()->with('error', 'Error! Job is expired.'); 
            }
            // print_r($age);
            // die();


        if ($candidate!=null) {
            if (($candidate->professional_experience>=$job->job_year_of_experience_min && $candidate->professional_experience<=$job->job_year_of_experience_max) && ($candidate->profileId->gender == $job->job_gender_preference) && ($candidate->educational_profiles !=null) && ($age>=$job->age_requirement_min && $age<=$job->age_requirement_max)) {

                foreach ($candidate->educational_profiles as $edu_profile) {
                    if ($edu_profile->degreetype->degreelevel->id == $job->degreelevel->id) {
                        $association = new Candidate_Job_Association();
                        $association->job_id = $job->id;
                        $association->candidate_profile_id = $candidate->id;

                        $association->save();
                        return Redirect()->back()->with('success', 'Job application submitted successfully!');
                    }
                }
                return Redirect()->back()->with('error', 'Error! Job requirement does not match your profile.');

            }
            return Redirect()->back()->with('error', 'Error! Job requirement does not match your profile.');
            
        }
        return Redirect()->back()->with('error', 'Please complete your profile!');
        }

        else
        {
           return Redirect()->back()->with('error', 'Please login first!'); 
        }
        
        // return view ('frontend/JobPortal/modules/paperjob/paperjob',compact('posts','pnewslogo','pnews'));

    }
    public function single_post($id)
    {
        $posts = Post::find($id);

         $pnews = newspaper::all();
         return view ('frontend/JobPortal/modules/paperjob/single-paperjob',compact('pnews','posts'));

    }

}
