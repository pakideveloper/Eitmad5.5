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
</head>
<body>
<!-- header start -->
@include('frontend/JobPortal/include/jobheader')
	<!-- header end -->

<!-- contact start here -->
	<div id="contact">
		 @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- contact-content start here -->
					<div class="contact-content">
						<h1>Add A Company</h1>
						<ul class="list-inline">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="contact.html">Add A Company</a>
							</li>
						</ul>
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
						<form class="form-horizontal" id="form" action="{{url('jobs/company_registration')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
							<fieldset>
								<div class="form-group {{ $errors->has('company_name') ? ' has-error' : '' }}">
									<div class="col-sm-12">
										<label>Company Name</label>
										<input class="form-control" placeholder="Enter company name" id="input-name" name="company_name" type="text" value="{{ old('company_name') }}">
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
										<textarea class="form-control" id="input-enquiry" rows="10" name="company_description" placeholder="Enter Company Description">{{ old('company_description') }}</textarea>
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
											<option value="1">Public</option>
											<option value="2">Private</option>
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
											<option value="1">Technology</option>
											<option value="2">Electronics</option>
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
										<input class="form-control" id="input-subject" placeholder="" value="{{ old('company_address') }}" name="company_address" type="text">
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
										<select class="form-control" name="country">
											<option value="pakistan">Pakistan</option>
											<option value="India">India</option>
										</select>
										@if ($errors->has('country'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('country') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6 {{ $errors->has('city_id') ? ' has-error' : '' }}">
										<label>City</label>
										<select class="form-control" name="city_id">
											<option value="1">Lahore</option>
											<option value="2">Karachi</option>
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
										<input class="form-control" placeholder="Enter your name" id="input-name" name="jobname" type="text">
									</div>
									<div class="col-sm-6 {{ $errors->has('company_phone') ? ' has-error' : '' }}">
										<label>Company Phone</label>
										<input class="form-control" id="input-email" placeholder="Enter company contact number." value="{{ old('company_phone') }}" name="company_phone" type="text">
										@if ($errors->has('company_phone'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('company_phone') }}</strong>
                                                         </span>
                                                     @endif
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('contact_email') ? ' has-error' : '' }}">
										<label>Contact Email</label>
										<input class="form-control" placeholder="Enter company email" id="input-name" value="{{ old('contact_email') }}" name="contact_email" type="text">
										@if ($errors->has('contact_email'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('contact_email') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6">
										<label>Conatact Person</label>
										<input class="form-control" id="input-email" placeholder="you@yourdomain.com" name="email" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>No of Employees</label>
										<input class="form-control" placeholder="Enter your name" id="input-name" name="jobname" type="text">
									</div>
									<div class="col-sm-6">
										<label>Operating Since</label>
										<input class="form-control" id="input-email" placeholder="you@yourdomain.com" name="email" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('cr_designation') ? ' has-error' : '' }}">
										<label>Your Designation</label>
										<input class="form-control" placeholder="Enter your designation" id="input-name" value="{{ old('cr_designation') }}" name="cr_designation" type="text">
										@if ($errors->has('cr_designation'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('cr_designation') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6">
										<label>SECP Company ID</label>
										<input class="form-control" id="input-email" placeholder="you@yourdomain.com" name="email" type="text">
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-12">
										<label>Company Logo</label>
										<input class="form-control" id="input-subject" placeholder="" name="email" type="file">
									</div>
								</div>
								
							</fieldset>
							<fieldset>
								<h3>Company CEO Information</h3>
								<div class="form-group">
									<div class="col-sm-6 {{ $errors->has('ceo_name') ? ' has-error' : '' }}">
										<label>CEO Name</label>
										<input class="form-control" placeholder="Enter CEO name" id="input-name" value="{{ old('ceo_name') }}" name="ceo_name" type="text">
										@if ($errors->has('ceo_name'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('ceo_name') }}</strong>
                                                         </span>
                                                     @endif
									</div>
									<div class="col-sm-6">
										<label>Contact No.</label>
										<input class="form-control" id="input-email" placeholder="you@yourdomain.com" name="email" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>CEO Email</label>
										<input class="form-control" id="input-subject" placeholder="" name="email" type="text">
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
@include('frontend/JobPortal/include/jobfooter')
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
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:23 GMT -->
</html>