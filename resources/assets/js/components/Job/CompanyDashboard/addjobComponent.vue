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
              <textarea class="form-control" id="job_description" v-model="$v.job_title.$model"></textarea>
              <span class="error" v-if="$v.job_description.$error">Field is required</span>
            </div>
            <div class="form-group col-md-12 col-sm-12">
              <label for="job_skills">Required Skills</label>
              <input type="text" class="form-control" id="job_skills" value="Amsterdam,Washington,Sydney,Beijing,Cairo" placeholder="" data-role="tagsinput" v-model="$v.job_skills.$model">
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
                <select class="form-control" id="job_cateory" v-model="$v.job_cateory.$model">
                  <option>--Select Category--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_sub_category_id">Job Sub-Category</label>
                <select class="form-control" id="job_sub_category_id" v-model="$v.job_sub_category_id.$model">
                  <option>--Select Sub-Category--</option>
                </select>
              </div>
              </div>
              
            </div>

            <div class="col-md-12 col-sm-12">
              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                <label for="job_type_id">Job Type</label>
                <select class="form-control" id="job_type_id" v-model="$v.job_type_id.$model">
                  <option>--Select Job Type--</option>
                </select>
               
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="job_shift">Job Shift</label>
                <select class="form-control" id="job_shift" v-model="$v.job_shift.$model">
                  <option>--Select Job Shift--</option>
                </select>
              </div>
              </div>
              
            </div>
            
            <div class="form-group col-md-12 col-sm-12">
              <label for="job_gender_preference">Gender Requirement</label>
              <select class="form-control" id="job_gender_preference" v-model="$v.job_gender_preference.$model">
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
                <select class="form-control" id="degree_type_id" v-model="$v.degree_type_id.$model">
                  <option>--Select Degree Title--</option>
                </select>
              </div>
              </div>

              <div class="form-group">
                <label for="specific_degree">Specific Degree Title</label>
                <input type="text" class="form-control" id="specific_degree" placeholder="" v-model="$v.specific_degree.$model">
              
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
              <div class="col-md-6 col-sm-12">
                <label for="age_requirement_max" :class="{ 'has-error': $v.age_requirement_max.$error }">Max.</label>
                <input class="form-control" type="number" min="1" name="age_requirement_max" id="age_requirement_max" v-model="$v.age_requirement_max.$model">
                <span class="error" v-if="$v.age_requirement_max.$error">Field is required</span>
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
<script>
	 import { required, minLength, between, email } from 'vuelidate/lib/validators'
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
              job_skills:[],
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
              age_requirement_min:'',              
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
            between: between(5000, 1000000)
          },
          job_salary_max_range: {
            required,
            between: between(5000, 1000000)
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
          getCategories(){
            axios.get(this.url+'/getCategories')
                .then(({ data }) => {
                    this.categories = data;
                });
          },
          getSubCategories(){
            axios.get(this.url+'/getSubCategories')
                .then(({ data }) => {
                    this.sub_categories = data;
                });
          },
          getBrands(){
            axios.get(this.url+'/getBrands')
                .then(({ data }) => {
                    this.brands = data;
                });
          },
          getDiscounts(){
            axios.get(this.url+'/getDiscounts')
                .then(({ data }) => {
                    this.discounts = data;
                });
          },
          catChange(){
            this.inputs = [];
            var data = JSON.parse(this.sub_categories[this.category-1].feature_names);
            $.each(data, function(key, value) {
              var input = {name:'', label:''};
              var value2 = value.replace(/\s/g, '') ;
              input.name = value2;
              input.label = value;
              this.inputs.push(input);
              input = {name:'', label:''};
           }.bind(this));
          },
          submit(){
            console.log(this.$v.$invalid);
            this.$v.$touch();
            if (!this.$v.$invalid) {
              this.$Progress.start()
              let endpoint = this.url+'/product';
              const data = new FormData();
              data.append('name',this.name)
              data.append('description',this.des)
              data.append('size',this.size)
              data.append('color',this.color)
              data.append('price',this.price)
              data.append('quantity',this.quantity)
              data.append('sub_category_id',this.category)
              data.append('brand',this.brand)
              data.append('discount',this.discount)
              
              for (var i = 0; i < this.selectedFile.length; i++) {
                data.append('sliderImages[]',this.selectedFile[i])
              }
              $.each(this.formData, function(key, value) {
               data.append(key,value)
             });
              
              data.append('titleImage',this.selectedTitleImage,this.selectedTitleImage.name)
              axios.post(endpoint, data)
              .then(response => {
                 if(response.status === 200){
                    this.$Progress.finish();
                 }
                 // this.name = ' ';this.description = ' ';this.size = ' ';this.color = ' ';this.price = ' ';this.quantity = ' ';this.sliderImages = null;this.titleImage=null;
              }).catch(e => {
                this.$Progress.fail()
              })
            }
          },
          onFileSelected(event){
            let files =event.target.files;
            // this.selectedFile=event.target.files;
            for (var i = 0; i < files.length; i++) {
              this.selectedFile.push(files[i]);
            }
            // console.log(event.target.files);
          },
          onTitleImageSelected(event){
            this.selectedTitleImage=event.target.files[0]
          },
          resetForm() {
            console.log('Reseting the form')
            var self = this; //you need this because *this* will refer to Object.keys below`

            //Iterate through each object field, key is name of the object field`
            Object.keys(this.data.form).forEach(function(key,index) {
              self.data.form[key] = '';
            });
          },
        }
    }
</script>
