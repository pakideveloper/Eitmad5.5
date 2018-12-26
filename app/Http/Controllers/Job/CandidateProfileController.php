<?php

namespace App\Http\Controllers\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\City;
use App\Candidate_Profile;
use App\Candidate_Educational_Profile;
use App\ DegreeLevel;
use App\ DegreeType;
use App\Candidate_Certificate; 
use App\Candidate_Project;
use App\Candidate_Experience;
use App\ Company;
use App\ Industry;
use Auth;     
use File;    
use Illuminate\Html\HtmlBuilder;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Redirect;
use DB; 

class CandidateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        $degreeType = DegreeType::all();
        $companies  = Company::all();
        $industries = Industry::all();
        $education  = Candidate_Educational_Profile::all();
        $users = User::find(Auth::user()->id);

      
       $candidate_profile = Candidate_Profile::where('id','=', $users->id )->first() ; 
       if(isset($candidate_profile->candidate_skills)){
       $skills = json_decode($candidate_profile->candidate_skills);
       $languages = json_decode($candidate_profile->candidate_languages);
        }
        return view('frontend/JobPortal/dashboards/candidate/modules/manage-cv/create',compact('users','cities','candidate_profile','skills','languages','degreeType','companies','industries')) ;
    }
  public function indexToView()
    {

    if(User::find(Auth::user()->id)!=null){
    $users = User::find(Auth::user()->id);
        
    $edu_profile = Candidate_Educational_Profile::where('candidate_profile_id','=', $users->id )->get();
    $candi_certificates = Candidate_Certificate::where('candidate_profile_id','=', $users->id )->get() ; 
    $candi_projects = Candidate_Project::where('candidate_profile_id','=', $users->id )->get() ;
    $candi_exp = Candidate_Experience::where('candidate_profile_id','=', $users->id )->get() ;
    $candidate_profile = Candidate_Profile::where('id','=', $users->id )->first() ;
    if(isset($candidate_profile->candidate_skills)){ 
    $skills = json_decode($candidate_profile->candidate_skills);
    $languages = json_decode($candidate_profile->candidate_languages);
    }
    return view('frontend/JobPortal/dashboards/candidate/modules/manage-cv/view-profile',compact('users','candidate_profile','skills','languages','edu_profile','candi_certificates','candi_projects','candi_exp')) ;
    
  }else{
    return ("not login");
  }}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "stringCreate";
        die();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->requiredValidation($request);

     $users = User::find(Auth::user()->id);
                $users->date_of_birth =$request-> Input('data_of_b');
                $users->cnic =$request-> Input('cnic');
                $users->gender =$request-> Input('gender');
                $users->contact_number =$request-> Input('contact_num');
                $users->nationality =$request-> Input('nationality');
                $users->city_id =$request-> Input('city_id');
                $users->date_of_birth =$request-> Input('data_of_b');

    $users->save();
    
     
                $candidate_profile = new Candidate_profile(); 
                // $candidate_profile = Candidate_profile::where('candidate_id','=',$users->id )->first();
                // $candidate_profile = Candidate_Profile::where('candidate_id','=', $userssss->id)->first();
          // echo  $users->id; die();

                $candidate_profile->id = $users->id;  

                $candidate_profile->caption = $request-> Input('profession_caption');
                $candidate_profile->blog_link = $request-> Input('blog_link');
                $candidate_profile->professional_experience = $request-> Input('pro_exp');
                $candidate_profile->candidate_career_level  =    $request-> Input('career_level');
                $candidate_profile->candidate_marital_status =  $request->Input('marital_status');
                $candidate_profile->candidate_functional_area = $request->Input('func_area');
                $candidate_profile->candidate_current_salary =  $request->Input('current_salary');
                $candidate_profile->candidate_expected_salary = $request-> Input('expected_salary');
                $candidate_profile->candidate_postal_address =  $request-> Input('postal_address');
                $candidate_profile->candidate_profile_summary = $request-> Input('prof_summary');
                // $candidate_profile->candidate_skills =$request-> Input('skills');
                $c_skills = $request->  Input('skills');
                $c_skills_array =   explode(',', $c_skills);
                $candidate_profile->candidate_skills = json_encode($c_skills_array);
                
                $candidate_languages = $request-> Input('languages');
                $c_lang_array = explode(',', $candidate_languages);
                $candidate_profile->candidate_languages = json_encode($c_lang_array);



           $image = $request->profile_img;
          // die();

    $uniqid = uniqid();
            $file_name = $image -> getClientOriginalName(); 
            $file_name = $uniqid.$file_name; 
            $file_type = $image->getClientOriginalExtension();
            $file_size = file::size($image);
            // $file_extension = file::extension($image);
            $new_path = url('/').'/public/JobPortal_Frontend/assets/images/candidate/'.$file_name;
            $image -> move(public_path().'/JobPortal_Frontend/assets/images/candidate/', $file_name);
            
            $candidate_profile->candidate_dp = $file_name;
            $candidate_profile->candidate_dp_size = $file_size;
            $candidate_profile->candidate_dp_extension = $file_type;

    $candidate_profile->save();        
    return Redirect()->back()->with('status','Profile Updated Successfully');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show";
        die();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $cities = City::all();
        $degreeType = DegreeType::all();
        $companies = Company::all();
        $industries = Industry::all();
        $users = User::find($id);
        $candidate_profile = Candidate_Profile::where('id','=', $users->id )->first() ; 
        return view('frontend/JobPortal/dashboards/candidate/modules/manage-cv/edit',compact('users','cities','candidate_profile','degreeType','companies','industries')) ;   
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
        $users = User::find($id);
   if(isset($_POST['update-profile'])){
     
                $users->date_of_birth =$request-> Input('data_of_b');
                $users->cnic =$request-> Input('cnic');
                $users->gender =$request-> Input('gender');
                $users->contact_number =$request-> Input('contact_num');
                $users->nationality =$request-> Input('nationality');
                $users->city_id =$request-> Input('city_id');
                $users->date_of_birth =$request-> Input('data_of_b');
   

    $users->update();
                
    $users = User::find($id);
    $candidate_profile_id = $users->id ;
    $candidate_profile = Candidate_profile::where('id','=', $candidate_profile_id)->first();
                // $candidate_profile = Candidate_profile::where('candidate_expected_salary','=', '20000' )->first();
                // echo $candidate_profile; die();
                // $candidate_profile = Candidate_profile::find($candidate_profile_id);
                // $candidate_profile->candidate_id = $users->id;  
                $candidate_profile->caption = $request-> Input('profession_caption');
                $candidate_profile->blog_link = $request-> Input('blog_link');
                $candidate_profile->professional_experience = $request-> Input('pro_exp');
                $candidate_profile->candidate_career_level  =   $request-> Input('career_level');
                $candidate_profile->candidate_marital_status =  $request->Input('marital_status');
                $candidate_profile->candidate_functional_area = $request->Input('func_area');
                $candidate_profile->candidate_current_salary =  $request->Input('current_salary');
                $candidate_profile->candidate_expected_salary = $request-> Input('expected_salary');
                $candidate_profile->candidate_postal_address =  $request-> Input('postal_address');
                $candidate_profile->candidate_profile_summary = $request-> Input('prof_summary');
                // $candidate_profile->candidate_skills =$request-> Input('skills');
                $c_skills = $request->  Input('skills');
                $c_skills_array =   explode(',', $c_skills);
                $candidate_profile->candidate_skills = json_encode($c_skills_array);
                
                $candidate_languages = $request-> Input('languages');
                $c_lang_array = explode(',', $candidate_languages);
                $candidate_profile->candidate_languages = json_encode($c_lang_array);

           $image = $request->profile_img;
          // die();
    $uniqid = uniqid();
            $file_name = $image -> getClientOriginalName(); 
            $file_name = $uniqid.$file_name; 
            $file_type = $image->getClientOriginalExtension();
            $file_size = file::size($image);
            // $file_extension = file::extension($image);
            $new_path = url('/').'/public/JobPortal_Frontend/assets/images/candidate/'.$file_name;
            $image -> move(public_path().'/JobPortal_Frontend/assets/images/candidate/', $file_name);
            
            $candidate_profile->candidate_dp = $file_name;
            $candidate_profile->candidate_dp_size = $file_size;
            $candidate_profile->candidate_dp_extension = $file_type;

    $candidate_profile->update(); 
    return Redirect()->back()->with('status','Profile Updated Successfully');
    }
    elseif (isset($_POST['update-edu'])) {
        # code...
    
    $edu_record = Candidate_Educational_Profile::find($id);
    // $candidate_profile = Candidate_Educational_Profile::where('id','=', $candidate_profile_id)->first();
                $edu_record->candidate_education_profile_title = $request-> Input('edu_title');
                $edu_record->candidate_education_major_subjects = $request-> Input('edu_subjects');
                $edu_record->candidate_education_institute_name = $request-> Input('institute_name');
                $edu_record->candidate_education_completion_year  =   $request-> Input('completion_year');
                $edu_record->candidate_education_result_type =  $request->Input('result_type');
                $edu_record->candidate_education_result = $request->Input('result');
    $edu_record->update(); 
    return Redirect()->back()->with('status','Education Updated Successfully');


        
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "del";
        die();
    }
    public function deleteFunction($id)
    {
       $del_record = Candidate_Educational_Profile::find($id);
       $del_record->delete();
    return Redirect()->back()->with('status','Education Record Deleted Successfully.');
      
    }
       
   public function storeEducation(Request $request)
    {
        echo "string";
      
    $candi_edu = new Candidate_Educational_Profile();
    // $candi_edu = Candidate_Educational_Profile::all();


    $users = User::find(Auth::user()->id);
                  $candi_edu->candidate_education_profile_title =$request-> Input('edu_title');
                  $candi_edu->degree_type_id =$request-> Input('degreeType_id'); 
                  $candi_edu->candidate_education_major_subjects =$request-> Input('maj_subjects');
                  $candi_edu->city_id=$request->Input('city_id');
             
                $candi_edu->candidate_education_institute_name=$request-> Input('insti_name');
                $candi_edu->candidate_education_completion_year=$request-> Input('completion_year');
                $candi_edu->candidate_education_result_type=$request-> Input('result_type');
                $candi_edu->candidate_education_result=$request-> Input('result');
                $candi_edu->candidate_profile_id =$users->id;

    $candi_edu->save();
        return Redirect()->back()->with('status','Education Added Successfully');

     }

        public function storeCertificate(Request $request)
    {

      
    $candi_certif = new Candidate_Certificate();
    // $candi_edu = Candidate_Educational_Profile::all();


    $users = User::find(Auth::user()->id);
                $candi_certif->candidate_certificate_name =$request-> Input('certif_name');
                $candi_certif->candidate_certificate_institute_name = $request-> Input('insti_name');  
                $candi_certif->candidate_certificate_completion_date = $request-> Input('completion_year');
                $candi_certif->candidate_profile_id =$users->id;

    $candi_certif->save();
        return Redirect()->back()->with('status','Certificate Added Successfully');

     }
      public function storeExperience(Request $request)
    {

      
    $candi_exp = new Candidate_Experience();
    // $candi_edu = Candidate_Educational_Profile::all();


    $users = User::find(Auth::user()->id);
                $candi_exp->candidate_experience_job_title =$request-> Input('job_title');
                $candi_exp->company_id =$request-> Input('company_id');
                $candi_exp->city_id =$request-> Input('city_id');
                $candi_exp->candidate_experience_starting_time = $request-> Input('start_time');  
                $candi_exp->candidate_experience_ending_time = $request-> Input('ending_time');
                $candi_exp->industry_id = $request-> Input('industry_id');
                $candi_exp->candidate_experience_years = $request-> Input('exp_years');              
                $candi_exp->candidate_experience_description = $request-> Input('exp_desc');
                $candi_exp->candidate_profile_id =$users->id;

    $candi_exp->save();
        return Redirect()->back()->with('status','Experience Added Successfully');

     }

       public function storeProjects(Request $request)
    {     
    $candi_projects = new Candidate_Project();
    // $candi_edu = Candidate_Educational_Profile::all();
    $users = User::find(Auth::user()->id);
                $candi_projects->candidate_project_name =$request-> Input('proj_name');
                $candi_projects->candidate_project_description =$request-> Input('proj_description');
                $candi_projects->candidate_project_starting_time = $request-> Input('start_time');  
                $candi_projects->candidate_project_ending_time = $request-> Input('ending_time');
                // $candi_projects->candi_projects_file = $request-> Input('completion_year');
                $candi_projects->candidate_profile_id =$users->id;
           $image = $request->proj_file;
          // die();

    $uniqid = uniqid();
            $file_name = $image -> getClientOriginalName(); 
            $file_name = $uniqid.$file_name; 
            $file_type = $image->getClientOriginalExtension();
            $file_size = file::size($image);
            // $file_extension = file::extension($image);
            $new_path = url('/').'/public/JobPortal_Frontend/assets/images/candidate/projects'.$file_name;
            $image -> move(public_path().'/JobPortal_Frontend/assets/images/candidate/projects', $file_name);
            
            $candi_projects->candidate_project_file = $file_name;
            $candi_projects->candidate_project_file_size = $file_size;
            $candi_projects->candidate_project_file_extension = $file_type;

    $candi_projects->save();
        return Redirect()->back()->with('status','Project Added Successfully');
     }
     
    public function requiredValidation(Request $request){

      $messages = [
            'company_name.required' => 'please insert company name.',
            'company_description.required' => 'please enter company description.',
            'company_address.required' => 'please insert company address.',
            'city_id.required' => 'please select city.',
            'country.required' => 'please select country.',
            'contact_email.required' => 'please insert company contact email.',
            'company_phone.required' => 'please enter company contatct number.',
            'industry_id.required' => 'please select industry.',
            'ownership_type.required' => 'please select ownership type.',
            'ceo_name.required' => 'please insert company CEO name.',
            'data_of_b.required' => 'please enter your DOB.'        
        ];
        $this->validate($request, [

            'data_of_b' => 'required'           
        ],$messages);


    }
}
