<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:25 GMT -->
<head>
    <meta charset="utf-8">
    <title>Eitmad - About</title>
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive HTML5 E-Commerce Template" />
		<meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
		<meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="{{URL::to('public/frontend/ecommerce/assets')}}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{URL::to('public/frontend/ecommerce/assets')}}/favicon.ico" type="image/x-icon">
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
      <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/respond.js"></script>
    <![endif]-->
 
  </head>

  <!--Body-->
  <body class="parallax"><!--Add this class if you have elements on the page with parallax backgrounds-->
  
  	<!--Color Switcher-->
    <!-- <div class="color-switcher group animated">
    	<div class="toggle"><i class="fa fa-cog"></i></div>
    	<div class="color">
      	<a class="current" style="background-image:url(color-switcher/img/default.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="default"></a>
        <span>#2ba8db<br/>#a3c756</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme2.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="scheme2"></a>
        <span>#a1b0ca<br/>#e7807f</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme3.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="scheme3"></a>
        <span>#4bb5c1<br/>#bfa995</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme4.png);" href="{{URL::to('public/frontend/ecommerce/assets')}}/#" data-color="scheme4"></a>
        <span>#73cbbe<br/>#c7b07b</span>
      </div>
    </div> --><!--Color Switcher End-->
  
  	<!--Login Modal-->
    @include('frontend/ecommerce/include/login')<!-- /.modal -->

    <!--Header-->
 @include('frontend/ecommerce/include/header')<!--Header Close-->
    
    <!--Page Content-->
    <div class="about page-content">
    
    	<!--Hero Static-->
      <section class="hero-static">
      	<div class="overlay"></div>
      	<div style="background-image: url({{URL::to('public/frontend/ecommerce/assets')}}/img/about/about_bg.jpg);" class="bg-image" data-stellar-background-ratio="0.5"></div>
        <div class="content">
        	<div class="inner">
          	<h1>Awesome team.<br/><span>Awesome shop.</span></h1>
          </div>
        </div>
      </section><!--Hero Static Close-->
      
      <!--About Info-->
      <section class="space-top space-bottom container">
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
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-twitter"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-facebook-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
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
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-twitter"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-facebook-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
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
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-twitter"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-facebook-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
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
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-twitter"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-facebook-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-pinterest-square"></i></a>
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/mailto:mail@mail.com"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section><!--Team Close-->
       <!--Brands Carousel Widget-->
      @include('frontend/ecommerce/include/brand-crusal')<!--Brands Carousel Close-->
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
    <!--Subscription Widget Close-->
      
  	<!--Footer-->
     @include('frontend/ecommerce/include/footer')<!--Footer Close-->
    
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

<!-- Mirrored from template.8guild.com/bushido/v1.4/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:39 GMT -->
</html>
