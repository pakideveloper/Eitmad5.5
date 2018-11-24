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
      <form @submit.prevent="submit">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 col-sm-12">
            <div class="form-group required col-md-12 col-sm-12" :class="{ 'has-error': $v.job_title.$error }">
              <label for="job_title" class="control-label">Job Title</label>
              <input type="text" class="form-control" id="job_title" aria-describedby="emailHelp" placeholder="" v-model="$v.job_title.$model">
              <span class="error" v-if="$v.job_title.$error">Field is required</span>
            </div>
            <div class="form-group required col-md-12 col-sm-12" :class="{ 'has-error': $v.job_description.$error }">
              <label for="job_description" class="control-label">Job Description</label>
              <textarea class="form-control" id="job_description" v-model="$v.job_description.$model"></textarea>
              <span class="error" v-if="$v.job_description.$error">Field is required</span>
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="job_skills">Required Skills</label>
              <input type="text" class="form-control" id="job_skills"  placeholder="" v-model="job_skills">
            </div>
            <div class="form-group required col-md-12 col-sm-12">
              <h6 class="control-label">Job Location</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.country.$error }">
                <label for="country">Country</label>
                <select class="form-control" id="country" v-model="$v.country.$model">
                  <option>--Select Country--</option>
                </select>
               <span class="error" v-if="$v.country.$error">Field is required</span>
              </div>
              <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.city_id.$error }">
                <label for="city_id">City</label>
                <select class="form-control" id="city_id" v-model="$v.city_id.$model">
                  <option>--Select City--</option>
                </select>
                <span class="error" v-if="$v.city_id.$error">Field is required</span>
              </div>
              </div>
              
            </div>
           
            <div class="form-group required col-md-12 col-sm-12" :class="{ 'has-error': $v.job_career_level.$error }">
              <label for="job_career_level" class="control-label">Career Level</label>
             <select class="form-control" id="job_career_level" v-model="$v.job_career_level.$model">
                  <option>--Choose Career Level--</option>
                </select>
                <span class="error" v-if="$v.job_career_level.$error">Field is required</span>
            </div>

             <div class="form-group required col-md-12 col-sm-12">
              <h6 class="control-label">Salary Range</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.job_salary_min_range.$error }">
                <label for="job_salary_min_range">Min.</label>
                <select class="form-control" id="job_salary_min_range" v-model="$v.job_salary_min_range.$model">
                  <option>--From (Pkr)--</option>
                </select>
               <span class="error" v-if="$v.job_salary_min_range.$error">Field is required</span>
              </div>
              <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.job_salary_max_range.$error }">
                <label for="job_salary_max_range">Max.</label>
                <select class="form-control" id="job_salary_max_range" v-model="$v.job_salary_max_range.$model">
                  <option>--To (Pkr)--</option>
                </select>
                <span class="error" v-if="$v.job_salary_max_range.$error">Field is required</span>
              </div>
              </div>
              
            </div>

            <div class="col-md-12 col-sm-12">
              <h6>Job Domain</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="job_cateory">Job Category</label>
                <select class="form-control" id="job_cateory" v-model="job_cateory">
                  <option>--Select Category--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_sub_category_id">Job Sub-Category</label>
                <select class="form-control" id="job_sub_category_id" v-model="job_sub_category_id">
                  <option>--Select Sub-Category--</option>
                </select>
              </div>
              </div>
              
            </div>

            <div class="col-md-12 col-sm-12">
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="job_type_id">Job Type</label>
                <select class="form-control" id="job_type_id" v-model="job_type_id">
                  <option>--Select Job Type--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_shift">Job Shift</label>
                <select class="form-control" id="job_shift" v-model="job_shift">
                  <option>--Select Job Shift--</option>
                </select>
              </div>
              </div>
              
            </div>
            
            <div class="form-group col-md-12 col-sm-12">
              <label for="job_gender_preference">Gender Requirement</label>
              <select class="form-control" id="job_gender_preference" v-model="job_gender_preference">
                  <option>--No preference--</option>
                  <option>--Male--</option>
                  <option>--Female--</option>
                  <option>--Others--</option>
                </select>
            </div>

             <div class="col-md-12 col-sm-12">
              <div class="row form-group required">
                <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.job_no_of_position.$error }">
                <label for="job_no_of_position" class="control-label">Positions Available</label>
                <input class="form-control" type="number" min="1" name="job_no_of_position" id="job_no_of_position" v-model="$v.job_no_of_position.$model">
                <span class="error" v-if="$v.job_no_of_position.$error">Field is required</span>
              </div>
              <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.apply_by.$error }">
                <label for="apply_by" class="control-label">Apply By</label>
                <input class="form-control" type="date" name="apply_by" id="apply_by" v-model="$v.apply_by.$model">
                <span class="error" v-if="$v.apply_by.$error">Field is required</span>
              </div>
              </div>
            </div>

            <div class="form-group required col-md-12 col-sm-12" style="margin-top:5%;">
              <h2 class="h2 form-group">Applicant Requirements</h2>
             
                <h6>Required Qualification</h6>
              <div class="row form-group required">
                <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.degree_level_id.$error }">
                <label for="degree_level_id" class="control-label">Degree Level</label>
                <select class="form-control" id="degree_level_id" v-model="$v.degree_level_id.$model">
                  <option>--Select Degree Level--</option>
                </select>
               <span class="error" v-if="$v.degree_level_id.$error">Field is required</span>
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="degree_type_id">Degree Title</label>
                <select class="form-control" id="degree_type_id" v-model="degree_type_id">
                  <option>--Select Degree Title--</option>
                </select>
              </div>
              </div>

              <div class="form-group">
                <label for="specific_degree">Specific Degree Title</label>
                <input type="text" class="form-control" id="specific_degree" placeholder="" v-model="specific_degree">
              
              </div>

             
              <h6 class="control-label">Years Of Experience</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.job_year_of_experience_min.$error }">
                <label for="job_year_of_experience_min">Min.</label>
               <input class="form-control" type="number" min="1" name="job_year_of_experience_min" id="job_year_of_experience_min" v-model="$v.job_year_of_experience_min.$model">
               <span class="error" v-if="$v.job_year_of_experience_min.$error">Field is required</span>
                </div>
              <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.job_year_of_experience_max.$error }">
                <label for="job_year_of_experience_max">Max.</label>
                <input class="form-control" type="number" min="1" name="job_year_of_experience_max" id="job_year_of_experience_max" v-model="$v.job_year_of_experience_max.$model">
                <span class="error" v-if="$v.job_year_of_experience_max.$error">Field is required</span>
              </div>
              </div>

               <h6 class="control-label">Age Requirement</h6>
              <div class="row form-group">
                <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.age_requirement_min.$error }">
                <label for="age_requirement_min">Min.</label>
               <input class="form-control" type="number" min="1" name="age_requirement_min" id="age_requirement_min" v-model="$v.age_requirement_min.$model">
               <span class="error" v-if="$v.age_requirement_min.$error">Field is required</span>
                </div>
              <div class="col-md-6 col-sm-12" :class="{ 'has-error': $v.age_requirement_max.$error }">
                <label for="age_requirement_max">Max.</label>
                <input class="form-control" type="number" min="1" name="age_requirement_max" id="age_requirement_max" v-model="$v.age_requirement_max.$model">
                <span class="error" v-if="$v.age_requirement_max.$error">Field is required</span>
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
</template>


<script>
    import hasUrl from './hasUrl'
	 import { required, between } from 'vuelidate/lib/validators'
    export default {
        mounted() {
          //  [App.vue specific] When App.vue is finish loading finish the progress bar
           console.log('Component mounted.')
          //this.$Progress.finish()
        },
        data() {
          return {
              job_title:'',
              job_description:'',
              job_skills:'',
              city_id: '',
              country:'',
              job_career_level: '',
              job_salary_min_range:'',
              job_salary_max_range:'',
              job_cateory:'', 
              job_sub_category_id:'', 
              job_type_id:'', 
              job_shift:'', 
              job_gender_preference:'', 
              job_no_of_position:'', 
              apply_by:'',
              degree_level_id:'', 
              degree_type_id:'', 
              specific_degree:'', 
              job_year_of_experience_min:'',
              job_year_of_experience_max:'',
              age_requirement_min:'',  
              age_requirement_max:'',              
          };
        },
        validations: {
          job_title: {
            required,
          },
          job_description: {
            required,
          },
          country: {
            required,

          },
          city_id: {
            required,
          },
          job_career_level: {
            required,
          },
          job_salary_min_range: {
            required,
            
          },
          job_salary_max_range: {
            required,
          
          },
          job_no_of_position: {
            required,
            between: between(1, 1000)
          },
          apply_by: {
            required,
          },
          degree_level_id: {
            required,
          },
          job_year_of_experience_min: {
            required,
            between: between(1, 20)
          },
          job_year_of_experience_max: {
            required,
            between: between(1, 20)
          },
          age_requirement_min: {
            required,
            between: between(18, 60)
          },
         age_requirement_max: {
            required,
            between: between(18, 60)
          },
        },
        methods: {
          submit(){
            console.log(this.$v.$invalid);
            this.$v.$touch();
            if (!this.$v.$invalid) {
              //this.$Progress.start()
              console.log(this.url);
              let endpoint = this.url+'/add-job';
              const data = new FormData();
              data.append('job_title',this.job_title)
              data.append('job_description',this.job_description)
              data.append('job_skills',this.job_skills)
              data.append('city_id',this.city_id)
              data.append('country',this.country)
              data.append('job_career_level',this.job_career_level)
              data.append('job_salary_min_range',this.job_salary_min_range)
              data.append('job_salary_max_range',this.job_salary_max_range)
              data.append('job_cateory',this.job_cateory)
              data.append('job_sub_category_id',this.job_sub_category_id)
              data.append('job_type_id',this.job_type_id)
              data.append('job_shift',this.job_shift)
              data.append('job_gender_preference',this.job_gender_preference)
              data.append('job_no_of_position',this.job_no_of_position)
              data.append('apply_by',this.apply_by)
              data.append('degree_level_id',this.degree_level_id)
              data.append('degree_type_id',this.degree_type_id)
              data.append('specific_degree',this.specific_degree)
               data.append('job_year_of_experience_min',this.job_year_of_experience_min)
              data.append('job_year_of_experience_max',this.job_year_of_experience_max)
              data.append('age_requirement_min',this.age_requirement_min)
               data.append('age_requirement_max',this.age_requirement_max)

              axios.post(endpoint, data)
              .then(response => {
                 if(response.status === 200){
                    //this.$Progress.finish();
                 }
                 // this.name = ' ';this.description = ' ';this.size = ' ';this.color = ' ';this.price = ' ';this.quantity = ' ';this.sliderImages = null;this.titleImage=null;
              }).catch(e => {
                //this.$Progress.fail()
              })
            }
          },
          
          
        },
        mixins: [hasUrl]
    }
</script>
<style type="text/css" scoped>
  .form-group.required .control-label:after { 
    color: #d00;
    content: "*";
    position: absolute;
    margin-left: 2px;
    
}
.error{
      font-size: 12px;
      color: red;
  }
  .has-error{
    animation-name: shakeError;
    animation-fill-mode: forward;
    animation-duration: .6s;
    animation-timing-function: ease-in-out;
  }
  .has-error input{
    border-color: #f79483;
    
  }
  .has-error > .form-control:focus{
    color: #495057;
    background-color: #fff;
    border-color: #ff9d9d;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(236, 176, 176);

  }

  .has-error {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
</style>