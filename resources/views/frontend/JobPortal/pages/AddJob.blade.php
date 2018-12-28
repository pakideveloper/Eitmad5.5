<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/submit-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:23 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Submit Job</title>
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

<!-- submit-job start here -->
	<div id="submit-job">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- submit-job-content start here -->
					<div class="submit-job-content">
						<h1>Submit a job</h1>
						<ul class="list-inline">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="submit-job.html">Submit a job</a>
							</li>
						</ul>
					</div>
				<!-- submit-job-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- submit-job end here -->


<!-- submit-job-form start here -->
	<div id="submit-job-form">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- submit-form start here -->
					<div class="submit-form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Your Email</label>
										<input class="form-control" id="input-email" placeholder="you@yourdomain.com" value="" name="email" required="" type="text">
									</div>
									<div class="col-sm-6">
										<label>Job Title</label>
										<input class="form-control" placeholder="" id="input-jobtitle" value="" name="jobtitle" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Location (optional)</label>
										<input class="form-control" id="input-location" placeholder="e.g. Canada *" value="" name="location" required="" type="text">
									</div>
									<div class="col-sm-6">
										<label>Job Type</label>
										<select class="selectpicker form-control">
											<option selected="" value="0">Full Time</option>
											<option value="1">Part Time</option>
											<option value="2">Full Time</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Job Category</label>
										<input class="form-control" id="input-job" placeholder="e.g. PHP, Web designer, Manager *" value="" name="job category" required="" type="text">
									</div>
									<div class="col-sm-6">
										<label>Salary</label>
										<input class="form-control" placeholder=" e.g. $20,000 *" id="input-salary" value="" name="salary" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Description</label>
										<textarea class="form-control" id="input-enquiry" rows="10" name="enquiry" placeholder="Your message *" required=""></textarea>
									</div>
									<div class="col-sm-6">
										<label>Job banner image</label>
										<div class="browse">
											<input type="file" name="file" id="file" class="inputfile" />
											<label for="file">Choose a file</label>
										</div>
										<span>Max file size 2MB. Allowed file format jpg, gif, png.</span>	
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Application Email/URL</label>
										<input class="form-control" id="input-url" placeholder="Enter an email address or website URL *" value="" name="email" required="" type="text">
									</div>
								</div>
								<h5>Compnay Details</h5>
								<div class="form-group">
									<div class="col-sm-4">
										<label>Company name</label>
										<input class="form-control" placeholder=" Enter the company name *" id="input-company" value="" name="company name" required="" type="text">
									</div>
									<div class="col-sm-4">
										<label>Website(optional)</label>
										<input class="form-control" placeholder=" http:// *" id="input-website" value="" name="website" required="" type="text">
									</div>
									<div class="col-sm-4">
										<label>Tagline (optional)</label>
										<input class="form-control" placeholder="Briefly describe your company *" id="input-tagline" value="" name="tagline" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Description</label>
										<textarea class="form-control" id="input-desc" rows="10" name="enquiry" placeholder="Your message *" required=""></textarea>
									</div>
									<div class="col-sm-6">
										<label>Social Profiles (optional)</label>
										<div class="fb">
											<i class="fa fa-facebook" aria-hidden="true"></i>
											<input class="form-control pull-right" placeholder="Enter page URL *" id="input-tagline1" value="" name="tagline" required="" type="text">
										</div>	
										<div class="twitter">
											<i class="fa fa-twitter" aria-hidden="true"></i>
											<input class="form-control pull-right" placeholder="@ yourcompany *" id="input-tagline2" value="" name="tagline" required="" type="text">
										</div>	
										<div class="google">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
											<input class="form-control pull-right" placeholder="Enter page URL *" id="input-tagline3" value="" name="tagline" required="" type="text">
										</div>	
									</div>
								</div>
								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus">SUBMIT A JOB</button>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- submit-form end here -->
				</div>
			</div>
		</div>
	</div>
<!-- submit-job-form end here -->


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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/submit-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:23 GMT -->
</html>