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
    <!-- <div class="color-switcher group animated">
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
    </div> --><!--Color Switcher End-->
  
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
        <a class="facebook" href="{{ url('/auth/facebook') }}"><i class="fa fa-facebook-square"></i></a>
        <a class="google" href="{{ url('/auth/google') }}"><i class="fa fa-google-plus-square"></i></a>
        <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
        <div class="row">
          <!--Login-->
          @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
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
