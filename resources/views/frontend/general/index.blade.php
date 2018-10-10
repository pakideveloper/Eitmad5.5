<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:00:54 GMT -->
<head>
    <meta charset="utf-8">
    <title>EITMAD - Home</title>
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive HTML5 E-Commerce Template" />
		<meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
		<meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Master Slider Styles-->
    <link href="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/style/masterslider.css" rel="stylesheet" media="screen">
    <!--Styles-->
    <link href="{{URL::to('public/frontend/ecommerce/assets')}}/css/styles.css" rel="stylesheet" media="screen">
    <!--Color Scheme-->
    <link class="color-scheme" href="{{URL::to('public/frontend/ecommerce/assets')}}/css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Color Switcher-->
    <link href="{{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/modernizr.custom.js"></script>
    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="js/plugins/respond.js"></script>
    <![endif]-->
 
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
   
  
  	<!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <h2>Login or <a href="register.html">Register</a></h2>
            <p class="large">Use social accounts</p>
            <div class="social-login">
            	<a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
            	<a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
            	<a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
            </div>
          </div>
          <div class="modal-body">
          <form class="login-form">
            <div class="form-group group">
            	<label for="log-email">Email</label>
              <input type="email" class="form-control" name="log-email" id="log-email" placeholder="Enter your email" required>
              <a class="help-link" href="#">Forgot email?</a>
            </div>
            <div class="form-group group">
            	<label for="log-password">Password</label>
              <input type="text" class="form-control" name="log-password" id="log-password" placeholder="Enter your password" required>
              <a class="help-link" href="#">Forgot password?</a>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <input class="btn btn-success" type="submit" value="Login">
          </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Header-->
    <header data-offset-top="500" data-stuck="600"><!--data-offset-top is when header converts to small variant and data-stuck when it becomes visible. Values in px represent position of scroll from top. Make sure there is at least 100px between those two values for smooth animation-->
    
      <!--Search Form-->
      <form class="search-form closed" method="get" role="form" autocomplete="off">
      	<div class="container">
          <div class="close-search"><i class="icon-delete"></i></div>
            <div class="form-group">
              <label class="sr-only" for="search-hd">Search for procuct</label>
              <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Search for procuct">
              <button type="submit"><i class="icon-magnifier"></i></button>
          </div>
        </div>
      </form>
      
    	<!--Split Background-->
    	<div class="left-bg"></div>
    	<div class="right-bg"></div>
      
    	<div class="container">
      	<!-- <a class="logo" href="index.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/logo.png" alt="Bushido"/></a> -->
        <a class="logo" href="http://localhost/Eitmad5.5/home" style="font-size: 47px; top: 8px;
    left: 18px;"><!-- <img src="http://localhost/Eitmad5.5/public/frontend/ecommerce/assets/img/logo.png" alt="Bushido"/> --><span style="
    color: #4dfb4d;
">E</span><span style="
    color: #a772ff;
">i</span><span>t</span><span style="
    color: red;
">m</span><span style="
    color: yellow;
">a</span><span>d</span></a>
        
        <!--Language / Currency Switchers-->
       <!--  <ul class="switchers">
        	<li>$
            <ul class="dropdown">
              <li><a href="#">&euro;</a></li>
              <li><a href="#">$</a></li>
            </ul>
          </li>
        	<li>En
            <ul class="dropdown">
              <li><a href="#">En</a></li>
              <li><a href="#">Fr</a></li>
              <li><a href="#">Gr</a></li>
            </ul>
          </li>
        </ul> -->
      
      	<!--Mobile Menu Toggle-->
        <div class="menu-toggle"><i class="fa fa-list"></i></div>
        <div class="mobile-border"><span></span></div>
        
        <!--Main Menu-->
        <nav class="menu">
          <ul class="main">
          	<li class="has-submenu"><a href="index.html">Home<i class="fa fa-chevron-down"></i></a><!--Class "has-submenu" for proper highlighting and dropdown-->
            	<!-- <ul class="submenu">
              	<li><a href="index.html">Home - Slideshow</a></li>
              	<li><a href="home-fullscreen.html">Home - Fullscreen Slider</a></li>
              	<li><a href="home-showcase.html">Home - Product Showcase</a></li>
              	<li><a href="home-categories.html">Home - Categories Slider</a></li>
              	<li><a href="home-offers.html">Home - Special Offers</a></li>
              </ul> -->
            </li>
          	<!-- <li class="has-submenu"><a href="shop-filters-left-3cols.html">Shop<i class="fa fa-chevron-down"></i></a>
            	<ul class="submenu">
              	<li><a href="shop-filters-left-3cols.html">Shop - Filters Left 3 Cols</a></li>
              	<li><a href="shop-filters-left-2cols.html">Shop - Filters Left 2 Cols</a></li>
              	<li><a href="shop-filters-right-3cols.html">Shop - Filters Right 3 Cols</a></li>
              	<li><a href="shop-filters-right-2cols.html">Shop - Filters Right 2 Cols</a></li>
              	<li><a href="shop-no-filters-4cols.html">Shop - No Filters 4 Cols</a></li>
              	<li><a href="shop-no-filters-3cols.html">Shop - No Filters 3 Cols</a></li>
                <li><a href="shop-single-item-v1.html">Shop - Single Item Vers 1</a></li>
                <li><a href="shop-single-item-v2.html">Shop - Single Item Vers 2</a></li>
                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout Page</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
              </ul>
            </li> -->
            
            
            <li class="has-submenu"><a href="#aboutus">About Us<i class="fa fa-chevron-down"></i></a>
            	<!-- <ul class="submenu">
              	<li><a href="blog-sidebar-left.html">Blog - Sidebar Left</a></li>
              	<li><a href="blog-sidebar-right.html">Blog - Sidebar Right</a></li>
              	<li><a href="blog-single.html">Blog - Single Post</a></li>
              </ul> -->
            </li>
             <li class="has-submenu"><a href="#services">Services<i class="fa fa-chevron-down"></i></a>
            	<ul class="submenu">
              	<li><a href="blog-sidebar-left.html">Service 1</a></li>
              	<li><a href="blog-sidebar-right.html">Service 2</a></li>
              	<li><a href="blog-single.html">Service 1</a></li>
              	<li><a href="blog-sidebar-left.html">Service 1</a></li>
              	<li><a href="blog-sidebar-right.html">Service 1</a></li>
              	<li><a href="blog-single.html">Service 1</a></li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#testimonials">Testimonials<i class="fa fa-chevron-down"></i></a>
            	
            </li>
            <li class="has-submenu"><a href="#contactus">Contact Us<i class="fa fa-chevron-down"></i></a>
            	<!-- <ul class="submenu">
              	<li><a href="blog-sidebar-left.html">Blog - Sidebar Left</a></li>
              	<li><a href="blog-sidebar-right.html">Blog - Sidebar Right</a></li>
              	<li><a href="blog-single.html">Blog - Single Post</a></li>
              </ul> -->
            </li>
          	<!-- <li class="has-submenu"><a href="blog-sidebar-right.html">Blog<i class="fa fa-chevron-down"></i></a>
            	<ul class="submenu">
              	<li><a href="blog-sidebar-left.html">Blog - Sidebar Left</a></li>
              	<li><a href="blog-sidebar-right.html">Blog - Sidebar Right</a></li>
              	<li><a href="blog-single.html">Blog - Single Post</a></li>
              </ul>
            </li> -->
          	<!-- <li class="has-submenu"><a href="#">Pages<span class="label">NEW</span><i class="fa fa-chevron-down"></i></a>
            	<ul class="submenu">
              	<li><a href="register.html">Login / Registration</a></li>
                <li><a href="account-personal-info.html">Account: Personal Info<span class="label">NEW</span></a></li>
                <li><a href="account-addresses.html">Account: Addresses<span class="label">NEW</span></a></li>
                <li><a href="order-history.html">Orders History<span class="label">NEW</span></a></li>
                <li><a href="order-tracking.html">Order Tracking<span class="label">NEW</span></a></li>
                <li><a href="delivery-info.html">Delivery Info<span class="label">NEW</span></a></li>
              	<li><a href="about.html">About Us</a></li>
              	<li><a href="contacts.html">Contacts</a></li>
              	<li><a href="coming-soon.html">Coming Soon</a></li>
              	<li><a href="404.html">404 Page</a></li>
              	<li><a href="support.html">Support Page</a></li>
              	<li><a href="cs-page.html">Components &amp; Styles</a></li>
              </ul>
            </li> -->
          	<li class="hide-sm"><a href="#support">Support</a></li>
          </ul>
          <ul class="catalog">
          	<!-- <li class="has-submenu"><a href="shop-filters-left-3cols.html">Phones<i class="fa fa-chevron-down"></i></a>
            	<ul class="submenu">
              	<li><a href="#">Nokia</a></li>
              	<li class="has-submenu"><a href="#">iPhone</a>
                	<ul class="sub-submenu">
                    <li><a href="#">iPhone 4</a></li>
                    <li><a href="#">iPhone 4s</a></li>
                    <li><a href="#">iPhone 5c</a></li>
                    <li><a href="#">iPhone 5s</a></li>
                  </ul>
                </li>
              	<li><a href="#">HTC</a></li>
              	<li class="has-submenu"><a href="#">Samsung</a>
                	<ul class="sub-submenu">
                    <li><a href="#">Galaxy Note 3</a></li>
                    <li><a href="#">Galaxy S5</a></li>
                    <li><a href="#">Galaxy S3 Neo</a></li>
                    <li><a href="#">Galaxy Gear</a></li>
                    <li><a href="#">Galaxy S Duos 2</a></li>
                  </ul>
                </li>
              	<li><a href="#">BlackBerry</a></li>
                <li class="offer">
                	<div class="col-1">
                  	<p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="col-2">
                  	<img src="img/offers/menu-drodown-offer.jpg" alt="Special Offer"/>
                  	<a class="btn btn-block" href="#"><span>584$</span>Special offer</a>
                  </div>
                </li>
              </ul>
            </li> -->

          	<li><a href="{{url('/ecommerce')}}">E-Commerce Portal</a></li>
          	

          	<li><a href="{{ url('jobs') }}">Job Portal</a></li>
          	<li><a href="shop-filters-left-3cols.html">Educational Portal</a></li>
          	<!-- <li><a href="shop-filters-left-3cols.html">TV sets</a></li> -->
          </ul>
        </nav>
        
        <!--Toolbar-->
        <div class="toolbar group">
          <button class="search-btn btn-outlined-invert"><i class="icon-magnifier"></i></button>
          <div class="middle-btns">
            <a class="btn-outlined-invert" href="{{ url('/register') }}"><i class="icon-heart"></i> <span>Sign Up</span></a>
            @if (Auth::guest())
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i> <span>Login</span></a>
            @else
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i> <span style="text-transform: capitalize;">{{ Auth::user()->first_name }}</span></a>
            @endif
          </div>
         
        </div><!--Toolbar Close-->
      </div>
    </header><!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
    	<!--Hero Slider-->
      <section class="hero-slider">
      	<div class="master-slider" id="hero-slider">
        
        	<!--Slide 1-->
        	<div class="ms-slide" data-delay="7">
          	<div class="overlay"></div>
          	<img src="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/blank.gif" data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/hero/slideshow/slide_1.jpg" alt="Nikon D4S"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="top(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nikon D4S</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="back(500)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div>
          </div>
          
        	<!--Slide 2-->
        	<div class="ms-slide" data-delay="7">
            <span class="overlay"></span>
          	<img src="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/blank.gif" data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/hero/slideshow/slide_2.jpg" alt="Nest"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">Nest</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="bottom(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="rotatebottom(30|90,long,br,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1640$</span>Buy it now</a></div>
          </div>
          
        	<!--Slide 3-->
        	<div class="ms-slide" data-delay="7">
          	<div class="overlay"></div>
          	<img src="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/blank.gif" data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/hero/slideshow/slide_3.jpg" alt="3D Printer"/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">3D Printer</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="left(50,true)" data-duration="700" data-delay="500" data-ease="easeOutQuad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="left(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>2500$</span>Buy it now</a></div>
          </div>
          
        </div>
      </section><!--Hero Slider Close-->
    
    <div class="about page-content">
    	<!--About Info-->
      <section class="space-top space-bottom container" id="aboutus">
      	<h2>About us</h2>
        <div class="row">
        	<div class="col-lg-5 col-md-6 col-sm-6">
          	<h3>Why we are cool</h3>
            <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        	<div class="col-lg-6 col-lg-offset-1 col-md-6 col-sm-6">
            <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </section><!--About Info Close-->
      
      <!--Team-->
      <section class="team container">
      	<h3>Meet our team</h3>
      	<div class="row">
        	<!--Member-->
        	<div class="col-lg-3 col-md-3 col-sm-6">
          	<div class="member">
            	<div class="mask"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/about/team/davis.jpg" alt="Susanna Davis"/></div>
              <h4>Susanna Davis</h4>
              <h5>CEO, Founder</h5>
              <div class="social">
              	<a href="#"><i class="fa fa-twitter"></i></a>
              	<a href="#"><i class="fa fa-facebook-square"></i></a>
              	<a href="#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
        	<!--Member-->
        	<div class="col-lg-3 col-md-3 col-sm-6">
          	<div class="member">
            	<div class="mask"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/about/team/roe.jpg" alt="Alexander Roe"/></div>
              <h4>Alexander Roe</h4>
              <h5>CEO, Founder</h5>
              <div class="social">
              	<a href="#"><i class="fa fa-twitter"></i></a>
              	<a href="#"><i class="fa fa-facebook-square"></i></a>
              	<a href="#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
        	<!--Member-->
        	<div class="col-lg-3 col-md-3 col-sm-6">
          	<div class="member">
            	<div class="mask"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/about/team/doe.jpg" alt="Jonathan Doe"/></div>
              <h4>Jonathan Doe</h4>
              <h5>CEO, Founder</h5>
              <div class="social">
              	<a href="#"><i class="fa fa-twitter"></i></a>
              	<a href="#"><i class="fa fa-facebook-square"></i></a>
              	<a href="#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
        	<!--Member-->
        	<div class="col-lg-3 col-md-3 col-sm-6">
          	<div class="member">
            	<div class="mask"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/about/team/dirk.jpg" alt="Dexter Dirk"/></div>
              <h4>Dexter Dirk</h4>
              <h5>CEO, Founder</h5>
              <div class="social">
              	<a href="#"><i class="fa fa-twitter"></i></a>
              	<a href="#"><i class="fa fa-facebook-square"></i></a>
              	<a href="#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section><!--Team Close-->
    </div>
     
       <!--Technical Specifications-->
      <section class="gray-bg tech-specs" id="services">
      	<div class="container">
        	<h2>Services</h2>
          <div class="row">
          	
            <!--Column 1-->
          	<div class="col-lg-6 col-md-6 col-sm-6">
            	<!--Item-->
            	<div class="item">
              	<div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-expand"></i><span>Fit</span></div>
                  <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">Adjustable nosepads and durable frame fits any face.
  Extra nosepads in two sizes.</p></div>
                </div>
              </div>
              <!--Item-->
            	<div class="item">
              	<div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-tv-monitor"></i><span>Display</span></div>
                  <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">High resolution display is the equivalent of a 25 inch high definition screen from eight feet away.</p></div>
                </div>
              </div>
             	
            </div>
            
            <!--Column 2-->
          	<div class="col-lg-6 col-md-6 col-sm-6">
            	<!--Item-->
            	<div class="item">
              	<div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-expand"></i><span>Fit</span></div>
                  <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">Adjustable nosepads and durable frame fits any face.
  Extra nosepads in two sizes.</p></div>
                </div>
              </div>
              <!--Item-->
            	<div class="item">
              	<div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-tv-monitor"></i><span>Display</span></div>
                  <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">High resolution display is the equivalent of a 25 inch high definition screen from eight feet away.</p></div>
                </div>
              </div>
             	
             	
            	
            </div>
          </div>
        </div>
      </section><!--Technical Specifications Close-->

       <!--Testimonials Widget-->
      <section class="testmns-widget" id="testimonials">
      	<div class="container">
          <h2 class="light-color">What people say</h2>
          <div class="row">
            <div id="testimonials-slider" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#testimonials-slider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-slider" data-slide-to="1"></li>
                <li data-target="#testimonials-slider" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-4">
                        <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/people/1.png" width="192" height="192" alt="Dexter Dirk"/>
                      </div>
                      <div class="col-lg-8 col-md-9 col-sm-8">
                        <blockquote>
                          <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                          <footer class="text-light">Someone famous in Source Title</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-4">
                        <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/people/2.png" width="192" height="192" alt="Richard Roe"/>
                      </div>
                      <div class="col-lg-8 col-md-9 col-sm-8">
                        <blockquote>
                          <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                          <footer class="text-light">Someone famous in Source Title</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-4">
                        <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/people/3.png" width="192" height="192" alt="Jonathan Doe"/>
                      </div>
                      <div class="col-lg-8 col-md-9 col-sm-8">
                        <blockquote>
                          <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                          <footer class="text-light">Someone famous in Source Title</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Testimonials Widget Close-->

     
     <div class="container" id="contactus"><h2>Contacts</h2></div>
      
      <!--Google Map-->
      <section class="map container">
      	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11365119.183662498!2d26.671722792891288!3d45.93754926598604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1403521777633" width="800" height="400" style="border:0"></iframe>
      </section><!--Google Map Close-->
      
      <!--Contacts-->
      <section class="container">
      	<div class="row">
          <!--Contact Info-->
        	<div class="col-lg-5 col-lg-offset-1 col-md-5 col-sm-5">
            <h3>Contact info</h3>
            <div class="cont-info-widget">
            <ul>
              <li><i class="fa fa-building"></i>4120 Lenox Avenue, New York,<br/>10035 76 Saint Nicholas Avenue</li>
              <li><a href="#"><i class="fa fa-envelope"></i>mail@bushido.com</a></li>
              <li><a href="#"><i class="fa fa-support"></i>support@bushido.com</a></li>
              <li><i class="fa fa-phone"></i>+48 543765234</li>
              <li><i class="fa fa-mobile"></i>+48 555 234 54 34</li>
            </ul>
            </div>
          </div>
        	<div class="col-lg-5 col-md-7 col-sm-7">
          	<h3>Drop us a line</h3>
          	<form class="contact-form ajax-form" method="post">
            	<div class="form-group">
              	<label class="sr-only" for="cf-name">Name</label>
              	<input type="text" class="form-control" name="name" id="cf-name" placeholder="Enter your name">
              </div>
            	<div class="form-group">
              	<label class="sr-only" for="cf-email">Email</label>
              	<input type="email" class="form-control" name="email" id="cf-email" placeholder="Enter email">
              </div>
            	<div class="form-group">
              	<label class="sr-only" for="cf-message">Message</label>
                <textarea class="form-control" name="message" id="cf-message" rows="5" placeholder="Your message"></textarea>
              </div>
              <!-- Validation Response -->
              <div class="response-holder"></div>
              <!-- Response End -->
              <input class="btn btn-primary" type="submit" value="Send message">
            </form>
          </div>
        </div>
      </section><!--Contacts Close-->
    
      <!--Support-->
      <section class="support" id="support">
      	<div class="container">
        	<div class="row">
          
          	<!--Left Column-->
          	<div class="col-lg-8 col-md-8">
            	<h2 class="title">Support/ FAQ</h2>
              <div class="row space-top">
              	<div class="clo-lg-6 col-md-6 col-sm-6 space-bottom">
                	<h4 class="light-weight uppercase">Privacy Policy</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                  <a class="btn btn-success btn-sm" href="#">Read more</a>
                </div>
              	<div class="clo-lg-6 col-md-6 col-sm-6 space-bottom">
                	<h4 class="light-weight uppercase">Shipping Agreement</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis.</p>
                </div>
              </div>
              
              <!--Acccordion-->
              <div class="row">
                <div class="accordion panel-group" id="accordion">
                  <div class="panel">
                    <div class="panel-heading active">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i></i>FAQ Collapsible section 01</a>
                    </div>
                    <div id="collapseOne" class="collapse in">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table.
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i></i>FAQ Collapsible section 02</a>
                    </div>
                    <div id="collapseTwo" class="collapse">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-heading">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i></i>FAQ Collapsible section 03</a>
                    </div>
                    <div id="collapseThree" class="collapse">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>               
              </div><!--Acccordion Close-->
            </div>
            
           
          </div>
        </div>
      </section><!--Support Close-->
      
     
      
     
      
    </div><!--Page Content Close-->
    
    <!--Sticky Buttons-->
    <div class="sticky-btns">
    	<form class="quick-contact ajax-form" method="post" name="quick-contact">
      	<h3>Contact us</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
        <div class="form-group">
        	<label for="qc-name">Full name</label>
          <input class="form-control input-sm" type="text" name="name" id="qc-name" placeholder="Enter full name">
        </div>
        <div class="form-group">
        	<label for="qc-email">Email</label>
          <input class="form-control input-sm" type="email" name="email" id="qc-email" placeholder="Enter email">
        </div>
        <div class="form-group">
        	<label for="qc-message">Your message</label>
          <textarea class="form-control input-sm" name="message" id="qc-message" placeholder="Enter your message"></textarea>
        </div>
        <!-- Validation Response -->
        <div class="response-holder"></div>
        <!-- Response End -->
        <input class="btn btn-success btn-sm btn-block" type="submit" value="Send">
      </form>
    	<span id="qcf-btn"><i class="fa fa-envelope"></i></span>
      <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
    </div><!--Sticky Buttons Close-->
    
    <!--Subscription Widget-->
    <section class="subscr-widget">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-8 col-sm-8">
            <h2 class="light-color">Subscribe to our news</h2>
            
            <!--Mail Chimp Subscription Form-->
            <form class="subscr-form" role="form" action="http://8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=d704057a31" target="_blank" method="post" autocomplete="off">
              <div class="form-group">
                <label class="sr-only" for="subscr-name">Enter name</label>
                <input type="text" class="form-control" name="FNAME" id="subscr-name" placeholder="Enter name" required>
                <button class="subscr-next"><i class="icon-arrow-right"></i></button>
              </div>
              <div class="form-group fff" style="display: none">
                <label class="sr-only" for="subscr-email">Enter email</label>
                <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Enter email" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_d704057a31" tabindex="-1" value=""></div>
                <button type="submit" id="subscr-submit"><i class="icon-check"></i></button>
              </div>
            </form>
            <!--Mail Chimp Subscription Form Close-->
            <p class="p-style2">Please fill the field before continuing</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1">
            <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
        </div>
      </div>
    </section><!--Subscription Widget Close-->
      
  	<!--Footer-->
    <footer class="footer">
    	<div class="container">
      	<div class="row">
        	<div class="col-lg-5 col-md-5 col-sm-5">
          	<div class="info">
              <a class="logo" href="index.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/logo.png" alt="Bushido"/></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              <div class="social">
              	<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-tumblr-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-pinterest-square"></i></a>
              	<a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
          	<h2>Latest news</h2>
            <ul class="list-unstyled">
            	<li>25 May <a href="#">Nemo enim ipsam voluptatem</a></li>
            	<li>01 May <a href="#">Neque porro quisquam est</a></li>
            	<li>16 Apr <a href="#">Lorem ipsum dolor sit amet</a></li>
            	<li>10 Jan <a href="#">Sed ut perspiciatis unde</a></li>
            </ul>
          </div>
          <div class="contacts col-lg-3 col-md-3 col-sm-3">
          	<h2>Contacts</h2>
            <p class="p-style3">
            	4120 Lenox Avenue, New York, NY,<br/>
              10035 76 Saint Nicholas Avenue<br/>
              <a href="mailto:mail@bushido.com">mail@bushido.com</a><br/>
              +48 543765234<br/>
              +48 555 234 54 34<br/>
            </p>
          </div>
        </div>
        <div class="copyright">
        	<div class="row">
          	<div class="col-lg-7 col-md-7 col-sm-7">
              <p>&copy; 2014 BUSHIDO. All Rights Reserved. Designed by <a href="http://8guild.com/" target="_blank">8Guild</a></p>
            </div>
          	<div class="col-lg-5 col-md-5 col-sm-5">
            	<div class="payment">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/visa.png" alt="Visa"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/paypal.png" alt="PayPal"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/master.png" alt="Master Card"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/discover.png" alt="Discover"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/amazon.png" alt="Amazon"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer><!--Footer Close-->
    
    <!--Javascript (jQuery) Libraries and Plugins-->
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-1.11.1.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery.easing.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/bootstrap.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/smoothscroll.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.validate.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/icheck.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.placeholder.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.stellar.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.touchSwipe.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.shuffle.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/lightGallery.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/masterslider.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/mailer/mailer.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/scripts.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.js"></script>

    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:02:15 GMT -->
</html>
