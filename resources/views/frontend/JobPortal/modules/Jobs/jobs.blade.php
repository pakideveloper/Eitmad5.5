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
						<h1>Jobs</h1>
						<ul class="list-inline">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="jobs-list-view.html">Jobs</a>
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
	<div id="job">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 form1">
				<div class="sort col-md-2 col-sm-2 col-xs-12">
					<label class="control-label">Sort By:</label>
					<select  class="form-control selectpicker">
						<option value="" selected="selected">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="show col-md-2 col-sm-2 col-xs-12">
					<label class="control-label">Show:</label>
					<select  class="form-control selectpicker">
						<option value="" selected="selected">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="category col-md-2 col-sm-2 col-xs-12">
					<label class="control-label" >Category:</label>
					<select  class="form-control selectpicker">
						<option value="" selected="selected">1</option>
						<option value="">2</option>
					</select>
				</div>
				<div class="keyword col-md-6 col-sm-6 col-xs-12">
					<label class="control-label">Keywords:</label>
					<br>
					<button type="button" class="btn btn-primary" onclick="location.href='jobs.html'">Engineering</button>
					<button type="button" value="Submit" class="btn btn-success" onclick="location.href='jobs.html'">IT</button>
					<button type="button" value="Submit" class="btn btn-danger" onclick="location.href='jobs.html'">Marketing</button>
					<button type="button" value="Submit" class="btn btn-warning" onclick="location.href='jobs.html'">Banking</button>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
					<div class="left left1">
						<div class="job-candidate">
							<h1>FEATURED CANDIDATES</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div id="latestsfeat" class="owl-carousel">
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/cand-1.png" class="img-responsive" alt="cand-1" title="cand-1" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>	
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/cand-2.png" class="img-responsive" alt="cand-2" title="cand-2" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/cand-3.png" class="img-responsive" alt="cand-3" title="cand-3" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/cand-4.png" class="img-responsive" alt="cand-4" title="cand-4" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/cand-5.png" class="img-responsive" alt="cand-5" title="cand-5" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/cand-6.png" class="img-responsive" alt="cand-6" title="cand-6" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="leftside">
						<div class="latest-jobs">
							<h1>LATEST JOBS</h1>
							<div class="border"></div>
							<div class="border1"></div>
						</div>
						<div class="job-content">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p1.jpg" alt="p1" title="p1" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p2.jpg" alt="p2" title="p2" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p3.jpg" alt="p3" title="p3" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
						<div class="job-content">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p4.jpg" alt="p4" title="p4" />
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<a href="apply-job-form.html">Apply Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="career">
						<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/left-banner.jpg" title="left-banner" alt="left-banner" class="img-responsive">
					</div>
				</div>
				
				<div class="col-md-9 col-sm-9 col-xs-12 padd0 product-list">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
									<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p1.jpg" alt="p1" title="p1"/>
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
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
									<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p2.jpg" alt="p2" title="p2"/>
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
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
									<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p3.jpg" alt="p3" title="p3"/>
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
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
									<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p1.jpg" alt="p1" title="p1"/>
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
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="product-box">
							<div class="image">
								<a href="jobs-detail.html">
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
								<h1>IT Department Manager</h1>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-money" aria-hidden="true"></i> 25,000 Per.month</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 45 minutes ago</a>
									</li>
								</ul>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout [..]</p>
								<button type="button" class="btn btn-info" onclick="location.href='jobs.html'">VIEW MORE</button>
								<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.html'">APPLY NOW</button>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous"><span aria-hidden="true" class="fa fa-angle-left"></span></a>
							</li>
							<li class="active">
								<a href="#"> 1</a> 
							</li>
							<li>
								<a href="#"> 2</a> 
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#"> 4</a> 
							</li>
							<li>
								<a href="#"> 5</a> 
							</li>
							<li>
								<a href="#" aria-label="Next"><span aria-hidden="true" class="fa fa-angle-right"></span></a>
							</li>
							<li>
								<a href="#" aria-label="Next"><span aria-hidden="true" class="fa fa-angle-double-right"></span></a>
							</li>
						</ul>
					</div>
				
				</div>
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