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
					 <b style="font-size: 40px;">Newspaper Post</b>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				 @include('frontend/JobPortal/include/brand-crusal')
				
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="" class="form-horizontal" method="post" action="{{url('jobs/paperjobs')}}" name="myform" enctype="multipart/form-data">
                	
             {{ csrf_field()}}
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="categories">Category:</label>
                      <div class="col-sm-8">
                        <!-- <input type="text" class="form-control" name="categories" id="categories" placeholder="e.g, Information Technology"> -->

                        <select class="form-control" id="cat" name = "cat">
                        	<option value="">Select Job Category</option>
                        	@foreach($jobcategories as $jobcategory)
					        <option value="{{$jobcategory->id}}">{{$jobcategory->job_category_name}}</option>
					        @endforeach
					       </select>
                      </div>
                    </div>
                </div>
                    <!-- <div class="form-group">
                      <label class="col-sm-4 control-label" for="dialogAct">Dialog Act</label>
                       <div class="col-sm-8">
                      <input type="text" class="form-control" name="dialogAct" id="dialogAct" placeholder="e.g. INFO">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="slot">Slot</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="slot" id="slot" placeholder="e.g. alphaNumeric">
                      </div>
                    </div>
                </div> -->
                <div class="col-md-6">
                    <div class="form-group ">
                      <label class="col-sm-4 control-label" for="Date">Date:</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="Date" name="date" placeholder="e.g. 01/10/2015">
                      </div>
                    </div>
                    <!-- <div class="form-group">ss
                      <label class="col-sm-4 control-label" for="toDate">To</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="toDate" placeholder="e.g. 02/10/2015">
                      </div>
                    </div> -->
                    
              </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="float: right;">Search</button>
                    </div>
              </form>
            </div>
        </div>
        
        
    </div>


<hr>


	<div class="container">
	<div class="table-responsive">
	<table class="table" style="width: 100%">
		<thead>
		<tr>
			
				<th>Posted</th>
				<th>Post Title</th>
				<th>Newspaper</th>
				<th>Category</th>
				<th>Last Date</th>
				<th>Apply</th>
			
		</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
			<?php 
    $posted  = date_format($post->created_at,"d/m/y");
    $old_date_timestamp = strtotime($post->expired);
$new_date = date('d-m-y', $old_date_timestamp);
     // $expired  = date_format($post->expired,"d/m/y");
      // echo $new_date;
      // die();

	  ?>  
			<tr>
				<td>{{$posted}}</td>
				<td><a href="{{url('/jobs/single-paperjob')}}/{{$post->id}}" style="color:#f2992e"> {{$post->paper_post_title}}</a></td>
				<td>{{$post->logo->paper_name}}</td>
				<td>{{$post->category->job_category_name}}</td>
				<td>{{$new_date}}</td>
				<td><a href="{{url('/jobs/single-paperjob')}}/{{$post->id}}" style="color:#f2992e">Details</a></td>
			</tr>

			@endforeach
		</tbody>


	</table>
	 
	</div>
</div>
<!-- end slider
 -->
<!-- paper job -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script>
      $(document).ready(function(){

    $('.customer-logos').slick({

        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

 
    </script> 
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:08 GMT -->
</html>
