
<!-- header start -->
@include('frontend/JobPortal/dashboards/candidate/include/header')
  <!-- header end -->
  <!-- Sidebaar -->
@include('frontend/JobPortal/dashboards/candidate/include/left-sidebar')
<!-- sidebar end -->


<!-- CV form starts here -->
 <main role="main" class="col-lg-10 col-md-10 ml-sm-auto col-lg-10">
 	 @if (session('status'))
        <div class="alert alert-success" style="margin-bottom: 0px;">
       		 {{ session('status') }}
		</div>
	@endif
<div class="container bg-light  col-lg-10" style="top:50px; position: relative;" >
		
<form action="{{url('jobs/candidate/user-profile')}}/{{$users->id}}" method="post" enctype="multipart/form-data">
	
	<div class="row">
		<div class="dark-grey bg-warning col-lg-12" style="float:right; text-align: center;">
			<h3>Create Your Profile</h3>
		</div>
	     {{ csrf_field() }}
       {{ method_field('PUT')}}
       <div class="bg-dark form-group col-lg-12 col-md-12" style="text-align: center;">
			<div class="col-md-12" style="text-align: center; padding: 20px; ">
      			 <img style="height: 150px; width: 150px; border-radius: 75px; border: 1px solid black; " src="{{count($candidate_profile)!= 0?URL::to('public/JobPortal_Frontend/assets/images/candidate/'.$candidate_profile->candidate_dp): ''}}">

			</div>
		</div> 

         <div class="form-group col-lg-6">
			<label>Profile Img</label>
			<input type="file" name="profile_img" class="form-control" value="">
		</div>
        <hr>
		<div class="form-group col-lg-6">
			<label>First Name</label>
			<input type="text" name="" class="form-control" id="" value="{{$users->first_name?$users->first_name:''}}" disabled="true">
		</div>
	
		<div class="form-group col-lg-6">
			<label>Last Name</label>
			<input type="text" name="md-name" class="form-control" id="" value="{{$users->last_name?$users->last_name:''}}" disabled="true">
		</div>
		<div class="form-group col-lg-6">
			<label>Email</label>
			<input type="email" name="" class="form-control" value="{{$users->email?$users->email:''}}" disabled="true">
		</div>

		<div class="form-group col-lg-6">
			<label>Date Of Birth</label>
			<input type="date" name="data_of_b" class="form-control" value="{{$users->date_of_birth?$users->date_of_birth:''}}">			
		</div>
		<div class="form-group col-lg-6">
			<label>CNIC#</label>
			<input type="text" name="cnic" class="form-control" value="{{$users->cnic?$users->cnic:''}}" >			
		</div>
		<div class="form-group col-lg-6">
			<label>Gender</label>
			<select class="form-control " name="gender" value="{{$users->gender?$users->gender:''}}">
				<option value="{{$users->gender?$users->gender:''}}">{{$users->gender?$users->gender:'Select Gender'}}</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>			
		</div>
			<div class="form-group col-lg-6">
			<label>Contact Number</label>
			<input type="text" name="contact_num" class="form-control" value="{{$users->contact_number?$users->contact_number:''}}">			
		</div>
		<div class="form-group col-lg-6">
			<label>Marital Status</label>
			<select class="form-control " name="marital_status">
				<option value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_marital_status:''}}">{{count($candidate_profile)!= 0?$candidate_profile->candidate_marital_status:'Maritala Status'}}</option>
				<option value="divorced">Divorced</option>
				<option value="married">Married</option>
					<option value="seperated">Seperated</option>
					<option value="single">Single</option>
					<option value="widow">Widow</option>
			</select>			
		</div>
			<div class="form-group col-lg-6">
			<label>Nationality</label>
			<select class="form-control" name="nationality">
				<option value="{{$users->nationality?$users->nationality:''}}">{{$users->nationality?$users->nationality:'Select One'}}</option>
				<option value="pakistan">Pakistan</option>
				<option value="afghanistan">Afghanistan</option>
			</select>			
		</div>
		<div class="form-group col-lg-6">
			<label>City</label>

			<select class="form-control" name="city_id">
				@foreach($cities as $city)
				<option value="{{$city->id?$city->id:''}}">{{$city->city_name?$city->city_name:''}}</option>	
				@endforeach 				
			</select>		
				
		</div>
		<div class="form-group col-lg-6">
			<label>Caption About Profession</label>

			<input type="text" name="profession_caption" class="form-control" value="{{count($candidate_profile)!= 0?$candidate_profile->caption:''}}">
				
		</div>
	    <div class="form-group col-lg-6">
			<label>Career Level</label> 
			<select name="career_level" class="form-control">
				<option value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_career_level:''}}">{{count($candidate_profile)!= 0?$candidate_profile->candidate_career_level:'Select One Level'}}</option>
				<option value="Intern/Student">Intern / Student</option>
				<option value="Entry Level">Entry Level</option>
				<option value="Experienced">Experienced</option>
				<option value="Profesional">Profesional</option>
				<option value="Managerial">Managerial </option>					
			</select>			
		</div>
		<div class="form-group col-lg-6">
		<label>Professional Experience </label>
			<select class="form-control" name="pro_exp">
				<option value="{{count($candidate_profile)!= 0?$candidate_profile->professional_experience:''}}" selected="true">{{count($candidate_profile)!= 0?$candidate_profile->professional_experience:'Select One'}}</option>
				<option value="1">Fresh </option>
				<option value="2">Less than 1 Year </option>
				<option value="1">1 Year </option>
				<option value="2">2 Years </option>				
			</select>	
		</div>
		<div class="form-group col-lg-6">
			<label>Functional Area</label>
			<select class="form-control" name="func_area">
				<option value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_functional_area:''}}" selected="true">{{count($candidate_profile)!= 0?$candidate_profile->candidate_functional_area:'Select One'}}</option>
				<option value="hardware">hardware</option>
				<option value="Telecome">software</option>
				<option value="Telecome">Telecome</option>
				<option value="PLC">PLC</option>
				<option value="Electronics">Electronics </option>					
			</select>			
		</div>
		<div class="form-group col-lg-6">
			<label>Current Salary</label>
			<select class="form-control" name="current_salary">
				<option value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_current_salary:''}}" selected="true">{{count($candidate_profile)!= 0?$candidate_profile->candidate_current_salary:'Select One'}}</option>
				<option value="10000">10000</option>
				<option value="20000">20000</option>
				<option value="30000">30000 </option>
				<option value="40000">40000</option>				
			</select>	
		</div>
		<div class="form-group col-lg-6">
			<label>Expected Salary</label>
			<select class="form-control" name="expected_salary">
				<option value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_expected_salary:''}}" selected="true">{{count($candidate_profile)!= 0?$candidate_profile->candidate_expected_salary:'Select One'}}</option>
				<option value="10000">10000 </option>
				<option value="20000">20000 </option>
				<option value="30000">30000 </option>
				<option value="40000">40000 </option>				
			</select>	
		</div>
		<div class="form-group col-lg-6">
			<label>Professional Summary</label>
			<textarea name="prof_summary" rows="2" class="form-control">{{count($candidate_profile)!= 0?$candidate_profile->candidate_profile_summary:''}}</textarea>
		</div>
			<div class="form-group col-lg-6">
			<label>Blog / PortfolioLink</label>

			<input type="text" name="blog_link" class="form-control" value="{{count($candidate_profile)!= 0?$candidate_profile->blog_link:''}}">
			 
		</div>
		<div class="form-group col-lg-6">
			<label>Skills</label>

			<input type="text" name="skills" class="form-control" value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_skills:''}}">
			 
		</div>
		<div class="form-group col-lg-6">
			<label>Languages</label>

			<input type="text" name="languages" class="form-control" value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_languages:''}}">
			 
		</div>
		<div class="form-group col-lg-12">
			<label>Postal Address</label>

			<input type="text" name="postal_address" class="form-control" value="{{count($candidate_profile)!= 0?$candidate_profile->candidate_postal_address:''}}">
			 
		</div>
         <div class="form group col-lg-6">		
			<input type="submit" name="update-profile" class="btn btn-danger mb-2" value="Update">
			<input type="reset" name="" class="btn btn-outline-danger mb-2" value="Cancel">				
		</div>
	
	</div>
		</form>

</div>
<!-- Education -->
<div class="container bg-light  col-lg-10" style="top:50px; position: relative;" >
		
<form action="{{url('jobs/candidate/user-edu-profile')}}" method="post" enctype="multipart/form-data">
	<div class="row" style="margin-bottom: 10px; margin-top: 10px;">
	<div class="dark-grey col-lg-12 bg-info click-edu" style="float:right; text-align: center;">
			<h3 class="text-light">Add Education</h3>
		</div>
	</div>
	<div class="row toggle-edu-row" style="display: none;" >
		
	     {{ csrf_field() }}
       <!-- {{ method_field('PUT')}} -->

		<div class="form-group col-lg-6">
			<label>Education Title</label>
			<input type="text" name="edu_title" class="form-control" id="" value="" >
		</div>
	
		<div class="form-group col-lg-6">
			<label>Degree Type</label>
			<select class="form-control" name="degreeType_id">
				@foreach($degreeType as $degree)
				<option value="{{$degree->id?$degree->id:''}}">{{$degree->degree_type_name?$degree->degree_type_name:''}}</option>	
				@endforeach 				
			</select>		</div>		
		
		<div class="form-group col-lg-6">
			<label>Major Subjects</label>
			<input type="text" name="maj_subjects" class="form-control" value="">	
		</div>
		
		<div class="form-group col-lg-6">
			<label>City</label>
			<select class="form-control" name="city_id">
				@foreach($cities as $city)
			<option value="{{$city->id?$city->id:''}}">{{$city->city_name?$city->city_name:''}}</option>	
				@endforeach 				
			</select>			
		</div>

		<div class="form-group col-lg-6">
			<label>Institute Name</label>
			<input type="text" name="insti_name" class="form-control" value="">
			 
		</div>
		<div class="form-group col-lg-6">
			<label>Completion Year</label>
			<select class="form-control" name="completion_year">
				<option value="">Select One Year</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2013">2014</option>					
			</select>
		</div>
		<div class="form-group col-lg-6">
			<label>Result Type</label>
			<select class="form-control" name="result_type">
				<option value="">Select One Type</option>
				<option value="CGPA">CGPA</option>
				<option value="Grade">Grade</option>
				<option value="Anuall">Anuall </option>					
			</select>
		</div>
		<div class="form-group col-lg-6">
			<label>Results</label>
			<input type="text" name="result" class="form-control" value="">
			 
		</div>
         <div class="form group col-lg-6">		
			<input type="submit" name="" class="btn btn-info mb-2" value="Submit">
			<input type="reset" name="" class="btn btn-outline-info mb-2" value="Cancel">				
		</div>
	
	</div>
		</form>

</div>
<!-- Certificates -->
<div class="container bg-light  col-lg-10" style="top:50px; position: relative;" >
		
<form action="{{url('jobs/candidate/user-edu-certificates')}}" method="post" enctype="multipart/form-data">
	<div class="row" style="margin-bottom: 10px; margin-top: 10px;">
	<div class="dark-grey col-lg-12 bg-info click-certi" style="float:right; text-align: center;">
			<h3 class="text-light">Add Certificates</h3>
		</div>
	</div>
	<div class="row toggle-certificate-row" style="display: none;" >
		
	     {{ csrf_field() }}
       <!-- {{ method_field('PUT')}} -->

		<div class="form-group col-lg-6">
			<label>Certificate Name</label>
			<input type="text" name="certif_name" class="form-control" id="" value="" >
		</div>
	
		<div class="form-group col-lg-6">
			<label>Institute Name</label>
			<input type="text" name="insti_name" class="form-control" id="" value="" >
		</div>		
		
		<div class="form-group col-lg-12">
			<label>Completion Year</label>
			<select class="form-control" name="completion_year">
				<option value="">Select One Year</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2013">2014</option>					
			</select>
		</div>
		
		
         <div class="form group col-lg-6">		
			<input type="submit" name="" class="btn btn-info mb-2" value="Submit">
			<input type="reset" name="" class="btn btn-outline-info mb-2" value="Cancel">				
		</div>
	
	</div>
		</form>

</div>
<!-- Professional Experience -->
<div class="container bg-light  col-lg-10" style="top:50px; position: relative;" >
		
<form action="{{url('jobs/candidate/user-add-experience')}}" method="post" enctype="multipart/form-data">
	<div class="row" style="margin-bottom: 10px; margin-top: 10px;">
	<div class="dark-grey col-lg-12 bg-info click-exp" style="float:right; text-align: center;">
			<h3 class="text-light">Add Professional Experiences</h3>
		</div>
	</div>
	<div class="row toggle-exp-row" style="display: none;" >
		
	     {{ csrf_field() }}
       <!-- {{ method_field('PUT')}} -->

		<div class="form-group col-lg-6">
			<label>Job Title</label>
			<input type="text" name="job_title" class="form-control" id="" value="">
		</div>
	
		<div class="form-group col-lg-6">
			<label>Compamny</label>
			<select class="form-control" name="company_id">
			@foreach($companies as $company)
			<option value="{{$company->id?$company->id:''}}">{{$company->company_name?$company->company_name:''}}</option>	
			@endforeach 				
			</select>						
		</div>
		<div class="form-group col-lg-6">
			<label>City</label>
			<select class="form-control" name="city_id">
				@foreach($cities as $city)
				<option value="{{$city->id?$city->id:''}}">{{$city->city_name?$city->city_name:''}}</option>	
				@endforeach 				
			</select>					
		</div>
		<div class="form-group col-lg-6">
			<label>Start Date</label>
			<input type="date" name="start_time" class="form-control" id="" value="">
		</div>
		<div class="form-group col-lg-6">
			<label>Close Date</label>
			<input type="date" name="ending_time" class="form-control" id="" value="">
		</div>	
		<div class="form-group col-lg-6">
			<label>Industry</label>
			<select class="form-control" name="industry_id">
				@foreach($industries as $industry)
				<option value="{{$industry->id?$industry->id:''}}">{{$industry->industry_name?$industry->industry_name:''}}</option>	
				@endforeach 				
			</select>					
		</div>
		
		<div class="form-group col-lg-6">
			<label>Experience Years</label>
			<select class="form-control " name="exp_years">
				<option value="">Select one Range</option>
				<option value="1">1 years</option>
				<option value="2">2 years</option>
					<option value="3">3 years</option>
					<option value="4">4 years</option>
					<option value="5">5 years</option>
			</select>			
		</div>
		<div class="form-group col-lg-6">
			<label>Experience Description</label>

			<!-- <input type="text" name="exp_desc" class="form-control" value=""> -->
			<textarea name="exp_desc" class="form-control"></textarea>
			 
		</div>
         <div class="form group col-lg-6">		
			<input type="submit" name="" class="btn btn-info mb-2" value="Submit">
			<input type="reset" name="" class="btn btn-outline-info mb-2" value="Cancel">				
		</div>
	
	</div>
		</form>

</div>
<!-- Professional Projects -->

<div class="container bg-light  col-lg-10" style="top:50px; position: relative;" >
		
<form action="{{url('jobs/candidate/user-add-project')}}" method="post" enctype="multipart/form-data">
	<div class="row" style="margin-bottom: 10px; margin-top: 10px;">
	<div class="dark-grey col-lg-12 bg-info click-proj" style="float:right; text-align: center;">
			<h3 class="text-light">Add Professional Projects</h3>
		</div>
	</div>
	<div class="row toggle-projects-row" style="display: none;" >
		
	     {{ csrf_field() }}
       <!-- {{ method_field('PUT')}} -->

		<div class="form-group col-lg-6">
			<label>Project Name</label>
			<input type="text" name="proj_name" class="form-control" id="" value="" >
		</div>
		<div class="form-group col-lg-6">
			<label>Description </label>
			<textarea  name="proj_description" class="form-control"></textarea> 
		</div>	
	
		<div class="form-group col-lg-6">
			<label>Start Date</label>
			<input type="date" name="start_time" class="form-control" id="" value="">
		</div>
		<div class="form-group col-lg-6">
			<label>Close Date</label>
			<input type="date" name="ending_time" class="form-control" id="" value="">
		</div>	
			<div class="form-group col-lg-12">
			<label>Files</label>
			<input type="file" name="proj_file" class="form-control" id="">
		</div>
         <div class="form group col-lg-6">		
			<input type="submit" name="" class="btn btn-info mb-2" value="Submit">
			<input type="reset" name="" class="btn btn-outline-info mb-2" value="Cancel">				
		</div>
	
	</div>
		</form>

</div>
</main>
<!-- footer start -->
@include('frontend/JobPortal/dashboards/candidate/include/footer')
<!--footer end -->

  </body>
</html>
<script type="text/javascript">
	
$(document).ready(function(){

 $(".click-edu").css("cursor", "pointer"); 
 $(".click-certi").css("cursor", "pointer"); 
 $(".click-exp").css("cursor", "pointer"); 
 $(".click-proj").css("cursor", "pointer");

$(".click-edu").click(function(){ 
        $(".toggle-edu-row").toggle(1000);       
    });
$(".click-certi").click(function(){ 
       $(".toggle-certificate-row").toggle(1000);     
       
    });
$(".click-exp").click(function(){ 
           $(".toggle-exp-row").toggle(1000); 
       
    });
$(".click-proj").click(function(){ 
            $(".toggle-projects-row").toggle(1000);
       
    });

 


});

</script>