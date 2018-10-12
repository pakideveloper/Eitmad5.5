<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:23 GMT -->
<head>
    <meta charset="utf-8">
    <title>Eitmad - Checkout</title>
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive HTML5 E-Commerce Template" />
		<meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
		<meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="{{URL::to('public/frontend/ecommerce/assets')}}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{URL::to('public/frontend/ecommerce/assets')}}/favicon.ico" type="image/x-icon">
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
      <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/respond.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
    <div class="color-switcher group animated">
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
    </div><!--Color Switcher End-->
  
  	<!--Login Modal-->
    @include('frontend/ecommerce/include/login')
    <!-- /.modal -->

    <!--Header-->
     @include('frontend/ecommerce/include/header')<!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="{{URL::to('public/frontend/ecommerce/assets')}}/index.html">Home</a></li>
        <li><a href="{{URL::to('public/frontend/ecommerce/assets')}}/shop-filters-left-3cols.html">Shop</a></li>
        <li>Checkout</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Checkout-->
      <section class="checkout">
      	<div class="container">
        	
          <!--Expandable Panels-->
        	<div class="row">
            <div class="col-lg-12">
            	<h2>Checkout</h2>
              <!--Hidden Panels-->
              @if(Auth::guest())
              <a class="panel-toggle" href="{{url('/login')}}"><i></i>Returning customer? Click here to login</a>@endif
              <div class="row">
              	<div class="hidden-panel" id="login">
                	<div class="col-lg-12">
                  	<div class="row">
                    	<div class="col-lg-7 col-md-7 col-sm-7">
                        <form class="login-form" method="post">
                          <div class="form-group group">
                            <label for="log-email2">Email</label>
                            <input type="email" class="form-control" name="log-email2" id="log-email2" placeholder="Enter your email" required>
                            <a class="help-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Forgot email?</a>
                          </div>
                          <div class="form-group group">
                            <label for="log-password2">Password</label>
                            <input type="text" class="form-control" name="log-password2" id="log-password2" placeholder="Enter your password" required>
                            <a class="help-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Forgot password?</a>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me</label>
                          </div>
                          <input class="btn btn-success" type="submit" value="Login">
                        </form>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5">
                      	<label>Use social accounts</label>
                        <div class="social-login">
                          <a class="facebook" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-facebook-square"></i></a>
                          <a class="google" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-google-plus-square"></i></a>
                          <a class="twitter" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-twitter-square"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <a class="panel-toggle" href="#coupon"><i></i>Have a coupon? Click here to enter your code</a>
              <div class="row">
              	<div class="col-lg-5">
                  <div class="hidden-panel" id="coupon">
                    <form name="coupon-code" method="post">
                      <div class="form-group">
                        <label class="sr-only" for="coupon-code">Enter coupon code</label>
                        <input type="text" class="form-control" id="coupon-code" name="coupon-code" placeholder="Enter coupon code">
                      </div>
                      <input type="submit" class="btn btn-primary btn-sm btn-block" name="apply-coupon" value="Apply coupon">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="payment-method">
                  <div class="radio light">
                    <label><input type="radio" name="payment" id="payment01" value="bt" checked> Direct Bank Transfer</label>
                  </div>
                  <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                  <div class="radio light">
                    <label><input type="radio" name="payment" id="payment02"> Online Payment </label>
                  </div>
                  <div class="radio light">
                    <label><input type="radio" name="payment" id="payment03"> Cash On Delivery 
                      <!-- <span class="pp-label"></span> -->
                    </label>
                  </div>
                </div>


          
          <!--Checkout Form-->
          <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
<input type='hidden' name='sid' value='901394952' />
<input type='hidden' name='mode' value='2CO' />
<input type='hidden' name='li_0_type' value='product' />
<input type='hidden' name='li_0_name' value='invoice123' />
<input type='hidden' name='li_0_price' value='25.99' />
<input type='hidden' name='card_holder_name' value='Checkout Shopper' />
<input type='hidden' name='street_address' value='123 Test Address' />
<input type='hidden' name='street_address2' value='Suite 200' />
<input type='hidden' name='city' value='Columbus' />
<input type='hidden' name='state' value='OH' />
<input type='hidden' name='zip' value='43228' />
<input type='hidden' name='country' value='USA' />
<input type='hidden' name='email' value='example@2co.com' />
<input type='hidden' name='phone' value='614-921-2450' />
<input type="hidden" name="_token" value='{{ csrf_token() }}' />
<input class="btn btn-success btn-block" name='submit' type='submit' value='Finalize Your Order' />
</form>
          
      </section><!--Checkout Close-->
      
      <!--Tabs Widget-->
      <section class="tabs-widget">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="{{URL::to('public/frontend/ecommerce/assets')}}/#bestsel" data-toggle="tab">Bestseller items</a></li>
          <li><a href="{{URL::to('public/frontend/ecommerce/assets')}}/#onsale" data-toggle="tab">Items on sale</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="bestsel">
          	<div class="container">
            	<div class="row">
              	<div class="col-lg-7 col-md-7 col-sm-7">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>X-MAS LIGHT IPHONE LENS<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/1.jpg" alt="1"/>
                  </a>
                </div>
              	<div class="col-lg-5 col-md-5 col-sm-5">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Hedadset for iPhone<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/2.jpg" alt="2"/>
                  </a>
                </div>
              </div>
              <div class="row">
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/3.jpg" alt="3"/>
                  </a>
                </div>
              	<div class="col-lg-5 col-md-5 col-sm-5">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/4.jpg" alt="4"/>
                  </a>
                </div>
              	<div class="col-lg-3 col-md-3 col-sm-3">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/5.jpg" alt="5"/>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="onsale">
          	<div class="container">
            	<div class="row">
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/6.jpg" alt="6"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/7.jpg" alt="7"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/8.jpg" alt="8"/>
                  </a>
                </div>
              </div>
            	<div class="row">
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/9.jpg" alt="9"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/10.jpg" alt="10"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/11.jpg" alt="11"/>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Tabs Widget Close-->
      
      <!--Brands Carousel Widget-->
      <section class="brand-carousel">
      	<div class="container">
        	<h2>Brands in our shop</h2>
          <div class="inner">
          	<a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/jquery.png" alt="jQuery"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/wp.png" alt="WordPress"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/woo.png" alt="WooCommerce"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/android.png" alt="Android"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/macgasm.png" alt="Macgasm"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/dropbox.png" alt="Dropbox"/></a>
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
      
  	<!--Footer-->
    @include('frontend/ecommerce/include/footer')
    <!--Footer Close-->
    
    <!--Javascript (jQuery) Libraries and Plugins-->
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-1.11.1.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/libs/jquery.easing.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/bootstrap.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/smoothscroll.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.validate.min.js"></script>
		<!-- <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/icheck.min.js"></script>
 -->
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.placeholder.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.stellar.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.touchSwipe.min.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.shuffle.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/lightGallery.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/masterslider.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.nouislider.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/mailer/mailer.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/scripts.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.js"></script>
<script src="https://sandbox.2checkout.com/static/checkout/javascript/direct.min.js"></script>

<script type="text/javascript">
  

    $('#ship-to-diff-address').change(function () {
             $('#shippingdetails').toggle();
                
            
        });


    $panelToggle.click(function(e){
    $(this).toggleClass('active');
    var $target = $(this).attr('href');
    $($target).toggleClass('expanded');
    e.preventDefault();
  });

    var myCallback = function(data) {
        console.log(JSON.stringify(data));
        // Example callback data
        // {"event_type":"checkout_loaded"}
        // {"event_type":"checkout_closed"}
    };
     (function() {
         inline_2Checkout.subscribe('checkout_loaded', myCallback);
         inline_2Checkout.subscribe('checkout_closed', myCallback);
     }());
  
</script>
  




    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:23 GMT -->
</html>
