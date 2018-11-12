<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:23:33 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
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
<!-- style paper job -->
<link href="{{URL::to('public/JobPortal_Frontend/assets')}}/css/style_paper_job.css" rel="stylesheet" type="text/css"/>

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
					 <b style="font-size: 40px;">Newspapers Job Post</b>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- our-partner end here -->
				
				<div id="partners" class="owl-carousel">
					@foreach($pnews as $new)

					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image" style="height: 100px;">
							<img src="{{URL::to('public/admin/job/upload')}}/Logo/{{$new->paper_logo}}" class="img-responsive" alt="l1" title="" style="border-radius: 50%;max-width: 100%;max-height: 100%;object-fit: contain;" />
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
<!-- end slider
 -->
<!-- paper job -->
<div class="JobsByCntryCity gray jobLisitngPanel">
<div class="topBx">
</div>
<div class="btmBx">
	@foreach($posts as $post)
<div class="job-listing-block" id="jobs-append-box">
<div class="single-job-list-block">
<div class="lftBx">
<a target="_blank" href="{{url('/jobs/single-paperjob')}}/{{$post->id}}" class="linker">
<div class="link-inner">
<div class="compImage">
		
<img src="{{URL::to('public/admin/job/upload')}}/Logo/{{$post->logo->paper_logo}}" alt="img-army">
<!-- <div class="jLocation">
<img src="https://ikddata.ilmkidunya.com/images/jobs/jobs/ic-map-marker-sm-black.png" alt="ic-map-marker-sm-black" class="normal">
<img src="https://ikddata.ilmkidunya.com/images/jobs/jobs/ic-map-marker-sm-white.png" alt="ic-map-marker-sm-black" class="hovered" style="display:none;"> 
<span class="cityName">Peshawar</span></div> -->
</div>
<div class="desc">
<div class="jTitle">{{$post->paper_post_title}}</div>
<div class="jDesc"> <p>{{$post->post_description}}</p></div>

</div>
</div>
</a>
</div>
<div class="rgtBx">
<div class="jobPostingInfo">
	 <?php 
    $posted  = date_format($post->created_at,"d/m/y");
    $old_date_timestamp = strtotime($post->expired);
$new_date = date('d-m-y', $old_date_timestamp);
     // $expired  = date_format($post->expired,"d/m/y");
      // echo $new_date;
      // die();

	  ?>  
         
	
<div class="jPostedOn">Posted On<b class="green">{{$posted}}</b></div>
<div class="jLastDate">Last Date<b class="red">{{$new_date}}</b></div>
</div><div class="jobCounting"><div class="jobtotal"><b>{{$post->number_of_jobs}}</b>Vacancy</div>
<!-- <div class="jobFavorite"><input type="hidden" value="Jobs In Chip Training &amp; Consulting 23 Oct 2018">
	
<a onclick="makeJobFvrt(155203,this);">
<span class="imgJobFavrt"></span>Favorite</a></div> -->
</div>
<div class="jobAd">
<img style="width: 100%;" src="{{URL::to('public/admin/job/upload')}}/Ad/{{$post->paper_ad}}" alt="newsaper"></div>
</div>
<a target="_blank" href="/jobs/jobs-in-chip-training-consulting-23-oct-2018-155203.aspx" class="mobilink">
<div class="jShowMobo" style="display:none;">
<div class="mbjDesc">
<p>Communication Support Officer, Human Resource Officer</p>
</div>
<div class="jInfo">
	<span class="location"><img src="https://ikddata.ilmkidunya.com/images/jobs/jobs/ic-map-marker-sm-black.png" alt="ic-map-marker-sm-black" class="normal">
	</span>
	<span class="cityName">Peshawar</span>
	<span class="date-posted">23 Oct</span>
	<span class="last-date">Last date: 28 Oct</span>
</div>
</div>
</a>
</div>

</div>
@endforeach
</div>
</div>

<!-- end paper job -->
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
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:08 GMT -->
</html>
