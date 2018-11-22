<template>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	    <div class="container col-lg-10">
			<div class="row">
				<div class="dark-grey col-lg-12" style="text-align: center;" >
					<h3>Update Your CV</h3>
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
						<option value="">Selec Years</option>
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
						<option value="">Selec One Level</option>
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
						<option value="">Selec One Industry</option>
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
						<option value="">Selec One</option>
						<option value="">10000 - 20000</option>
						<option value="">20000 - 30000 Level</option>
						<option value="">30000 - 40000</option>
						<option value="">40000 - 50000</option>				
					</select>	
				</div>
				<div class="form-group col-lg-6">
					<label>Expected Salary</label>
					<select class="form-control selectpicker">
						<option value="">Selec One</option>
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
				
					<input type="text" name="" class="btn btn-primary mb-2" value="Submit">
						
				</div>
			</div>
		</div>
	</main>	
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
