<template>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add Product</h1>
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
      <form>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 col-sm-12">
            <div class="form-group required col-md-12 col-sm-12">
              <label for="job_title" class="control-label">Job Title</label>
              <input type="text" class="form-control" id="job_title" aria-describedby="emailHelp" placeholder="">
              
            </div>
            <div class="form-group required col-md-12 col-sm-12">
              <label for="job_description" class="control-label">Job Description</label>
              <textarea class="form-control" id="job_description"></textarea>
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="job_skills">Required Skills</label>
              <input type="text" class="form-control" id="job_skills" value="Amsterdam,Washington,Sydney,Beijing,Cairo" placeholder="" data-role="tagsinput">
            </div>
            <div class="form-group required col-md-12 col-sm-12">
              <h6 class="control-label">Job Location</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="country">Country</label>
                <select class="form-control" id="country">
                  <option>--Select Country--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="city_id">City</label>
                <select class="form-control" id="city_id">
                  <option>--Select City--</option>
                </select>
              </div>
              </div>
              
            </div>
           
            <div class="form-group required col-md-12 col-sm-12">
              <label for="job_career_level" class="control-label">Career Level</label>
             <select class="form-control" id="job_career_level">
                  <option>--Choose Career Level--</option>
                </select>
            </div>

             <div class="form-group required col-md-12 col-sm-12">
              <h6 class="control-label">Salary Range</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="job_salary_min_range">Min.</label>
                <select class="form-control" id="job_salary_min_range">
                  <option>--From (Pkr)--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_salary_max_range">Max.</label>
                <select class="form-control" id="job_salary_max_range">
                  <option>--To (Pkr)--</option>
                </select>
              </div>
              </div>
              
            </div>

            <div class="col-md-12 col-sm-12">
              <h6>Job Domain</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="job_cateory">Job Category</label>
                <select class="form-control" id="job_cateory">
                  <option>--Select Category--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_sub_category_id">Job Sub-Category</label>
                <select class="form-control" id="job_sub_category_id">
                  <option>--Select Sub-Category--</option>
                </select>
              </div>
              </div>
              
            </div>

            <div class="col-md-12 col-sm-12">
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="job_type_id">Job Type</label>
                <select class="form-control" id="job_type_id">
                  <option>--Select Job Type--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_shift">Job Shift</label>
                <select class="form-control" id="job_shift">
                  <option>--Select Job Shift--</option>
                </select>
              </div>
              </div>
              
            </div>
            
            <div class="form-group col-md-12 col-sm-12">
              <label for="job_gender_preference">Gender Requirement</label>
              <select class="form-control" id="job_gender_preference">
                  <option>--No preference--</option>
                  <option>--Male--</option>
                  <option>--Female--</option>
                  <option>--Others--</option>
                </select>
            </div>

             <div class="col-md-12 col-sm-12">
              <div class="row form-group required">
                <div class="col-md-6 col-sm-12">
                <label for="job_no_of_position" class="control-label">Positions Available</label>
                <input class="form-control" type="number" min="1" name="job_no_of_position" id="job_no_of_position">
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="apply_by" class="control-label">Apply By</label>
                <input class="form-control" type="date" name="apply_by" id="apply_by">
              </div>
              </div>
            </div>

            <div class="form-group required col-md-12 col-sm-12" style="margin-top:5%;">
              <h2 class="h2 form-group">Applicant Requirements</h2>
             
                <h6>Required Qualification</h6>
              <div class="row form-group required">
                <div class="col-md-6 col-sm-12">
                <label for="degree_level_id" class="control-label">Degree Level</label>
                <select class="form-control" id="degree_level_id">
                  <option>--Select Degree Level--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="degree_type_id">Degree Title</label>
                <select class="form-control" id="degree_type_id">
                  <option>--Select Degree Title--</option>
                </select>
              </div>
              </div>

              <div class="form-group">
                <label for="specific_degree">Specific Degree Title</label>
                <input type="text" class="form-control" id="specific_degree" placeholder="">
              
              </div>

             
              <h6 class="control-label">Years Of Experience</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="job_year_of_experience_min">Min.</label>
               <input class="form-control" type="number" min="1" name="job_year_of_experience_min" id="job_year_of_experience_min">
                </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_year_of_experience_max">Max.</label>
                <input class="form-control" type="number" min="1" name="job_year_of_experience_max" id="job_year_of_experience_max">
              </div>
              </div>

               <h6 class="control-label">Age Requirement</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="age_requirement_min">Min.</label>
               <input class="form-control" type="number" min="1" name="age_requirement_min" id="age_requirement_min">
                </div>
              <div class="col-md-6 col-sm-12">
                <label for="age_requirement_max">Max.</label>
                <input class="form-control" type="number" min="1" name="age_requirement_max" id="age_requirement_max">
              </div>
              </div>

            </div>
          
            <div class="form-group  col-md-12 col-sm-12">
               <button type="button" class="btn btn-primary" >Submit</button>
            </div>
           
          </div>  
        </div>      
      </form>
    </div>
    
  </main>
</template>

<style type="text/css" scoped>
	.form-group.required .control-label:after { 
    color: #d00;
    content: "*";
    position: absolute;
    margin-left: 2px;
    
}
</style>
<script  scoped>
	 import { required, minLength, between, email } from 'vuelidate/lib/validators'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
          return {
              categories: [],
              sub_categories:[],
              brands:[],
              discounts: [],
              formData:{},
              name: '',
              description:'',
              size:'', 
              color:'', 
              price:'', 
              quantity:'', 
              category:'', 
              brand:'', 
              discount:'',
              inputs:[] ,              
          };
        },
        validations: {
          name: {
            required,
          },
          description: {
            required,
          },
          size: {
            required,
          },
          color: {
            required,
          },
          price: {
            required,
          },
          quantity: {
            required,
          },
          category: {
            required,
          },
          brand: {
            required,
          },
          discount: {
            required,
          },
        }
    }
</script>
