<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:23:33 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Bootstrap stylesheet -->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<!-- style paper job -->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/style_paper_job.css" rel="stylesheet" type="text/css"/>
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/listing.css" rel="stylesheet" type="text/css"/>
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/listings-details.css" rel="stylesheet" type="text/css"/>
<link href="{{URL::to('public/JobPortal_Frontend/social_share')}}/css/font/fontello/css/fontello.css" rel="stylesheet" type="text/css"/>

 <!-- End style paper job -->
<!-- Header link -->
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
<!-- end header link -->


</head>
<style>
.mySlides {display:none;}
</style>
<body>
	<!-- header start -->
@include('frontend/JobPortal/include/jobheader1')
	<!-- header end -->

<!-- slider start here -->
	<div class="slideshow owl-carousel">
		<div class="item">
			<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/slider-1.jpg" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">All Category</option>
								<option value="0">Category 1</option>
								<option value="0">Category 2</option>
								<option value="0">Category 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Select Location</option>
								<option value="0">Location 1</option>
								<option value="0">Location 2</option>
								<option value="0">Location 3</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.html'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
<!-- slider end here -->
<!-- slider
 -->

 <div id="partner">
		<div class="container">
			<div class="row">
				<!-- our-partner start here -->
				<div class="our-partner">
					 <b style="font-size: 40px;">Newspaper Post</b>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- our-partner end here -->
				<div style="margin-bottom: 5%;"><h2><b style="color: #f98a00;">Newspaper Brands</b></h2></div>
				<div id="partners" class="owl-carousel">

					@foreach($pnews as $new)

					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image" style="height: 100px;" >
							<img src="{{URL::to('public/admin/job/upload')}}/Logo/{{$new->paper_logo}}"  class="img-responsive" alt="l1" title="" style="border-radius: 50%;max-width: 100%;max-height: 100%;object-fit: contain;" />
						</div>

						<span  style="margin-left: 85px"> 10 Jobs </span>
					
					</div>
					@endforeach
					<!-- <div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/l2.jpg" class="img-responsive" alt="l2" title="l2" />
						</div>
						<span  style="margin-left: 85px"> 11 Jobs </span>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/l3.jpg" class="img-responsive" alt="l3" title="l3" />
						</div>
						<span  style="margin-left: 85px"> 12 Jobs </span>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/l4.jpg" class="img-responsive" alt="l4" title="l4" />
						</div>
						<span  style="margin-left: 85px"> 13 Jobs </span>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/l5.jpg" class="img-responsive" alt="l5" title="l5" />
						</div>
						<span  style="margin-left: 85px"> 14 Jobs </span>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/l2.jpg" class="img-responsive" alt="l1" title="l1" />
						</div>
						<span  style="margin-left: 85px"> 15 Jobs </span>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/l2.jpg" class="img-responsive" alt="l2" title="l2" />
						</div>
						<span  style="margin-left: 85px"> 16 Jobs </span>
					</div> -->
				</div>
			</div>
		</div>
	</div>
<!-- end slider -->
<!-- Single Paper Job -->
<div style="margin-bottom: 5%;">
<center>
	<h2 style="color: #f98a00;"><b>Newspaper Advertisement</b></h2>
</center>
</div>
<div style="margin-top: 5%;">
	
</div>


  <div id="inner-page-wrapper">

  					<div class="w3-content w3-display-container">
  <img class="mySlides" src="{{URL::to('public/admin/job')}}/upload/Ad/{{$posts->paper_ad}}" style="width:100%;height: auto;">
  <img class="mySlides" src="img_lights.jpg" style="width:100%">
  <img class="mySlides" src="img_mountains.jpg" style="width:100%">
  <img class="mySlides" src="img_forest.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" style="left: -1%;">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="right: -1%;">&#10095;</button>
</div>




                    <div class="listings-details-wrap" data-aios-staggered-parent="true" data-aios-animation-offset="0" data-aios-animation-reset="false">

                        <div class="container">
                        
										
						
						
						
                            
                            <div class="listings-details-left">
                            	<h3 style="color: #f98a00;"><b>Post Title:</b></h3>
                            	<span style="font-weight: 600;font-size: 25px;">{{$posts->paper_post_title}}</span>
                                <!-- <h4 data-aios-reveal="true" data-aios-animation="fadeInLeft" data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.3"></h4> -->
                                
                                <!-- <div style=""> -->
										
						
						
						<!-- </div> -->

                                <div class="ld-text-wrap" data-aios-reveal="true" data-aios-animation="fadeInUp" data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.3">

                                    <!-- <strong> IT Manr</strong> -->
                                    <h3 style="color: #f98a00;"><b>Post Description:</b></h3>

                                    <p style="font-weight: 600;font-size: 25px;">
                                       <!-- We are looking for an IT manager to be responsible and accountable for the smooth running of our computer systems within the limits of requirements, specifications, costs and timelines. You will supervise the implementation and maintenance of our company’s computing needs.

                                       The successful candidate will have improved skills, a proven professional experience and a detailed knowledge of industry’s best practice processes. -->
                                       {{$posts->post_description}}
                                    </p>
                                    <br>
                                    <?php 
    $posted  = date_format($posts->created_at,"d-m-y");
    $old_date_timestamp = strtotime($posts->expired);
$new_date = date('d-m-y', $old_date_timestamp);
     // $expired  = date_format($post->expired,"d/m/y");
      // echo $new_date;
      // die();

	  ?>  
                                <span ><b style="color: #f98a00;">Posted Date:</b><p style="font-weight: 600;font-size: 25px;"> {{$posted}}</p></span>
                                <br>
                                <span ><b style="color: #f98a00;">Expire Date:</b> <p style="font-weight: 600;font-size: 25px;">{{$new_date}}</p></span>
                                </div>
                                <!--social share buttons start-->
                <hr />
    <div class="inline-share">
      <span class="share" style="color: #f98a00;"><b>Share  :</b></span>
    </div>
  <hr/>
   <!--social share buttons end-->

                            </div>
                        </div>
<!-- <div style="background-image: url({{URL::to('public/JobPortal_Frontend/assets')}}/images/news.jpg)"></div> -->

                    </div>
<!-- <div id="bottom-slider-wrapper" data-aios-reveal="true" data-aios-animation="fadeInUp" data-aios-animation-delay="0s" data-aios-animation-reset="false" data-aios-animation-offset="0.25">

                        <div class="listings-main-slide-holder">

                            <div class="listings-details-main-slides">
                                <div class="listings-photo-entry"> -->
                                	
                               <!--  </div>
                                
                            </div>
                    </div>
       </div> -->
<!-- End Single Paper JoB -->


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

<!-- Additional -->
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


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:08 GMT -->
</html>
