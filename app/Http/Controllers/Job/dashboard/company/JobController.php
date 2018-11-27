<?php

namespace App\Http\Controllers\Job\dashboard\company;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Html\HtmlBuilder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return request()->json(200, $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "string";
        // die();
       return view('frontend.JobPortal.dashboards.company.modules.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $job = new Job();
        $job->job_title = $request->job_title ;
        $job->job_description = $request->job_description ;
        if ($request->job_skills) {
           $skills = $request->job_skills;
        $Arrayskills = explode(',', $skills);
        $job->job_skills =  json_encode($Arrayskills); 
        }
        // $job->job_skills =  ;
        $job->job_career_level = $request->job_career_level ;
        $job->job_no_of_position = $request->job_no_of_position ;
        $job->job_year_of_experience_min = $request->job_year_of_experience_min ;
        $job->job_year_of_experience_max = $request->job_year_of_experience_max ;
        // $job->job_degree_level_type = $request->job_degree_level_type ;
        $job->job_salary_min_range = $request->job_salary_min_range ;
        $job->job_salary_max_range = $request->job_salary_max_range ;
        $job->job_gender_preference = $request->job_gender_preference ;
        // $job->company_id = $request->company_id ;
        // $job->job_type_id = $request->job_type_id ;
        $job->job_shift = $request->job_shift ;
        // $job->job_sub_category_id = $request->job_sub_category_id ;
        // $job->city_id = $request->city_id ;
        // $job->degree_level_id = $request->degree_level_id ;
        // $job->degree_type_id = $request->degree_type_id ;
        $job->specific_degree = $request->specific_degree ;
        $job->age_requirement_min = $request->age_requirement_min ;
        $job->age_requirement_max = $request->age_requirement_max ;
        $job->apply_by = $request->apply_by ;
        // $job->approval_status = $request->approval_status ;
        // $job->active_status = $request->active_status ;
       
       
        // $sub_category = Product_Sub_Category::find($product->sub_category_id);
        // $features = json_decode($sub_category->feature_names);
        // $features_array = array();
        // foreach ($features as $key => $value) {
        //     $value = preg_replace('/\s+/', '', $value);
        //     // $input = 'product_'.$value;
        //     $features_array[$value] = $request->$value;
        // }
        // $product->other_features = json_encode($features_array);
        
        // $slug = $this->makeSlug($product->product_name); 
        // $product->slug = $slug;

        $job->save();
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        if($job->delete()){
            return $this->_getRecord();
        }
        else{
            return response()->json(425, ['delete'=> "error deleting record"]);
        }
        
    }

    private function _getRecord(){
        $jobs = Job::orderBy('created_at', 'desc')->get();
        return request()->json(200, $jobs);
    }
}
