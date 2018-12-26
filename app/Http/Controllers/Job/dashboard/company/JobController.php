<?php

namespace App\Http\Controllers\Job\dashboard\company;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Html\HtmlBuilder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Illuminate\Http\Request;
use App\country;
use App\Job_Category;
use App\Job_Type;
use App\DegreeLevel;
use App\City;
use App\Job_SubCategory;
use App\DegreeType;
use Carbon;
use DateTime;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if($term != null)
        // {
        //     $jobs['data'] = Job::where('job_title', 'like', '%'.$term.'%')->get();
        // return request()->json(200, $jobs); 
        // }
        // return $this->_getRecord();
        //$jobs = Job::paginate(3);
        return view('frontend.JobPortal.dashboards.company.modules.jobs.index');
       
    }

     public function AllJobs($term = null)
    {
        if($term != null)
        {
            $jobs = Job::where('job_title', 'like', '%'.$term.'%')->get();
            foreach ($jobs as $job) {
                $job->city_name = $job->city->city_name;
                $job->country_name = $job->city->country->country_name;
                $job->DegreeLevel = $job->degreelevel->degree_level_name;
                if ($job->jobtype!= null) {
                   $job->job_type_name = $job->jobtype->job_type_name;
                }
                if ($job->subcategory!=null) {
                   $job->job_category = $job->subcategory->category->job_category_name;
                   $job->job_subcategory = $job->subcategory->job_sub_category_name;
                }
                if ($job->degreetype!= null) {
                   $job->DegreeType = $job->degreetype->degree_type_name;
                }
                
                if ($job->job_skills != null) {
                $skills = json_decode($job->job_skills);
                $job->job_skills = implode(",",$skills);
                }
                 $job->creation_date = Carbon\Carbon::parse($job->created_at)->format('d M,Y');
                 $job->applyby_date = Carbon\Carbon::parse($job->apply_by)->format('d M,Y');
            }
        return request()->json(200, $jobs); 
        }
        return $this->_getRecord();
       
       
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
        $countries = country::all();
        $job_categories = Job_Category::all();
        $job_types = Job_Type::all(); 
        $degree_levels = DegreeLevel::all();
       return view('frontend.JobPortal.dashboards.company.modules.jobs.create', compact('countries','job_categories','job_types','degree_levels'));
    }

    public function citiesforjob($id)
    {
        // echo "string";
        // die();
        $cities = City::where('country_id','=',$id)->distinct('city_name')->get();
        
       return $cities;
    }

     public function job_sub_categories($id)
    {
        // echo "string";
        // die();
        $sub_cateories = Job_SubCategory::where('job_category_id','=',$id)->distinct('job_sub_category_name')->get();
        
       return $sub_cateories;
    }

     public function degree_types($id)
    {
        // echo "string";
        // die();
        $degree_types = DegreeType::where('degree_level_id','=',$id)->distinct('degree_type_name')->get();
        
       return $degree_types;
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
        // print_r($request->job_skills);
        // die();
        if ($request->job_skills) {
           $skills = $request->job_skills;
        $Arrayskills = explode(',', $skills);
        $job->job_skills =  json_encode($Arrayskills); 
        }
        
        $job->job_career_level = $request->job_career_level ;
        $job->job_no_of_position = $request->job_no_of_position ;
        $job->job_year_of_experience_min = $request->job_year_of_experience_min ;
        $job->job_year_of_experience_max = $request->job_year_of_experience_max ;
        $job->job_salary_min_range = $request->job_salary_min_range ;
        $job->job_salary_max_range = $request->job_salary_max_range ;
        $job->job_gender_preference = $request->job_gender_preference ;
        // $job->company_id = $request->company_id ;
         $job->job_type_id = $request->job_type_id ;
        $job->job_shift = $request->job_shift ;
         $job->job_sub_category_id = $request->job_sub_category_id ;
         $job->city_id = $request->city_id ;
         $job->degree_level_id = $request->degree_level_id ;
         $job->degree_type_id = $request->degree_type_id ;
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

        return Redirect()->back()->with('status', 'Job added successfully!');
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
       $job= Job::find($id);
       if ($job->job_skills != null) {
            $skills = json_decode($job->job_skills);
         $job->job_skills = implode(",",$skills);
       }
        
         // print_r($job->job_skills);
         // die();
          $countries = country::all();
        $job_categories = Job_Category::all();
        $job_types = Job_Type::all(); 
        $degree_levels = DegreeLevel::all();
        return view('frontend.JobPortal.dashboards.company.modules.jobs.edit', compact('job','countries','job_categories','job_types','degree_levels'));
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
        $job = Job::find($id);
        $job->job_title = $request->job_title ;
        $job->job_description = $request->job_description ;
        // print_r($request->job_skills);
        // die();
        if ($request->job_skills) {
           $skills = $request->job_skills;
        $Arrayskills = explode(',', $skills);
        $job->job_skills =  json_encode($Arrayskills); 
        }
        
        $job->job_career_level = $request->job_career_level ;
        $job->job_no_of_position = $request->job_no_of_position ;
        $job->job_year_of_experience_min = $request->job_year_of_experience_min ;
        $job->job_year_of_experience_max = $request->job_year_of_experience_max ;
        
        $job->job_salary_min_range = $request->job_salary_min_range ;
        $job->job_salary_max_range = $request->job_salary_max_range ;
        $job->job_gender_preference = $request->job_gender_preference ;
        // $job->company_id = $request->company_id ;
         $job->job_type_id = $request->job_type_id ;
        $job->job_shift = $request->job_shift ;
         $job->job_sub_category_id = $request->job_sub_category_id ;
         $job->city_id = $request->city_id ;
         $job->degree_level_id = $request->degree_level_id ;
         $job->degree_type_id = $request->degree_type_id ;
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

        $job->update();

        return Redirect()->back()->with('status', 'Job updated successfully!');
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

        $jobs = Job::orderBy('created_at', 'desc')->paginate(5);
        foreach ($jobs as $job) {
            $job->city_name = $job->city->city_name;
            $job->country_name = $job->city->country->country_name;
            $job->DegreeLevel = $job->degreelevel->degree_level_name;
            if ($job->jobtype!= null) {
               $job->job_type_name = $job->jobtype->job_type_name;
            }
            if ($job->subcategory!=null) {
               $job->job_category = $job->subcategory->category->job_category_name;
               $job->job_subcategory = $job->subcategory->job_sub_category_name;
            }
            if ($job->degreetype!= null) {
               $job->DegreeType = $job->degreetype->degree_type_name;
            }
            
            if ($job->job_skills != null) {
            $skills = json_decode($job->job_skills);
         $job->job_skills = implode(",",$skills);
       }
        
                $job->creation_date = Carbon\Carbon::parse($job->created_at)->format('d M,Y');
                $job->applyby_date = Carbon\Carbon::parse($job->apply_by)->format('d M,Y');
                //  echo $job->applyby_date; 
                // die();// March
    }
        return request()->json(200, $jobs);
    }

      public function city_records(){
        foreach ($jobs as $value) {
    $value->city_name = $value->city->city_name;
        return request()->json(200, $jobs);
    }
        }
        
}
