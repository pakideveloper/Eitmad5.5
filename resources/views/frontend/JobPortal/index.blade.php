<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:23:33 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>JOB Portal</title>
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
@include('frontend/JobPortal/include/login')
	<!-- header end -->
<div class="page-content">
	@if(session('status'))
		<div class="alert alert-danger" style="margin-bottom: 0px; text-align: center;">
			{{session('status')}}
		</div>
	@endif
<!-- slider start here -->
	<div class="slideshow owl-carousel">
		<!-- <div class="item">
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
		</div> -->
		<div class="item">
			<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/job_slide.jpg" alt="slider" title="slider" class="img-responsive"/>
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
		<!-- <div class="item">
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
		</div> -->	
	</div>
<!-- slider end here -->


<!-- new featured job layout -->
<section class="catalog-grid">
      	<div class="container">
       	<h2 class="primary-color" style="text-align: center;">Feature Jobs</h2>
      
		
			<!-- <a href="{{'jobs'}}">

      		<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p1.jpg" alt="1"/>
      		</a> -->

       	<div class="border"></div>
          <div class="row">
          	<!--Tile-->
          	@foreach($jobs as $key=>$job)
          	@if($key<=3)
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<!-- <div class="badges">
                	<span class="sale"></span>
                </div> -->
              	<div class="price-label">Apply By: {{Carbon\Carbon::parse($job->apply_by)->format('d M,Y')}}</div>
              	<div class="image">
              	<a href="{{'jobs/candidate/dashboard'}}"><img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p1.jpg" alt="1"/></a>
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
							<h4>{{$job->job_title}}</h4>
							<ul class="list-inline">
								<li>
									
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>   {{$job->job_career_level}}</a>
									
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  {{$job->city->city_name}},{{$job->city->country->country_name}}</a>
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
						<div class="footer">
                  <div class="tools">
                  	<!-- <div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div> -->
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="{{url('jobs/single_job/')}}/{{$job->id}}"><span>View More</span><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <!--  <a class="wishlist-btn" href="{{url('jobs/single_job/')}}/{{$job->id}}">
                    	<div class="hover-state">View More</div>
                    	<i class="fa fa-plus"></i>
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
            @endif
            @endforeach
          </div>

          <div class="row">
          	<!--Tile-->
          	@foreach($jobs as $key=>$job)
          	@if($key>3)
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<!-- <div class="badges">
                	<span class="sale"></span>
                </div> -->
              	<div class="price-label">Apply By: {{Carbon\Carbon::parse($job->created_at)->format('d M,Y')}}</div>
              	<div class="image">
              	<a href="{{'jobs/candidate/dashboard'}}"><img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/p1.jpg" alt="1"/></a>
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
							<h4>   {{$job->job_title}}</h4>
							<ul class="list-inline">
								<li>
									@if($job->jobtype != null)
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>   {{$job->jobtype->job_type_name}}</a>
									@else
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>   {{$job->job_career_level}}</a>
									@endif
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>  {{$job->city->city_name}},{{$job->city->country->country_name}}</a>
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
						<div class="footer">
                  <div class="tools">
                  	<!-- <div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div> -->
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="{{url('jobs/single_job/')}}/{{$job->id}}"><span>View More</span><i class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <!--  <a class="wishlist-btn" href="{{url('jobs/single_job/')}}/{{$job->id}}">
                    	<div class="hover-state">View More</div>
                    	<i class="fa fa-plus"></i>
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
             @endif
            @endforeach
          </div>
        </div>
      </section>
<!-- end featured job layout -->
<!-- browse start here -->
	<div class="browse">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="browse-jobs">
				   	<h2 class="primary-color" style="text-align: center;">Browse Jobs</h2>
				</div>
				<!-- featured-jobs end here -->
				
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<span>Information Technology</span>
							</div>
						</a>
					</div>	
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-university" aria-hidden="true"></i>
								<span>Banking</span>
							</div>
						</a>
					</div>
				</div>
				
			    <div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
							<i class="fa fa-money" aria-hidden="true"></i>
								<span>Accounting</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
									<span>Sales & marketing</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-tachometer" aria-hidden="true"></i>
								<span>Digital & Creative</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
							<i class="fa fa-suitcase" aria-hidden="true"></i>
								<span>Management</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
								<i class="fa fa-gavel" aria-hidden="true"></i>
									<span>Legal Jobs</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.html">
							<div class="boxbor">
							<i class="fa fa-tags" aria-hidden="true"></i>
								<span>Retail</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- browse end here -->

<!-- testimonial start here -->
	<div id="testimonial">
		<div class="container">
			<div class="row">
				<!-- testimonial-jobs start here -->
				<div class="testimonial-jobs">
					<h2 class="primary-color" style="text-align: center;">Browse Jobs</h2>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- testimonial-jobs end here -->
				
				<div id="testimonials" class="col-md-12 col-sm-12 col-xs-12 owl-carousel">
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/pic-1.png" class="img-responsive" alt="pic-1" title="pic-1" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/pic-2.png" class="img-responsive" alt="pic-2" title="pic-2" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/pic-3.png" class="img-responsive" alt="pic-3" title="pic-3" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/pic-1.png" class="img-responsive" alt="pic-1" title="pic-1" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/pic-2.png" class="img-responsive" alt="pic-2" title="pic-2" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/pic-3.png" class="img-responsive" alt="pic-3" title="pic-3" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- testimonial end here -->

<!-- blog start here -->
	<div id="blog">
		<div class="container">
			<div class="row">
				<!-- latest-blog start here -->
				<div class="latest-blog">
					<h1>Latest Blog</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- latest-blog end here -->
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/b1.jpg" alt="b1" title="b1" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				
				
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/b2.jpg" alt="b2" title="b2" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				
			  
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/b3.jpg" alt="b3" title="b3" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
				
				
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- box start here -->
					<div class="box">
						<a href="blog.html">
							<img src="{{URL::to('public/JobPortal_Frontend/assets')}}/images/b4.jpg" alt="b4" title="b4" class="img-responsive" />
						</a>
						<div class="matter">
							<h1>Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</h1>
							<p>Aestibulum nec mauris sapien. Vestibulum ultricies quam sit amet pretium rutrum. Etiam tempus lacus in sem imperdiet ...</p>
							<a href="blog.html">Read more	<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<!-- box end here -->
				</div>
			</div>
		</div>
	</div>
<!-- blog end here -->





@include('frontend/JobPortal/include1/brand-crusal')

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
</div>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 10:24:08 GMT -->
</html>
