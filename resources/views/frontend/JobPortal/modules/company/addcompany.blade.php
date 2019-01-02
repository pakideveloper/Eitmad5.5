<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:22 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Add Company -Job Portal</title>
<!-- Bootstrap stylesheet -->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CSource+Sans+Pro:300,400,600,700" rel="stylesheet"> 
<!-- stylesheet -->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/style.css" rel="stylesheet" type="text/css"/>
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/style_cyan.css" title="style_cyan" rel="alternate stylesheet" type="text/css"/>
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/style_red.css" title="style_red" rel="alternate stylesheet" type="text/css"/>
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/style_green.css" title="style_green" rel="alternate stylesheet" type="text/css"/>
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<!--bootstrap datepicker-->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/datepicker.css" rel="stylesheet" type="text/css" />


<meta name="description" content="Responsive HTML5 E-Commerce Template" />
		<meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
		<meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Master Slider Styles-->
    <link href="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/masterslider/style/masterslider.css" rel="stylesheet" media="screen">
    <!--Styles-->
    <link href="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/css/styles.css" rel="stylesheet" media="screen">
    <link href="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/css/custom-styles.css" rel="stylesheet" media="screen">
    <!--Color Scheme-->
    <link class="color-scheme" href="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Color Switcher-->
    <link href="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/color-switcher/color-switcher.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/libs/modernizr.custom.js"></script>
</head>

   <!-- styling for form validation -->
   <style type="text/css">
   	#contact-form .form .form-group label.error{
   		color: red;
   	}
   </style>
<body>
<!-- header start -->
@include('frontend/JobPortal/include/jobheader1')
	<!-- header end -->

<!-- contact start here -->
	<div id="contact">
		 @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
		<div class="container" >
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- contact-content start here -->
					<div class="contact-content" style="margin-top: 150px;">
						<h1>Add A Company</h1>
						<!-- <ul class="list-inline">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="contact.html">Add A Company</a>
							</li>
						</ul> -->
					</div>
				<!-- contact-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- contact end here -->


<!-- contact-form start here -->
	<div id="contact-form">
		<div class="container">
			<div class="row">
				<div class=" col-sm-offset-2 col-md-8 col-sm-8 col-xs-12">
					<!-- form start here -->
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" id="addcompanyform" action="{{url('jobs/company_registration')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
							<fieldset>
								<div class="form-group {{ $errors->has('company_name') ? ' has-error' : '' }}">
									<div class="col-sm-12">
										<label>Company Name</label>
										<input class="form-control" placeholder="Enter company name" id="company_name" name="company_name" type="text" value="{{ old('company_name') }}">
										 @if ($errors->has('company_name'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('company_name') }}</strong>
                                                         </span>
                                                     @endif
									</div>
								</div>
								<div class="form-group {{ $errors->has('company_description') ? ' has-error' : '' }}">
									<div class="col-sm-12">
										<label>Company Description</label>
										<textarea class="form-control" id="company_description" rows="10" name="company_description" placeholder="Enter Company Description">{{ old('company_description') }}</textarea>
										 @if ($errors->has('company_description'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('company_description') }}</strong>
                                                         </span>
                                                     @endif
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('ownership_type') ? ' has-error' : '' }}">
										<label>Ownership Type</label>
										<!-- <input class="form-control" placeholder="Enter your name" id="input-name" value="" name="jobname" required="" type="text"> -->
										<select class="form-control" name="ownership_type">
											<option value="">--Select one--</option>
											<option value="Public">Public</option>
											<option value="Private">Private</option>
											<option value="Sole Proprietorship">Sole Proprietorship</option>
											<option value="Government">Government</option>
											<option value="NGO">NGO</option>
										</select>
										@if ($errors->has('ownership_type'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('ownership_type') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6 {{ $errors->has('industry_id') ? ' has-error' : '' }}">
										<label>Industry</label>
										<!-- <input class="form-control" id="input-email" placeholder="you@yourdomain.com" value="" name="email" required="" type="text"> -->
										<select class="form-control" name="industry_id">
											<option value="">--Select one--</option>
											@foreach($industries as $industry)
											<option value="{{$industry->id}}">{{$industry->industry_name}}</option>
											@endforeach
										</select>
										@if ($errors->has('industry_id'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('industry_id') }}</strong>
                                                         </span>
                                                     @endif
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 {{ $errors->has('company_address') ? ' has-error' : '' }}">
										<label>Company Address</label>
										<input class="form-control" id="company_address" placeholder="" value="{{ old('company_address') }}" name="company_address" type="text">
										 @if ($errors->has('company_address'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('company_address') }}</strong>
                                                         </span>
                                                     @endif
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('country') ? ' has-error' : '' }}">
										<label>Country</label>
										<!-- <input class="form-control" placeholder="Enter your name" id="input-name" value="" name="jobname" required="" type="text"> -->
										<select class="form-control" name="country" id="country">
											<option value="">--Select one--</option>
											@foreach($countries as $country)
											<option value="{{$country->id}}">{{$country->country_name}}</option>
											@endforeach
										</select>
										@if ($errors->has('country'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('country') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6 {{ $errors->has('city_id') ? ' has-error' : '' }}">
										<label>City</label>
										<select class="form-control" id="city_id" name="city_id">
											<option value="">-Select country first-</option>
											
										</select>
										<!-- <input  id="input-email" placeholder="you@yourdomain.com" value="{{ old('company_address') }}"  required="" type="text"> -->
										@if ($errors->has('city_id'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('city_id') }}</strong>
                                                         </span>
                                                     @endif
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Company URL</label>
										<input class="form-control" placeholder="Enter your name" id="company_url" name="company_url">
									</div>
									<div class="col-sm-6 {{ $errors->has('company_phone') ? ' has-error' : '' }}">
										<label>Company Phone</label>
										<input class="form-control" id="company_phone" placeholder="Enter company contact number." value="{{ old('company_phone') }}" name="company_phone" type="text">
										@if ($errors->has('company_phone'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('company_phone') }}</strong>
                                                         </span>
                                                     @endif
                                                     <span id="spnPhoneStatus"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('contact_email') ? ' has-error' : '' }}">
										<label>Contact Email</label>
										<input class="form-control" placeholder="Enter company email" id="contact_email" value="{{ old('contact_email') }}" name="contact_email">
										@if ($errors->has('contact_email'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('contact_email') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6">
										<label>Conatact Person</label>
										<input class="form-control" id="contact_person" placeholder="Enter person name" name="contact_person" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>No of Employees</label>
										<input class="form-control" placeholder="Enter number of employees" id="no_of_employees" name="no_of_employees">
									</div>
									<div class="col-sm-6">
										<label>Operating Since</label>
										<!-- <input class="form-control" id="operating_since" placeholder="" name="operating_since" type="text"> -->
										<div class="input-append date" id="dp3" data-date="" data-date-format="dd-mm-yyyy">
  <input class="form-control span2" size="16" type="text" placeholder="dd-mm-yyyy" name="operating_since" id="operating_since">
  <span class="add-on"><i class="icon-th"></i></span>
</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('cr_designation') ? ' has-error' : '' }}">
										<label>Your Designation</label>
										<input class="form-control" placeholder="Enter your designation" id="cr_designation" value="{{ old('cr_designation') }}" name="cr_designation" type="text">
										@if ($errors->has('cr_designation'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('cr_designation') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6">
										<label>SECP Company ID</label>
										<input class="form-control" id="secp_id" placeholder="" name="secp_id" type="text">
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-12">
										<label>Company Logo</label>
										<input class="form-control" id="company_logo" placeholder="" name="company_logo" type="file">
									</div>
								</div>
								
							</fieldset>
							<fieldset>
								<h3>Company CEO Information</h3>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('ceo_name') ? ' has-error' : '' }}">
										<label>CEO Name</label>
										<input class="form-control" placeholder="Enter CEO name" id="ceo_name" value="{{ old('ceo_name') }}" name="ceo_name" type="text">
										@if ($errors->has('ceo_name'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('ceo_name') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6">
										<label>Contact No.</label>
										<input class="form-control" id="ceo_contact" placeholder="" name="ceo_contact">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>CEO Email</label>
										<input class="form-control" id="ceo_email" placeholder="you@yourdomain.com" name="ceo_email">
									</div>
									<div class="col-sm-6">
										<label>CEO CNIC</label>
										<input class="form-control" id="ceo_cnic" placeholder="xxxxx-xxxxxxx-x" name="ceo_cnic" type="text">
									</div>
								</div>

								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus">Add Company</button>
								</div>

							</fieldset>
						</form>
					</div>
					<!-- form end here -->
				</div>
				
				
			</div>
		</div>
		
	</div>
<!-- contact-form end here -->


<!-- footer start -->
@include('frontend/JobPortal/include/jobfooter1')
<!--footer end -->
<!-- jquery -->
<script src="{{URL::to('public/JobPortal_Frontend/assets')}}/js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{URL::to('public/JobPortal_Frontend/assets')}}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="{{URL::to('public/JobPortal_Frontend/assets')}}/js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="{{URL::to('public/JobPortal_Frontend/assets')}}/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="{{URL::to('public/JobPortal_Frontend/assets')}}/js/internal.js" type="text/javascript"></script>
<!-- color switcher-->
<script src="{{URL::to('public/JobPortal_Frontend/assets')}}/js/switcher.js" type="text/javascript"></script>
<!-- Date picker-->
<script src="{{URL::to('public/JobPortal_Frontend/assets')}}/js/bootstrap-datepicker.js" type="text/javascript"></script>

<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/libs/jquery-1.11.1.min.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/libs/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/libs/jquery.easing.min.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/bootstrap.min.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/smoothscroll.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/jquery.validate.min.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/icheck.min.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/jquery.placeholder.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/jquery.stellar.min.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/jquery.touchSwipe.min.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/jquery.shuffle.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/lightGallery.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/masterslider.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/mailer/mailer.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/scripts.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/color-switcher/color-switcher.js"></script>
<!-- end additional -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script>
  $( function() {
    $( "#dp3" ).datepicker();
  } );
  </script>

	<!-- fetch cities off country -->
	 <script type="text/javascript">
        $(document).ready(function(){
           // demo.initChartist();
            
           $('#country').change(function(){
                // alert('test');
                $.get('addcompany/cities/' + this.value + '/cities.json', function(cities)
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
                         $city_id.append('<option>No city found</option>');
                    }
                    
                });
            });

           
        });

        
    </script>

    <!-- form validation -->
    <script src="{{URL::to('public/JobPortal_Frontend/assets')}}/jquery-validation/dist/jquery.validate.js"></script>
    <script type="text/javascript">
    	$.validator.setDefaults({
		submitHandler: function() {
			$("#addcompanyform").submit();
		}
	});
    	$().ready(function() {
    		$("#addcompanyform").validate({
    			rules: {
				ownership_type: "required",
				industry_id: "required",
				country: "required",
				city_id: "required",
				company_name: {
					required: true,
					minlength: 2
				},
				company_description: {
					required: true,
					minlength: 2
				},
				
				company_address: {
					required: true,
					minlength: 2
				},
				
				company_url: {
					url: true
				},
				contact_email: {
					required: true,
					email: true
				},
				contact_person: {
					minlength: 2
				},
				no_of_employees: {
					number: true,
					min: 1
				},
				cr_designation: {
					required: true,
					minlength: 2
				},
				ceo_name: {
					required: true,
					minlength: 2
				},
				ceo_email: {
					email: true
				}
			},
			messages: {
				company_name: {
					required: "Please enter company name."
				},
				company_description: {
					required: "Please enter company description."
				},
				company_address: {
					required: "Please enter company address."
				},
				cr_designation: {
					required: "Please enter your designation."
				},
				
				contact_email: {
					required: "Please enter company`s contact email.",
					email: "Please enter a valid email address."
				},
				ceo_name: {
					required: "Please enter company CEO name."
				},
				ceo_email: {
					required: "Please enter a valid email address."
				}
			}
    		});

    // 		$('#company_phone').blur(function(e) {
    //     if (validatePhone('company_phone')) {
    //         $('#spnPhoneStatus').html('Valid');
    //         $('#spnPhoneStatus').css('color', 'green');
    //     }
    //     else {
    //         $('#spnPhoneStatus').html('Invalid');
    //         $('#spnPhoneStatus').css('color', 'red');
    //     }
    // });
    	});

//     	function validatePhone(company_phone) {
//     var a = document.getElementById(company_phone).value;
//     var filter = /^[0-9-+]+$/;
//     if (filter.test(a) && a.length==12) {
//         return true;
//     }
//     else {
//         return false;
//     }
// };

    	$('#ceo_cnic').keydown(function(){

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
  if (length==15) {
  	$("#ceo_cnic").attr('maxlength','15');
  };

 });
    	$('#company_phone').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length; 
              
  if (length==12) {
  	$("#company_phone").attr('maxlength','12');
  };

 });
    	$('#ceo_contact').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length; 
  if (length==12) {
  	$("#ceo_contact").attr('maxlength','12');
  };

 });
    </script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:23 GMT -->
</html>