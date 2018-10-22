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
   
  
    @include('frontend.general.include.login-model')
  	@include('frontend.general.include.header')
    
    <!--Page Content-->
    <div class="page-content">
    
    	<!--Hero Slider-->
      <section class="hero-slider">
      	<div class="master-slider" id="hero-slider">
        
        	<!--Slide 1-->
        	 @foreach($slider as $Vslider)
          <div class="ms-slide" data-delay="7">
            <div class="overlay"></div>
            <img src="{{url::to('public/admin/upload/sliders')}}/{{$Vslider->image_name}}" data-src="{{url::to('public/admin/upload/sliders')}}/{{$Vslider->image_name}}" alt=""/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="top(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">{{$Vslider->title}}</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="back(500)" data-duration="700" data-delay="500" data-ease="easeOutQuad">{{$Vslider->description}}</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div>
          </div>
          @endforeach
        </div>
      </section><!--Hero Slider Close-->
    
    <div class="about page-content">
    	<!--About Info-->
      <section class="space-top space-bottom container" id="aboutus">
      	<center><h1>About us</h1></center>
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12"  style="text-align: center;">
          	<h3>Why we are cool</h3>
            <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </section><!--About Info Close-->
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

     
     <div class="container" id="contactus"><h2>Contact US</h2></div>
      <div class="row">
      <!--Google Map-->
      <section class="map container col-lg-6 col-md-6 col-sm-6 ">
      	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11365119.183662498!2d26.671722792891288!3d45.93754926598604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1403521777633" width="800" height="400" style="border:0"></iframe>
      </section>
      <section>
        <div class="col-lg-6 col-md-6 col-sm-6">
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
      </section><!--Google Map Close-->
      
      <!--Contacts-->

        	
    
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
      
  	@include('frontend.general.include.footer')    
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

    
  </body>
</html>
