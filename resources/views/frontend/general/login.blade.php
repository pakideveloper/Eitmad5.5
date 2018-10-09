<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:02:43 GMT -->
<head>
    <meta charset="utf-8">
    <title>Bushido - HTML5 E-Commerce Template</title>
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
    <link href="{{url::to('public/frontend/ecommerce/assets')}}/css/styles.css" rel="stylesheet" media="screen">
    <!--Color Scheme-->
    <link class="color-scheme" href="{{url::to('public/frontend/ecommerce/assets')}}/css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Color Switcher-->
    <link href="{{url::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/libs/modernizr.custom.js"></script>
    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="js/plugins/respond.js"></script>
    <![endif]-->
 
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
    <div class="color-switcher group animated">
    	<div class="toggle"><i class="fa fa-cog"></i></div>
    	<div class="color">
      	<a class="current" style="background-image:url(public/Ecommerce_Frontend/assets/color-switcher/img/default.png);" href="#" data-color="default"></a>
        <span>#2ba8db<br/>#a3c756</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme2.png);" href="#" data-color="scheme2"></a>
        <span>#a1b0ca<br/>#e7807f</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme3.png);" href="#" data-color="scheme3"></a>
        <span>#4bb5c1<br/>#bfa995</span>
      </div>
    	<div class="color">
      	<a style="background-image:url(color-switcher/img/scheme4.png);" href="#" data-color="scheme4"></a>
        <span>#73cbbe<br/>#c7b07b</span>
      </div>
    </div><!--Color Switcher End-->
  
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
      	<a class="logo" href="index.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/logo.png" alt="Bushido"/></a>
        
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
          	<li><a href="{{ url('ecommerce') }}">E-Commerce Portal</a></li>
            <li><a href="{{ url('jobportal') }}">Job Portal</a></li>
            <li><a href="shop-filters-left-3cols.html">Educational Portal</a></li>
          	<!-- <li><a href="shop-filters-left-3cols.html">TV sets</a></li> -->
          </ul>
        </nav>
        
        <!--Toolbar-->
        <div class="toolbar group">
          <button class="search-btn btn-outlined-invert"><i class="icon-magnifier"></i></button>
          <div class="middle-btns">
            <a class="btn-outlined-invert" href="{{ url('/register') }}"><i class="icon-heart"></i> <span>Sign Up</span></a>
            
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i> <span>Login</span></a>
          </div>
         
        </div><!--Toolbar Close-->
      </div>
    </header><!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Login/ register</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Login / Register-->
      <section class="log-reg container">
       <h2>Login/ register</h2>
       <p class="large">Use social accounts</p>
       <div class="social-login">
        <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
        <a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
        <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
        <div class="row">
          <!--Login-->
          <div class="col-lg-5 col-md-5 col-sm-5">
            <form method="POST" action="{{ route('login') }}" class="login-form">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} group>
                <label for="log-email2">Email</label>
                <input type="email" class="form-control" name="email" id="log-email2" placeholder="Enter your email" required value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <a class="help-link" href="#">Forgot email?</a>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} group">
                <label for="log-password2">Password</label>
                <input type="password" class="form-control" name="password" id="log-password2" placeholder="Enter your password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <a class="help-link" href="#">Forgot password?</a>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
              </div>
              <input class="btn btn-success" type="submit" value="Login">
            </form>
          </div>
          <!--Registration-->
          
        </div>
      </section><!--Login / Register Close-->
      
      <!--Brands Carousel Widget-->
      <section class="brand-carousel">
        <div class="container">
          <h2>Brands in our shop</h2>
          <div class="inner">
            <a class="item" href="#"><img src="{{url::to('public/frontend/ecommerce/assets')}}/img/brands/jquery.png" alt="jQuery"/></a>
            <a class="item" href="#"><img src="{{url::to('public/frontend/ecommerce/assets')}}/img/brands/wp.png" alt="WordPress"/></a>
            <a class="item" href="#"><img src="{{url::to('public/frontend/ecommerce/assets')}}/img/brands/woo.png" alt="WooCommerce"/></a>
            <a class="item" href="#"><img src="{{url::to('public/frontend/ecommerce/assets')}}/img/brands/android.png" alt="Android"/></a>
            <a class="item" href="#"><img src="{{url::to('public/frontend/ecommerce/assets')}}/img/brands/macgasm.png" alt="Macgasm"/></a>
            <a class="item" href="#"><img src="{{url::to('public/frontend/ecommerce/assets')}}/img/brands/dropbox.png" alt="Dropbox"/></a>
          </div>
        </div>
      </section><!--Brands Carousel Close-->
      
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
      
    @include('frontend/ecommerce/include/footer')
    <!--Javascript (jQuery) Libraries and Plugins-->
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-1.11.1.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/libs/jquery.easing.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/bootstrap.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/smoothscroll.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.validate.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/icheck.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.placeholder.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.stellar.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.touchSwipe.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.shuffle.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/lightGallery.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/masterslider.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.nouislider.min.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/mailer/mailer.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/js/scripts.js"></script>
    <script src="{{url::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.js"></script>
    

    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:02:15 GMT -->
</html>
