 @include('frontend.ecommerce.dashboards.User.include.header')
 <style>
   .file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
.file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#ca902a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#ca902a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}

 </style>
    <!-- <div id="">
    <div class="container-fluid">
      <div class="row"> -->
        
        @include('frontend.ecommerce.dashboards.User.include.left-sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

@if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif

       
<div class="container bootstrap snippet">
    <!-- <div class="row">

  		<div class="col-sm-10"><h1>{{$users->first_name}}</h1></div> -->
    	<!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div> -->
   <!--  </div> -->
     <div class="row">
  		
    	<div class="col-sm-12">
           
                  <form class="form" action="{{url('ecommerce/profile')}}" method="post" id="registrationForm"  enctype="multipart/form-data">

                  	{{ csrf_field()}}
                    @if($users->profile_pic!=null)






                    <div class="col-sm-3">
        <img src="{{URL::to('public/dashboard/ecommerce')}}/upload/profile/{{$users->profile_pic}}" width="120" height="120" class="avatar img-circle img-thumbnail" alt="avatar" onerror="this.src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'">
        <h6>Upload a different photo...</h6>
        <div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Profile Image</div>
    <div class="file-select-name" id="noFile">Please Select Profile Image...</div> 
    <input type="file" name="profileImage" id="chooseFile" value="{{$users->profile_pic}}" accept="image/*">
    @if ($errors->has("image"))
                                    <span class="help-block">
                                        <strong class="error">{{ $errors->first("image") }}</strong>
                                    </span>
                                @endif
  </div>
</div>
        <!-- <input type="file" name="profileImage" class="text-center center-block file-upload"> -->
      </div>
      @else
      <div class="col-sm-4">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" width="120" height="120" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Profile Image</div>
    <div class="file-select-name" id="noFile">Please Select Profile Image...</div> 
    <input type="file" name="profileImage" id="chooseFile"  accept="image/*">
    @if ($errors->has("image"))
                                    <span class="help-block">
                                        <strong class="error">{{ $errors->first("image") }}</strong>
                                    </span>
                                @endif
  </div>
</div>
</div>
            @endif    
            <div class="col-sm-8" style="">                        
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter Your first name" value="{{$users->first_name}}"  title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Your last name" value="{{$users->last_name}}" title="enter your last name if any.">
                          </div>
                      </div>
          				<div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="{{$users->email}}" title="enter your email.">
                          </div>
                      </div>

                      	 <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="address"><h4>Address</h4></label>
                              <textarea  class="form-control" id="address" name="address" placeholder="Please Enter Your Address" value="{{$users->address}}" title="Enter Your Address">{{$users->address}}</textarea>
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="cnic"><h4>CNIC</h4></label>
                              <input type="text" class="form-control" name="cnic" id="cnic" maxlength="15" placeholder="Enter Your CNIC" value="{{$users->cnic}}" title="enter your cnic">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Contact Number</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile"  maxlength="12" placeholder="enter mobile number" value="{{$users->contact_number}}" title="enter your mobile number if any.">
                          </div>
                      </div>
                       <div class="form-group"> 
                          <div class="col-xs-6">
                             <label for="dob"><h4>Date Of Birth</h4></label>
                              <input type="date" class="form-control" name="date_of_birth" value="{{$users->date_of_birth}}" id="txtDate" />
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                             <label for="gender"><h4>Gender</h4></label>
                              <select  class="form-control" id='gender' name="gender">
                              	<option value = "">Please Select Gender</option>
                              	<option value = "male">Male</option>
                              	<option value = "Female">Female</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="nationality"><h4>Nationality</h4></label>
                              <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Enter Your Nationality" value="{{$users->nationality}}" title="enter your Nationality if any.">
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                             <label for="country"><h4>Country</h4></label>
                              <select  class="form-control" id="country" name="country">
                                <option value = "">Please Select Country</option>
                                @foreach($countries as $country)
                                <option value = "{{$country->id}}">{{$country->country_name}}</option>
                                @endforeach
                                <!-- <option value = "Female">Female</option> -->
                              </select>
                          </div>
                      </div>

                       <div class="form-group"> 
                          <div class="col-xs-6">
                             <label for="state"><h4>State</h4></label>
                              <select  class="form-control" id="area" name="area">
                                <option value = "">Please Select Country First</option>
                                
                                <!-- <option value = "Female">Female</option> -->
                              </select>
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                             <label for="cities"><h4>City</h4></label>
                              <select  class="form-control" id="city" name="city">
                                <option value = "">Please Select State First</option>
                                
                                <!-- <option value = "Female">Female</option> -->
                              </select>
                          </div>
                      </div>
                      
                     
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             <!-- </div> --><!--/tab-pane-->
             <!-- <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
               
             </div> --><!--/tab-pane-->
            
               
              <!-- </div> --><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div>


    </main>
          
            
          
        
        <!-- </div>
      </div>
    </div> -->
    @include('frontend.ecommerce.dashboards.User.include.footer')

<script type="">
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    // alert(maxDate);
    $('#txtDate').attr('max', maxDate);
 });



  $('#cnic').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length; 
              
  if(length == 5 || length == 13)
   $(this).val($(this).val()+'-');

 });
  $('#mobile').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length; 
              
  if(length == 4)
   $(this).val($(this).val()+'-');

 });
   $('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("Please Select Profile Image..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});
</script>
<script type="text/javascript">
    // $(document).ready(function() {
$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $('#country').on('change', function() {
            
            var countryID = $(this).val();
            alert(countryID);
            if (countryID) {
                $.ajax({

                    url: '{{ url('/ecommerce/city/regions')}}'+'/' +countryID ,
                    type: "GET",
                    dataType: "json",
                    
                    success:function(data) {

                        
                        $('select[name="area"]').empty();
                        $('select[name="area"]').append('<option value="'+ "" +'">'+ "Select State" +'</option>');
                        $.each(data, function(key, value) {
                            $('select[name="area"]').append('<option value="'+ value.id +'">'+ value.region_name +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="area"]').empty();
            }
        });



        $('#area').on('change', function() {
            
            var stateID = $(this).val();
            alert(stateID);
            if (stateID) {
                $.ajax({

                    url: '{{ url('/ecommerce/city/cities')}}'+'/' +stateID ,
                    type: "GET",
                    dataType: "json",
                    
                    success:function(data) {

                        
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ value.id +'">'+ value.city_name +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });




    // });
</script>