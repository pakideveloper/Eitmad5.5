     <!-- styling for form validation -->
   <style type="text/css">
   .form-group.required .control-label:after { 
    color: #d00;
    content: "*";
    position: absolute;
    margin-left: 2px;
    
}
    #addjobform .form-group label.error{
      color: red;
    }
   </style>

    @include('frontend.JobPortal.dashboards.company.include.header')
   
  

    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.JobPortal.dashboards.company.include.left-sidebar')

          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Add Job</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                  <button class="btn btn-sm btn-outline-secondary">Share</button>
                  <button class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
                </button>
              </div>
            </div>
            <div class="col-md-12">
               @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
              <form class="form-horizontal" id="addjobform" action="{{url('jobs/company/add-job')}}" method="post" enctype="multipart/form-data">
                 {{csrf_field()}}
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8 col-sm-12">
                    <div class="form-group required col-md-12 col-sm-12">
                      <label for="job_title" class="control-label">Job Title</label>
                      <input  class="form-control" id="job_title" name="job_title" placeholder="">
                       <span class="help-block">
                              <strong class="error"></strong>
                      </span>
                    </div>
                    <div class="form-group required col-md-12 col-sm-12">
                      <label for="job_description" class="control-label">Job Description</label>
                      <textarea class="form-control" id="job_description" name="job_description"></textarea>
                       <span class="help-block">
                              <strong class="error"></strong>
                      </span>
                    </div>
                    <div class="form-group col-md-12 col-sm-12">
                      <label for="job_skills">Required Skills</label>
                      <input type="text" class="form-control" id="job_skills" name="job_skills"  placeholder="">
                       <span class="help-block">
                              <strong class="error"></strong>
                      </span>
                    </div>
                    <div class="form-group required col-md-12 col-sm-12">
                      <h6 class="control-label">Job Location</h6>
                      <div class="row form-group">
                        <div class="col-md-6 col-sm-12">
                          <label for="country">Country</label>
                          <select class="form-control" id="country" name="country">
                            <option value="">--Select Country--</option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                          </select>
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="city_id">City</label>
                          <select class="form-control" id="city_id" name="city_id">
                            <option value="">--Select City--</option>
                          </select>
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="form-group required col-md-12 col-sm-12">
                      <label for="job_career_level" class="control-label">Career Level</label>
                      <select class="form-control" id="job_career_level" name="job_career_level">
                        <option value="">--Choose Career Level--</option>
                         <option value="Intern/Student">Intern/Student</option>
                          <option value="Entry Level">Entry Level</option>
                           <option value="Experienced Professional">Experienced Professional</option>
                            <option value="Department Head">Department Head</option>
                            <option value="General Manager">General Manager</option>
                             <option value="CEO">CEO</option>
                             <option value="Country Head">Country Head</option>
                             <option value="President">President</option>
                      </select>
                      <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                    </div>
                    <div class="form-group required col-md-12 col-sm-12">
                      <h6 class="control-label">Salary Range</h6>
                      <div class="row form-group">
                        <div class="col-md-6 col-sm-12">
                          <label for="job_salary_min_range">Min.</label>
                          <input  class="form-control" type="number" min="5000" id="job_salary_min_range" name="job_salary_min_range">
                            <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                          
                          
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="job_salary_max_range">Max.</label>
                          <input class="form-control" type="number" min="5000" id="job_salary_max_range" name="job_salary_max_range">
                            <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                          
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <h6>Job Domain</h6>
                      <div class="row form-group">
                        <div class="col-md-6 col-sm-12">
                          <label for="job_cateory">Job Category</label>
                          <select class="form-control" id="job_cateory" name="job_cateory">
                            <option>--Select Category--</option>
                             @foreach($job_categories as $job_category)
                            <option value="{{$job_category->id}}">{{$job_category->job_category_name}}</option>
                            @endforeach
                          </select>
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="job_sub_category_id">Job Sub-Category</label>
                          <select class="form-control" id="job_sub_category_id" name="job_sub_category_id">
                            <option>--Select Sub-Category--</option>
                          </select>
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <div class="row form-group">
                        <div class="col-md-6 col-sm-12">
                          <label for="job_type_id">Job Type</label>
                          <select class="form-control" id="job_type_id" name="job_type_id">
                            <option>--Select Job Type--</option>
                             @foreach($job_types as $job_type)
                            <option value="{{$job_type->id}}">{{$job_type->job_type_name}}</option>
                            @endforeach
                          </select>
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="job_shift">Job Shift</label>
                          <select class="form-control" id="job_shift" name="job_shift">
                            <option value="">--Select Job Shift--</option>
                            <option value="First Shift(Day)">First Shift(Day)</option>
                            <option value="Second Shift(Evening)">Second Shift(Evening)</option>
                            <option value="Third Shift(Night)">Third Shift(Night)</option>
                            <option value="Rotating">Rotating</option>

                          </select>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="form-group required col-md-12 col-sm-12">
                      <label class="control-label" for="job_gender_preference">Gender Requirement</label>
                      <select class="form-control" id="job_gender_preference" name="job_gender_preference">
                        <option value="">--No preference--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                      </select>
                      <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                    </div>
                    <div class="col-md-12 col-sm-12">
                      <div class="row form-group required">
                        <div class="col-md-6 col-sm-12">
                          <label for="job_no_of_position" class="control-label">Positions Available</label>
                          <input class="form-control" type="number" min="1" name="job_no_of_position" id="job_no_of_position">
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="apply_by" class="control-label">Apply By</label>
                          <input class="form-control" type="date" name="apply_by" id="apply_by">
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group required col-md-12 col-sm-12" style="margin-top:5%;">
                      <h2 class="h2 form-group">Applicant Requirements</h2>
                      
                      <h6>Required Qualification</h6>
                      <div class="row form-group required">
                        <div class="col-md-6 col-sm-12">
                          <label for="degree_level_id" class="control-label">Degree Level</label>
                          <select class="form-control" id="degree_level_id" name="degree_level_id">
                            <option value="">--Select Degree Level--</option>
                            @foreach($degree_levels as $degree_level)
                            <option value="{{$degree_level->id}}">{{$degree_level->degree_level_name}}</option>
                            @endforeach
                          </select>
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="degree_type_id">Degree Title</label>
                          <select class="form-control" id="degree_type_id" name="degree_type_id">
                            <option>--Select Degree Title--</option>
                          </select>
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="specific_degree">Specific Degree Title</label>
                        <input type="text" class="form-control" id="specific_degree" name="specific_degree" placeholder="">
                        <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                      </div>
                      
                      <h6 class="control-label">Years Of Experience</h6>
                      <div class="row form-group">
                        <div class="col-md-6 col-sm-12">
                          <label for="job_year_of_experience_min">Min.</label>
                          <input class="form-control" type="number" min="0" name="job_year_of_experience_min" id="job_year_of_experience_min">
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="job_year_of_experience_max">Max.</label>
                          <input class="form-control" type="number" min="1" name="job_year_of_experience_max" id="job_year_of_experience_max">
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                      </div>
                      <h6 class="control-label">Age Requirement</h6>
                      <div class="row form-group">
                        <div class="col-md-6 col-sm-12">
                          <label for="age_requirement_min">Min.</label>
                          <input class="form-control" type="number" min="1" name="age_requirement_min" id="age_requirement_min">
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="age_requirement_max">Max.</label>
                          <input class="form-control" type="number" min="1" name="age_requirement_max" id="age_requirement_max">
                          <span class="help-block">
                              <strong class="error"></strong>
                          </span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group  col-md-12 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                    
                  </div>
                </div>
              </form>
            </div>
            
          </main>
          
        
        </div>
      </div>
   
    @include('frontend.JobPortal.dashboards.company.include.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <!-- form validation -->
    <script src="{{URL::to('public/JobPortal_Frontend/assets')}}/jquery-validation/dist/jquery.validate.js"></script>
    <script type="text/javascript">
           $.validator.setDefaults({
    submitHandler: function() {
      $("#addjobform").submit();
    }
  });
      $().ready(function() {

        jQuery.validator.addMethod("max_exp_check", function (value, element) {
        if (value> $("#job_year_of_experience_min").val()) {
            return true;
        } else {
            return false;
        };
    }, "please enter max experience");

        jQuery.validator.addMethod("max_age_check", function (value, element) {
        if (value> $("#age_requirement_min").val()) {
            return true;
        } else {
            return false;
        };
    }, "please enter max age.");

        jQuery.validator.addMethod("max_salary_check", function (value, element) {
        if ((value-$("#job_salary_min_range").val())>0) {
          //alert($("#job_salary_min_range").val());
            return true;
        } else {
          //alert($("#job_salary_min_range").val());
          //alert(false);
            return false;
        };
    }, "please enter max salary.");

        $("#addjobform").validate({
          rules: {
        job_title: "required",
        job_description: "required",
        country: "required",
        city_id: "required",
        job_career_level: "required",
        job_salary_min_range: "required",
        job_salary_max_range: "required",
        job_gender_preference: "required",
        job_no_of_position: "required",
        apply_by: "required",
        degree_level_id: "required",
        job_year_of_experience_min: "required",
        job_year_of_experience_max: "required",
        age_requirement_min: "required",
        age_requirement_max: "required",

        job_title: {
          required: true,
          minlength: 2
        },
        job_description: {
          required: true,
          minlength: 2
        },
        
        country: {
          required: true
        },

        city_id: {
          required: true
        },
        
        job_career_level: {
          required: true
        },
        job_salary_min_range: {
          required: true,
          number:true,
          min: 5000,
          max: 900000
        },
        job_salary_max_range: {
          required: true,
          number:true,
          max: 1000000,
          max_salary_check: true
        },
        job_gender_preference: {
          required: true
        },
        job_no_of_position: {
          required:true,
          number: true,
          min: 1
        },
        apply_by: {
          required: true,
          date: true
        },
        degree_level_id: {
          required: true
        },
        job_year_of_experience_min: {
          required: true,
          number:true,
          min: 0,
          max:19
        },
        job_year_of_experience_max: {
          required: true,
          number:true,
          max: 20,
          max_exp_check: true
        },
        age_requirement_min: {
          required: true,
          number:true,
          min: 18,
          max: 50
        },
        age_requirement_max: {
          required: true,
          number:true,
          max: 60,
          max_age_check: true
        }
      },
      messages: {
        job_title: {
          required: "Please enter job title."
        },
        job_description: {
          required: "Please enter job description."
        },
        country: {
          required: "Please select country."
        },
        city_id: {
          required: "Please select city."
        },
        
        job_career_level: {
          required: "Please select career level."
        },
        job_salary_min_range: {
          required: "Please enter salary min range.",
          number: "Please enter number.",
          min: "Enter equal or greater than 5000.",
          max:"Enter equal or lower than 900000."
        },
        job_salary_max_range: {
          required: "Please enter salary max range.",
          number: "Please enter number.",
          min: "Enter equal or greater than 100000.",
          max:"Enter equal or lower than 1000000."
        },
        job_gender_preference: {
          required: "Please select gender preference."
        },
        job_no_of_position: {
          required: "Please enter No. of Position.",
          number: "Please enter number.",
          min: "Enter equal or greater than 1."
        },
        apply_by: {
          required: "Please enter date."
        },
        degree_level_id: {
          required: "Please select degree level."
        },
        job_year_of_experience_min: {
          required: "Please enter years of experience.",
          number: "Please enter number.",
          min: "Enter equal or greater than 1.",
          max:"Enter equal or lower than 20."
        },
        job_year_of_experience_max: {
          required: "Please enter years of experience.",
          number: "Please enter number.",
          min: "Enter equal or greater than 10.",
          max:"Enter equal or lower than 20."
        },
        age_requirement_min: {
          required: "Please enter min age requirement.",
          number: "Please enter number.",
          min: "Enter equal or greater than 18.",
          max:"Enter equal or lower than 50."
        },
        age_requirement_max: {
          required: "Please enter max age requirement.",
          number: "Please enter number.",
          min: "Enter equal or greater than 31.",
          max:"Enter equal or lower than 60."
        }
      }
        });

   
      });

    </script>
    
     <script type="text/javascript">
        
           // demo.initChartist();
            
           $('#country').change(function(){
                // alert('test');
                $.get('{{$GLOBALS['CompanyDashboard']}}/cities/' + this.value + '/cities.json', function(cities)
                {
                    console.log(cities);
                    var $city_id = $('#city_id');

                    $city_id.find('option').remove().end();
                    if (cities!='') {
                       $.each(cities, function(index, city) {
                        $city_id.append('<option value="' + city.id + '">' + city.city_name + '</option>');
                    }); 
                    }
                    else{
                         $city_id.append('<option value="">No city found</option>');
                    }
                    
                });
            });

           $('#job_cateory').change(function(){
                // alert('test');
                $.get('{{$GLOBALS['CompanyDashboard']}}/sub_categories/' + this.value + '/sub_categories.json', function(sub_categories)
                {
                    console.log(sub_categories);
                    var $job_sub_category_id = $('#job_sub_category_id');

                    $job_sub_category_id.find('option').remove().end();
                    if (sub_categories!='') {
                       $.each(sub_categories, function(index, sub_category) {
                        $job_sub_category_id.append('<option value="' + sub_category.id + '">' + sub_category.job_sub_category_name + '</option>');
                    });  
                    }
                    else{
                         $job_sub_category_id.append('<option value="">No Sub Category found</option>');
                    }
                   
                });
            });

           $('#degree_level_id').change(function(){
                // alert('test');
                $.get('{{$GLOBALS['CompanyDashboard']}}/degree_types/' + this.value + '/degree_types.json', function(degree_types)
                {
                    console.log(degree_types);
                    var $degree_type_id = $('#degree_type_id');

                    $degree_type_id.find('option').remove().end();
                    if (degree_types!='') {
                       $.each(degree_types, function(index, degree_type) {
                        $degree_type_id.append('<option value="' + degree_type.id + '">' + degree_type.degree_type_name + '</option>');
                    });  
                    }
                    else{
                         $degree_type_id.append('<option value="">No Degree Type found</option>');
                    }
                   
                });
            });
            
        
    </script>