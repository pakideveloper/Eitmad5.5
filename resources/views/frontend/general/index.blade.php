<!doctype html>
<html class="no-js" lang="en">
   
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- title -->
        <title>EITMAD</title>
        <meta name="description" content="lgdescription" />
        <meta name="keywords" content="lgkeywords" />
        <meta name="author" content="lgauthor">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/icon/favicon.png">
        <!-- animation -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/bootstrap.min.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/font-awesome.min.css" />
        <!-- themify-icons -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/themify-icons.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/owl.transitions.css" />
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/owl.carousel.css" /> 
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/magnific-popup.css" /> 
        <!-- base -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/base.css" /> 
        <!-- elements -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/elements.css" />
        <!-- responsive -->
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/responsive.css" />
        <link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/button.css"/>
		<link rel="stylesheet" href="{{URL::to('public/frontend/general/assets')}}/css/hover_effect.css"/>
        
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    </head>
    <body>
        <header class="header-black" id="header-section2">
             
            <nav class="navbar tz-header-bg no-margin alt-font shrink-transparent-header-dark header-border-light position-fixed dark-header">
                <div class="container navigation-menu">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-3 col-sm-4 col-xs-9">
                            <a href="#home" class="inner-link"><img alt="" src="{{URL::to('public/frontend/general/assets')}}/images/Eit_logo.png" style="margin-top:9px" data-img-size="(W)163px X (H)39px"></a>
                        </div>	
                        <!-- end logo -->
                        <div class="col-md-9 col-sm-8 col-xs-3 position-inherit">
                            <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pull-right">
                                <ul class="nav navbar-nav">
                                    <li class="propClone"><a class="inner-link text-white" style="text-align:center;" href="{{url('/ecommerce')}}">E Commerce Portal</a></li>
                                    <li class="propClone"><a class="inner-link text-white" href="{{url('/jobs')}}">Job Portal</a></li>
                                    <li class="propClone"><a class="inner-link text-white" href="#menu">Education Portal</a></li>
                                    <li class="nav-button propClone sm-no-margin-tb float-left btn-medium sm-no-border"><a href="#reservation" class="inner-link btn btn-small propClone bg-golden text-black border-radius-0 font-weight-500 sm-padding-nav-btn">Registration</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav> 
            <!-- end nav -->
        </header>
        <section class="position-relative cover-background tz-builder-bg-image border-none hero-style9 bg-img-one" id="home" data-img-size="(W)1920px X (H)961px" style="height: 657px; background:linear-gradient(rgba(35,31,41,0.7), rgba(35,31,41,0.7)), url('{{URL::to('public/frontend/general/assets')}}/images/bg-image/hero-bg40.jpg')">
            <div class="container one-sixth-screen xs-one-third-screen position-relative">
                <div class="row">
                    <div class="slider-typography text-center xs-position-absolute">
                        <div class="slider-text-middle-main">
                            <div class="slider">
                                 <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 215px;">
                                  <h2 style="color: #fff; font-size:21px;">EITMAD provides the <span style="color: #52b381">E Commerce, Job and Education </span> Portal Services</h2>
                                 <h3 style="color: #fff; font-size: 16px;"> EItmad </h3>
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                      <div href="#" class="hovereffect">
                                    <a href="{{url('/ecommerce')}}">   <img class="img-responsive"  src="{{URL::to('public/frontend/general/assets')}}/images/Ecom.png" alt=""></a>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4">
                                      <div href="" class="hovereffect">
                                    <a href="{{url('/jobs')}}">   <img class="img-responsive"  src="{{URL::to('public/frontend/general/assets')}}/images/job.png" alt=""></a>
                                  </div>  
                              </div>
                              <div class="col-md-4 col-sm-4 col-xs-4">
                                      <div  class="hovereffect">
                                    <a href="">   <img class="img-responsive"  src="{{URL::to('public/frontend/general/assets')}}/images/education.png" alt=""></a>
                                  </div>
                               </div>
                        </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/jquery.appear.js"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/wow.min.js"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/owl.carousel.min.js"></script>        
        <!-- images loaded -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/imagesloaded.pkgd.min.js"></script>
        <!-- isotope -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/jquery.isotope.min.js"></script> 
        <!-- magnific popup -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/jquery.magnific-popup.min.js"></script>
        <!-- navigation -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/jquery.nav.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/equalize.min.js"></script>
        <!-- fit videos -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/jquery.fitvids.js"></script>
        <!-- number counter -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/jquery.countTo.js"></script>
        <!-- time counter  -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/counter.js"></script>
        <!-- twitter Fetcher  -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/twitterFetcher_min.js"></script>
        <!-- main -->
        <script type="text/javascript" src="{{URL::to('public/frontend/general/assets')}}/js/main.js"></script>
        <!-- purchase -->
        <link rel="stylesheet" href="../incs/css/purchase.css" />
        <script type="text/javascript" src="../incs/js/purchase.js"></script>
    </body>

<!-- Mirrored from www.themezaa.com/html/leadgen/demo/cafe/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 11:09:17 GMT -->
</html>
