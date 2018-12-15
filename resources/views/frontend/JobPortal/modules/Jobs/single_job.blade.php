<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/jobs-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:34 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Jobs List-view</title>
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
<body>
<!-- top start here -->
	<div id="top">
		<!-- top container start here-->
		<div class="container">
			<!-- <div id="top-links">
				<ul class="list-inline pull-left button">
					<li>
						<a href="about.html"><span>ABOUT US</span></a>
					</li>
					<li>
						<a href="contact.html"><span>CONTACT US</span></a>
					</li>
					<li>
						<a href="contact.html"><span>EMAIL : INFO@JOBPORTAL.COM</span></a>
					</li>
				</ul>
				<ul class="list-inline pull-right icon">
					<li>
						<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div> -->
		</div>
		<!-- top container end here-->
	</div>
<!-- top end here -->
	
<!-- header start here-->
	@include('frontend/JobPortal/include/jobheader1')
<!-- header end here -->

<!-- jobs start here -->
	<div id="jobs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-content start here -->
					<div class="jobs-content">
						<h1>Job Detail</h1>
						<ul class="list-inline">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="jobs-detail.html">Jobs</a>
							</li>
						</ul>
					</div>
				<!-- jobs-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- jobs end here -->


<!-- job start here -->
	<div id="jobdetail">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
					<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p6.png" alt="p6" title="p6" class="img-responsive" />
					<div class="left-side">
						<ul class="list-unstyled">
							<li>
								<h5><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h5>
								<p>{{$job->city->city_name}},{{$job->city->country->country_name}}</p>
							</li>
							<li>
								<h5><i class="fa fa-money" aria-hidden="true"></i> 
								Salary</h5>
								<p>{{$job->job_salary_min_range}}-{{$job->job_salary_max_range}}(Pkr) /month</p>
							</li>
							<li>
								<h5><i class="fa fa-shield" aria-hidden="true"></i> 
								Experience</h5>
								<p>{{$job->job_year_of_experience_min}}-{{$job->job_year_of_experience_max}}(yrs.)</p>
							</li>
							<li>
								<h5><i class="fa fa-clock-o" aria-hidden="true"></i> Posted</h5>
								<p>{{Carbon\Carbon::parse($job->created_at)->format('d M,Y')}}</p>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-8 col-sm-8 col-xs-12 paddleft content">
					<h1>{{$job->job_title}}</h1>
					<ul class="list-inline">
						<li>
							<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> {{$job->job_career_level}}</a>
						</li>
					</ul>
					<!-- <p>Aliquam hendrit rutrum iaculis nullam ondimentum maluada velit beum donec sit amet tristique erosam amet risus mollis malesuada quis quis nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae mattis nisi vel elit porttitor euismod pharetra sem interdum.</p> -->
					<h5>Job Description</h5>
					<p><span>{{$job->job_description}}</span>
					</p>
					<!-- <p><span>Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</span></p> -->
					<button type="button" class="btn btn-info" onclick="location.href='submit-job.html'">APPLY THIS JOB</button>
				</div>
					
				<!-- featured start here -->
				<div id="similar" class="col-md-12 col-sm-12 col-xs-12 padd0">
					<div class="similar-jobs">
						<div class="border"></div>
						<h1><span>Similars</span> JOBS</h1>
						<div class="border1"></div>
					</div>
				@foreach($similar_jobs as $job)
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.html">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p4.jpg" alt="p4" title="p4"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>{{$job->job_title}}</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> {{$job->job_career_level}}</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$job->city->city_name}},{{$job->city->country->country_name}}</a>
								</li>
							</ul>
							<?php
                                                        if(strlen($job->job_description)>101){
                                                            $description = substr($job->job_description, 0, 100).'[...]';
                                                        }
                                                        else
                                                        {
                                                            $description = $job->job_description;
                                                        }
                                                        ?>
							<p>{{$description}}</p>
						</div>
						<a href="{{url('jobs/single_job/')}}/{{$job->id}}" class="btn btn-info" >VIEW MORE</a>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
					</div>
				</div>
				@endforeach	
				
				</div>
				<!-- featured end here -->
				
			</div>
		</div>
	</div>
<!-- abouts end here -->



<!-- Footer start here -->
	@include('frontend/ecommerce/include/footer')
	<div class="powered">
		<div class="container">
			<p>Copyright &#169; 2017. All Rights Reserved</p>
		</div>
	</div>
<!-- Footer end here -->

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

<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/lightGallery.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/plugins/masterslider.min.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/mailer/mailer.js"></script>
		<script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/js/scripts.js"></script>
    <script src="{{URL::to('public/JobPortal_Frontend/header_footer_assets/assets')}}/color-switcher/color-switcher.js"></script>

</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/jobs-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:34 GMT -->
</html>