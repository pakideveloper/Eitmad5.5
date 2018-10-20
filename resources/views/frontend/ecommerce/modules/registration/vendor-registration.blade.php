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
    <style type="text/css">
      .center{
        margin-right: auto;
        margin-left: auto;
        display: table;
      }
    </style>
 
  </head>

  <!--Body-->
  <body>
  
    <!--Color Switcher-->
    <div class="color-switcher group animated">
      <div class="toggle"><i class="fa fa-cog"></i></div>
      <div class="color">
        <a class="current" style="background-image:url(color-switcher/img/default.png);" href="#" data-color="default"></a>
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

    @include('frontend/ecommerce/include/header')
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Register/vendor</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Login / Register-->
      <section class="log-reg container">
       <h2 class="center">Become a Seller</h2>
       <!-- <p class="large">Use social accounts</p> -->
       <!-- <div class="social-login">
        <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
        <a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
        <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
        </div> -->
        <div class="row">
          
          <!--Registration-->
          <div class="col-lg-3 ">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 center">
            <form method="post" class="" action="{{route("register")}}">
              {{ csrf_field() }}
              <div class="form-group group">
                <label for="log-fname">First_Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your First_Name" required>
              </div>
              <div class="form-group group">
                <label for="log-lname">Last_Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last_Name" required>
              </div>
              
              <div class="form-group group">
                <label for="rf-email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
              </div>
              <div class="form-group group">
                <label for="rf-password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
              </div>
              <div class="form-group group">
                <label for="rf-password-repeat">Repeat password</label>
                <input type="password" class="form-control" name="password-repeat" id="rf-password-repeat" placeholder="Repeat password" required>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> I have read and agree with the terms</label>
              </div>
              <input class="btn btn-success" type="submit" value="Register">
            </form>
          </div>
          <div class="col-lg-3 ">
          </div>
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

<!-- Mirrored from template.8guild.com/bushido/v1.4/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:02:44 GMT -->
</html>
