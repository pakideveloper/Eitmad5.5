<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/employers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:44 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eitmad - Employers</title>
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


<!-- jobs start here -->
	<div id="jobs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- about-content start here -->
					<div class="jobs-content employee">
						<h1>EMPLOYERS</h1>
						<ul class="list-inline">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="employers.html">Employers</a>
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
					<!-- <div class="left left1">
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
										<img src="images/cand-2.png" class="img-responsive" alt="cand-2" title="cand-2" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-3.png" class="img-responsive" alt="cand-3" title="cand-3" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-4.png" class="img-responsive" alt="cand-4" title="cand-4" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-5.png" class="img-responsive" alt="cand-5" title="cand-5" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-12 col-xs-12">
									<div class="candidate">
										<img src="images/cand-6.png" class="img-responsive" alt="cand-6" title="cand-6" />
										<h1>John Doe</h1>
										<p>Web Designer </p>
									</div>
								</div>
							</div>
						</div>
					</div> -->	
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
				
				<div class="col-md-9 col-sm-9 col-xs-12 padd0">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<a href="{{url('employerdetail')}}">
									<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo1.jpg" alt="logo" title="logo"/>
								</a>
								
							</div>		
							<div class="pull-left">
								<p>Jobs : 120</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo2.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 121</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo3.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 122</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo4.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 123</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo5.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 124</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo6.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 125</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<a href="">
									<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo7.jpg" alt="logo" title="logo"/>
								</a>
								
							</div>		
							<div class="pull-left">
								<p>Jobs : 126</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo8.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 127</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo1.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 128</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo2.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 129</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo3.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 130</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo4.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 131</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo5.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 132</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="employe-box">
							<div class="image">
								<img class="img-responsive" src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/logo6.jpg" alt="logo" title="logo"/>
							</div>		
							<div class="pull-left">
								<p>Jobs : 133</p>
							</div>
							<div class="pull-right">
								<button type="button" class="rotate1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<!-- job end here -->



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

<!-- Mirrored from ocsolutions.co.in/html/jobportal/employers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:48 GMT -->
</html>