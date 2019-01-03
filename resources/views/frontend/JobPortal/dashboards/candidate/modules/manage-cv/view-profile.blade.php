
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

<div class="container emp-profile">
    <!-- <form action="{{url('jobs/candidate/user-profile')}}/{{2}}" method="post" > -->
                         {{ csrf_field() }}
       {{ method_field('PUT')}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <img style="" src="{{count($candidate_profile)!= 0?URL::to('public/JobPortal_Frontend/assets/images/candidate/'.$candidate_profile->candidate_dp): URL::to('public/JobPortal_Frontend/assets/images/candidate/profile-avatar.png')}}">
                          <!--   <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <div class="row">
                            <div class="col-md-6" >
                                    <h5>
                                        {{$users->first_name?$users->first_name:''}}  &nbsp; {{$users->last_name}}
                                    </h5>
                                    <h6>
                                        @if(isset($candidate_profile->caption))
                                        {{$candidate_profile->caption?$candidate_profile->caption:''}}
                                        @endif
                                    </h6>
                                    <p class="proile-rating">Professional Experience : <span> 

                                    {{isset($candidate_profile->professional_experience)?$candidate_profile->professional_experience:''}}
                                    	
                                    </span></p>
                                    <p class="proile-rating">Career Level : <span> 
                                    {{isset($candidate_profile->candidate_career_level)?$candidate_profile->candidate_career_level:''}}

                                    </span></p>
                                    <p class="proile-rating">Professional Summary :
                                         <span>{{isset($candidate_profile->candidate_profile_summary)?$candidate_profile->candidate_profile_summary:''}}
                                 </span>
                                    </p>
                               </div>
                               

                        
                        </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Certificates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Projects</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                        <a href="{{'user-profile'}}/{{$candidate_profile->id}}/edit"  class="profile-edit-btn">Edit Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>BLOG/ PORTFOLIO LINK</p>

                            <a href=""> 
                            {{isset($candidate_profile->blog_link)?$candidate_profile->blog_link:''}}

                            </a><br/>
                          
                           
                        	<p>SKILLS</p> 
                            @if($check_skills == true)                     
                     	@foreach ($skills as $skill) 
                             <a href="">{{isset($skill)?$skill:''}}</a><br/>
                        @endforeach    
                            @endif
                        <p>LANGUAGES</p>
                            @if($check_lang == true)                                               
                            <a href=""> 
                           @foreach ($languages as $language) 
			                 <a href="">{{isset($language)?$language:''}}</a><br/>
                   		    @endforeach
                        	   @endif                      	
                            </a><br/>
                        
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                        {{isset($users->first_name)?$users->first_name:''}}
                			

                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                        {{isset($users->last_name)?$users->last_name:''}}
                			

                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
	                                            <label>
                                                	
                                      		Email

 	                                           </label>
                                            </div>
                                            <div class="col-md-6">
                                              
                                                <p>
                                        {{isset($users->email)?$users->email:''}}
                                                	
                                                </p>
                                                	

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($users->contact_number)?$users->contact_number:''}}

                                                </p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($candidate_profile->caption)?$candidate_profile->caption:''}}

                                                </p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($users->date_of_birth)?$users->date_of_birth:''}}

                                                </p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>CNIC</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($users->cnic)?$users->cnic:''}}

                                                </p>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($users->gender)?$users->gender:''}}

                                                </p>
                                            </div>
                                        </div>
                                  
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Marital Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($candidate_profile->candidate_marital_status)?$candidate_profile->candidate_marital_status:''}}

                                                </p>
                                            </div>
                                        </div>
                                    
                                         <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($users->nationality)?$users->nationality:''}}

                                                </p>
                                            </div>
                                        </div>
                                    
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                                <label>Functional Area</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($candidate_profile->candidate_functional_area)?$candidate_profile->candidate_functional_area:''}}

                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <label>Current Salary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($candidate_profile->candidate_current_salary)?$candidate_profile->candidate_current_salary:''}}

                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <label>Expected Salary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($candidate_profile->candidate_expected_salary)?$candidate_profile->candidate_expected_salary:''}}

                                                </p>
                                            </div>
                                        </div>
                                        
                                           <div class="row">
                                          <div class="col-md-6">
                                                <label>Postal Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> 
                                        {{isset($candidate_profile->candidate_postal_address)?$candidate_profile->candidate_postal_address:''}}

                                                </p>
                                            </div>
                                        </div>
                                       
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                @foreach($edu_profile as $edu)
                        <form action="{{url('jobs/candidate/user-profile')}}/{{$edu->id}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT')}}
                                        <div class="row">
                                            
                                        
                                            <div class="col-md-5">
                                                <label>Education Title</label>

                                               <p>  
                                             <input type="text" class="edu-edit-{{$edu->id}}" name="edu_title" value="{{$edu->candidate_education_profile_title?$edu->candidate_education_profile_title:''}}" style="border: none; background: white;" disabled="true" >
                                            
                                            </p>
                                            </div>
                                        

                                            <div class="col-md-5">
                                                 <label>Major Subjects</label>

                                              <p> 
                                              <input type="text"  name="edu_subjects" class="edu-edit-{{$edu->id}}" value="{{$edu->candidate_education_major_subjects?$edu->candidate_education_major_subjects:''}}" style="border: none; background: white;" disabled="true" > 
                                            
                                           </p>
                                            </div>

                                            <div class="col-md-2">
                                                 <i class="fa fa-edit" id="edit-{{$edu->id}}" onclick="return editfunc({{$edu->id}});" style="cursor: pointer;"></i>

                                                    <i class="fas fa-angle-double-left" id="bk-{{$edu->id}}" onclick="return bkfunc({{$edu->id}})" style="cursor: pointer; display: none;"></i></i>
    
                                                
                                                <a href="{{url('jobs/candidate/user-profile')}}/{{$edu->id}}/del" id="delete_form{{$edu->id}}">
                                                    <script type="text/javascript">
                                                        $("#delete_form").click(function(){ 
                                                        confirm('Do you want to del');
                                                          
                                                        });
                                                    </script>
                                                <i class="fa fa-trash" onclick="return delfunc({{$edu->id}})" style="cursor: pointer;">                
                                                

                                                     </i> </a> 
                                                    

                                            </div>
                                        
                                            <div class="col-md-5">
                                            <label>Institute Name</label>

                                              <p>  
                                              <input type="text"  class="edu-edit-{{$edu->id}}" name="institute_name" value="{{$edu->candidate_education_institute_name?$edu->candidate_education_institute_name:''}}" style="border: none; background: white;" disabled="true"> 
                                           </p>
                                            </div>
                                    

                                            <div class="col-md-5">
                                            <label>Completion Year</label>

                                              <p> 

                                            <input type="text" class="edu-edit-{{$edu->id}}" name="completion_year" value="{{$edu->candidate_education_completion_year?$edu->candidate_education_completion_year:''}}" style="border: none; background: white;" disabled="true"> 
                                              
                                            
                                           </p>
                                            </div>
                                            

                                            <div class="col-md-5">
                                            <label>Result Type</label>

                                              <p> 
                                             <input type="text" class="edu-edit-{{$edu->id}}" name="result_type" value="{{$edu->candidate_education_result_type?$edu->candidate_education_result_type:''}}" style="border: none; background: white;" disabled="true"> 
                                                                                     
                                            
                                            
                                            </p>
                                            <hr><br>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Result</label>

                                            <p> 
                                            <input type="text"  class="edu-edit-{{$edu->id}}"name="result" value="{{$edu->candidate_education_result?$edu->candidate_education_result:''}}" style="border: none; background: white;" disabled="true">  
                                           </p>
                                            <hr><br>
                                            </div>

                                            <div class="col-md-2">
                                    
                                             <p> 
                                            <input type="submit" name="update-edu" class="btn btn-info mb-2 click-btn" value="Update" id="up-{{$edu->id}}" style="display: none;" >  
                                             </p>
                                             
                                            </div>
                                        </div> 
                                         </form>
                                

                                         @endforeach

                                          
                                 </div>
                            </div>
                        </div>
                </div>
            <!-- </form>            -->
        </div>
</main>
<!-- footer start -->
@include('frontend/JobPortal/dashboards/candidate/include/footer')
<!--footer end -->

  </body>
</html>
<script type="text/javascript">
    var editfunc = function(id){
    // alert(id);
    $("#up-"+id).show(500);
    $('#delete_form'+id).hide();
    $(".edu-edit-"+id).css("border","0.5px solid grey");
    $(".edu-edit-"+id).prop("disabled", false);
    $("#bk-"+id).show(500);
    $("#edit-"+id).hide(500);
 }
 var bkfunc = function(id){
            $("#up-"+id).hide(500);
              $('#delete_form'+id).show(500);
            $("#bk-"+id).hide(500);
            $("#edit-"+id).show(500);
            $(".edu-edit-"+id).css("border","none");
            $(".edu-edit-"+id).prop("disabled", true);
           

 }
 /*var delfunc = function(id){
     confirm(id);
    $('#delete_form'+id).click();
 

}*/
</script>
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


// $(".fa-angle-double-left").click(function(){ 
//             $(".fa-angle-double-left").hide();
//             $(".fa-edit").show();
//             $(".edu-edit-"+id).css("border","none");
//             $(".edu-edit-"+id).prop("disabled", true);
            
//      });

 

});

</script>