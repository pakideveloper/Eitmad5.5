<template>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	    <div class="container col-lg-10 bg-light "style="margin-top: 40px;">
			<div class="row">
				<div class="dark-grey col-lg-12" style="text-align: center;" >
					<h3>Create Your CV</h3>
				</div>
			
				<div class=" form-group col-lg-6">
					<label>First Name</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>
				<div class="form-group col-lg-6">
					<label>Middle Name</label>
					<input type="" name="md-name" class="form-control" id="" value="">
				</div>
				<div class="form-group col-lg-6">
					<label>Last Name</label>
					<input type="" name="md-name" class="form-control" id="" value="">
				</div>
				<div class="form-group col-lg-6">
					<label>Email</label>
					<input type="email" name="" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label>Father Name</label>
					<input type="text" name="" class="form-control">
					
				</div>
				<div class="form-group col-lg-6">
					<label>Date Of Birth</label>
					<input type="text" name="" class="form-control">
					
				</div>
				<div class="form-group col-lg-6">
					<label>Gender</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="male">Male</option>
						<option value="Female">Female</option>
					</select>
					
				</div>
				<div class="form-group col-lg-6">
					<label>Marital Status</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">Divorced</option>
						<option value="">Married</option>
							<option value="">Seperated</option>
							<option value="">Single</option>
							<option value="">Widow</option>
					</select>
					
				</div>
					<div class="form-group col-lg-6">
					<label>Nationality</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">Pakistan</option>
						<option value="">Afghanistan</option>
							
					</select>
					
				</div>
					<div class="form-group col-lg-6">
					<label>Country</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">Pakistan</option>
						<option value="">America</option>
							
					</select>
					
				</div>
					<div class="form-group col-lg-6">
					<label>City</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">Lahore</option>
						<option value="">Karachi       </option>
							
					</select>
					
				</div>
				<div class="form-group col-lg-6">
					<label>Mobile Number</label>
					<input type="text" name="" class="form-control">
					
				</div>

				<div class="form-group col-lg-6">
					<label>Professional Experience</label>
					<select class="form-control selectpicker">
						<option value="">Select Years</option>
						<option value="">Less then 1 year</option>
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
						<option value="">4</option>
							
					</select>
					
				</div>
				<div class="form-group col-lg-6">
					<label>Career Level</label>
					<select class="form-control selectpicker">
						<option value="">Select One Level</option>
						<option value="">Intern / Student</option>
						<option value="">Entry Level</option>
						<option value="">Experienced</option>
						<option value="">Profesional</option>
						<option value="">Managerial </option>
							
					</select>
					
				</div>
					<div class="form-group col-lg-6">
					<label>Industry</label>
					<select class="form-control selectpicker">
						<option value="">Select One Industry</option>
						<option value="">IT</option>
						<option value="">Telecome</option>
						<option value="">Engineering</option>
						<option value="">Textiles</option>
						<option value="">Electronics </option>
							
					</select>
					
				</div>
				<div class="form-group col-lg-6">
					<label>Current Salary</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">10000 - 20000</option>
						<option value="">20000 - 30000 Level</option>
						<option value="">30000 - 40000</option>
						<option value="">40000 - 50000</option>				
					</select>	
				</div>
				<div class="form-group col-lg-6">
					<label>Expected Salary</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">10000 - 20000</option>
						<option value="">20000 - 30000 Level</option>
						<option value="">30000 - 40000</option>
						<option value="">40000 - 50000</option>				
					</select>	
				</div>
				<div class="form-group col-lg-6">
					<label>Postal Address</label>
					<input type="text" name="" class="form-control">
						
				</div>
		         <div class="form-group col-lg-6">
				
					<input type="Submit" name="" class="btn btn-secondary active" value="Submit">
					<input type="reset" name="" class="btn btn-outline-secondary" value="Cancel">
						
				</div>
				
			</div>


         

		</div>
        
       <!--  <div class="container bg-light col-lg-10" style="margin-top: 20px; text-align: right;">
     			<p class="fa fa-plus-square-o" @click="btnClicked"> Add More </p>
         </div> -->
		<div class="container col-lg-10 bg-light"  style="margin-top: 20px; ">
			<div class="row">
			 
			<div class="bg-info text-white  col-lg-12 col-md-12 fa fa-plus-square-o" style="float:right; text-align: right; line-height: 30px; vertical-align: middle; margin-bottom: : 20px;" @click="btnClicked" id="add_edu_btn"> <b>ADD MORE EDUCATION</b></div>
			<!-- <div class="col-lg-1 col-md-1" style="text-align: center;" ><p style=" float: right; text-align: center;"> Education</p></div> -->
			</div>	
			<div class="row" id="add_edu_form" style="display:none;" >
			   
			   <div class="dark-grey col-lg-12" style="text-align: center;" >
					<h4>Education</h4>
				</div>
				<div class="form-group col-lg-6">
					<label>Degree Level</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">Non-Matriculation</option>
						<option value="">Matriculation / O-Level</option>
						<option value="">Inter / A-Level </option>
						<option value="">Bachelors-14years</option>	
						<option value="">Bachelors-16years</option>
						<option value="">Masters-16years</option>
						<option value="">Masters-18years</option>			
					</select>	
				</div>
				<div class="form-group col-lg-6">
					<label>Degree Type</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">Type-A</option>
						<option value="">Type-B</option>
						<option value="">Type-C</option>
						<option value="">Type-D</option>
						<option value="">Type-E</option>
					</select>	
				</div>
				<div class="form-group col-lg-6">
					<label>Degree Title</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label>Major Subjects</label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label>Institute </label>
					<input type="text" name="" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label>Result Type</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">CGPA</option>
						<option value="">Grade</option>
						<option value="">Percentage</option>
				
					</select>	
				</div>
                 <div class="form-group col-lg-6">
					<label>Completion Year</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">2005</option>
						<option value="">2006</option>
						<option value="">2007</option>
						<option value="">2008</option>
						<option value="">2009</option>
					</select>	
				</div>
			     <div class="form-group col-lg-6">
					<label>Result Type</label>
					<select class="form-control selectpicker">
						<option value="">Select One</option>
						<option value="">CGPA</option>
						<option value="">Grade</option>
						<option value="">Percentage </option>
					</select>	
				</div>
		         <div class="form-group col-lg-6">
				
					<input type="Submit" name="" class="btn btn-secondary active" value="Submit">
					<input type="reset" name="" class="btn btn-outline-secondary" value="Cancel">
						
				</div>
			</div>
		</div>
	</main>	
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
          return {}
      },
      methods: {
      	btnClicked(){
      		$("#add_edu_form , #add_edu_btn").toggle(500);
      	}
      }
    }

    $("#add_edu_btn").click(function(){
        
    });

</script>
