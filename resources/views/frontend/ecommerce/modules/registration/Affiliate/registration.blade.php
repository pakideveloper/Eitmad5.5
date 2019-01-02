<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:02:43 GMT -->
<head>
    <meta charset="utf-8">
    <title>Eitmad - Registration</title>
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
    <!--Color Switcher End-->
  
  	@include('frontend.general.include.login-model')
    @include('frontend.ecommerce.include.header')
    
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
        <a class="facebook" href="{{url('/auth/facebook')}}"><i class="fa fa-facebook-square"></i></a>
        <a class="google" href="{{url('/auth/google')}}"><i class="fa fa-google-plus-square"></i></a>
        <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
        <a class="" href="{{route('register')}}" style="float: right;
    font-size: medium;">Become a User?</a>
        </div>
        <div class="row">
          <!--Login-->
          
          <!--Registration-->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <form class="registr-form" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
<div class="form-group group{{ $errors->has('first_name') ? ' has-error' : '' }} col-lg-16 col-md-6 col-sm-12">
                <label for="log-fname">First_Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your First_Name" value="{{ old('first_name') }}" required autofocus>
                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} group  col-md-6 col-sm-12">
                <label for="log-lname">Last_Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last_Name" value="{{ old('last_name') }}" required>
                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
              </div>


                     
              <div class="form-group group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12 col-sm-12">
                <label for="rf-email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}" required >
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6 col-sm-12">
                <label for="rf-password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="{{ old('password') }}" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group group col-md-6 col-sm-12">
                <label for="rf-password-repeat">Repeat password</label>
                <input type="password" class="form-control" name="password_confirmation" id="rf-password-repeat" placeholder="Repeat password" required>
              </div>
              <div class="checkbox col-md-12 col-sm-12">
                <label><input type="checkbox" name="remember"> I have read and agree with the terms</label>
              </div>
              <center><input class="btn btn-success " type="submit" value="Register"></center>
            </form>
          </div>
        </div>
      </section><!--Login / Register Close-->
      
      <!--Brands Carousel Widget-->
      @include('frontend/general/include/brand-crusal')<!--Brands Carousel Close-->
      
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
