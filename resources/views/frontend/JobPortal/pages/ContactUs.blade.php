<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:22 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Contact</title>
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
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- contact-content start here -->
					<div class="contact-content">
						<h1>Contact Us</h1>
						<ul class="list-inline">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="contact.html">Contact us</a>
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
				<div class="col-md-8 col-sm-8 col-xs-12">
					<!-- form start here -->
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-6">
										<label>Your Name</label>
										<input class="form-control" placeholder="Enter your name" id="input-name" value="" name="jobname" required="" type="text">
									</div>
									<div class="col-sm-6">
										<label>Your Email</label>
										<input class="form-control" id="input-email" placeholder="you@yourdomain.com" value="" name="email" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Subject</label>
										<input class="form-control" id="input-subject" placeholder="" value="" name="email" required="" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Message</label>
										<textarea class="form-control" id="input-enquiry" rows="10" name="enquiry" placeholder="" required=""></textarea>
									</div>
								</div>
								
								
								<div class="button">
									<button type="submit" value="Submit" class="btn btn-primary btnus">SEND MESSAGE</button>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- form end here -->
				</div>
				
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- detail start here -->
					<div class="detail col-md-12">
						<div class="border"></div>
						<div class="border1"></div>
						<ul class="list-unstyled">
							<li>
								<h5>Address</h5>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<a href="contact.html"><span>123 Main Street,Anytown,LDH 12345 INDIA</span></a>
							</li>
							<li>
								<h5>Phone</h5>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<a href="contact.html"><span>+1800-123-1234</span></a>
							</li>
							<li>
								<h5>Email</h5>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<a href="contact.html"><span>Support@jobportal.com</span>
								</a>
							</li>
							<li>
								<h5>Skype</h5>
								<i class="fa fa-skype" aria-hidden="true"></i>
								<a href="contact.html"><span>Jobs.2017</span></a>
							</li>
						</ul>
					</div>
					<!-- detail end here -->
					<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/support.jpg" class="img-responsive" alt="support" title="support">
				</div>
				
			</div>
		</div>
		
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219104.85983086875!2d75.71658808151895!3d30.90026973769041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1482266274532"></iframe>
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