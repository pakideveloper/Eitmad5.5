
<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:00:54 GMT -->
<head>
    <meta charset="utf-8">
    <title>Eitmad</title>
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
      <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/respond.js"></script>
    <![endif]-->
 
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
    <div class="color-switcher group animated">
    	<div class="toggle"><i class="fa fa-cog"></i></div>
    	<div class="color">
      	<a class="current" style="background-image:url({{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/img/default.png);" href="#" data-color="default"></a>
        <span>#2ba8db<br/>#a3c756</span>
      </div>
    	<div class="color">
      	<a style="background-image:url({{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/img/scheme2.png);" href="#" data-color="scheme2"></a>
        <span>#a1b0ca<br/>#e7807f</span>
      </div>
    	<div class="color">
      	<a style="background-image:url({{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/img/scheme3.png);" href="#" data-color="scheme3"></a>
        <span>#4bb5c1<br/>#bfa995</span>
      </div>
    	<div class="color">
      	<a style="background-image:url({{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/img/scheme4.png);" href="#" data-color="scheme4"></a>
        <span>#73cbbe<br/>#c7b07b</span>
      </div>
    </div><!--Color Switcher End-->
  
  	<!--Login Modal-->
    @include('frontend/ecommerce/include/login')
      <!-- /.modal -->

    <!--Header-->
    @include('frontend/ecommerce/include/header')
    <!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
    	<!--Hero Slider-->
      <section class="hero-slider">
      	<div class="master-slider" id="hero-slider">
        
        	<!--Slide 1-->
          @foreach($mainslider as $Vmainslider)
        	<div class="ms-slide" data-delay="7">
          	<div class="overlay"></div>
          	<img src="{{url::to('public/admin/upload/mainsliders')}}/{{$Vmainslider->image_name}}" data-src="{{url::to('public/admin/upload/mainsliders')}}/{{$Vmainslider->image_name}}" alt=""/>
            <h2 style="width: 456px; left: 110px; top: 110px;" class="light-color ms-layer" data-effect="top(50,true)" data-duration="700" data-delay="250" data-ease="easeOutQuad">{{$Vmainslider->title}}</h2>
            <p style="width: 456px; left: 110px; top: 210px;" class="light-color ms-layer" data-effect="back(500)" data-duration="700" data-delay="500" data-ease="easeOutQuad">{{$Vmainslider->description}}</p>
            <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div>
          </div>
          @endforeach
        	<!--Slide 2-->
        	<div class="ms-slide" data-delay="7">
            <span class="overlay"></span>
          	<img src="{{URL::to('public/frontend/ecommerce/assets')}}//masterslider/blank.gif" data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/hero/slideshow/slide_2.jpg" alt="Nest"/>
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
    
    	<!--Categories-->
      <section class="cat-tiles">
      	<div class="container">
        	<h2>Browse categories</h2>
        	<div class="row">
          	<!--Category-->
           <?php
                                 
                                 $categories=App\Product_Category::all();
                                 ?>
           @foreach($categories as $category)
          	<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
               
            	<a href="#">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/categories/1.jpg" alt="1"/>
                <p>{{$category->category_name}}</p>
              </a>
            </div>
            @endforeach
          	<!--Category-->
          	<!-- <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
            	<a href="#">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/categories/2.jpg" alt="2"/>
                <p>Category name</p>
              </a>
            </div>
          	
          	<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
            	<a href="#">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/categories/3.jpg" alt="3"/>
                <p>Category name</p>
              </a>
            </div>
          	
          	<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
            	<a href="#">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/categories/4.jpg" alt="4"/>
                <p>Category name</p>
              </a>
            </div>
          	
          	<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
            	<a href="#">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/categories/5.jpg" alt="5"/>
                <p>Category name</p>
              </a>
            </div>
          	
          	<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
            	<a href="#">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/categories/6.jpg" alt="5"/>
                <p>Category name</p>
              </a>
            </div> -->
          </div>
        </div>
      </section><!--Categories Close-->
      
      <!--Catalog Grid-->
      <section class="catalog-grid">
      	<div class="container">
        	<h2 class="primary-color">Catalog picks</h2>
          <div class="row">
          	<!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="badges">
                	<span class="sale"></span>
                </div>
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/1.jpg" alt="1"/></a>
                <div class="footer">
                	<a href="#">Nikon D5300</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="badges">
                  <span class="out"></span>
                </div>
              	<div class="price-label">715,00 $</div>
                <div class="price-label old-price">920,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/2.jpg" alt="2"/></a>
                <div class="footer">
                	<a href="#">Nikon Coolpix</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="badges">
                  <span class="best-seller"></span>
                </div>
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/3.jpg" alt="3"/></a>
                <div class="footer">
                	<a href="#">Nikon WP-N3</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/4.jpg" alt="4"/></a>
                <div class="footer">
                	<a href="#">Nikkor 10-30 VR</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          	<!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
                <div class="price-label old-price">920,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/5.jpg" alt="5"/></a>
                <div class="footer">
                	<a href="#">Nikon WU 1b</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/6.jpg" alt="6"/></a>
                <div class="footer">
                	<a href="#">Nikon V3</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/7.jpg" alt="7"/></a>
                <div class="footer">
                	<a href="#">Nikon J4</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">715,00 $</div>
              	<a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/catalog/tiles/8.jpg" alt="8"/></a>
                <div class="footer">
                	<a href="#">Nikkor AF-S</a>
                  <span>by Pirate3d</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <a class="wishlist-btn" href="#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Catalog Grid Close-->
      
      <!--Tabs Widget-->
      <section class="tabs-widget">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#bestsel" data-toggle="tab">Bestseller items</a></li>
          <li><a href="#onsale" data-toggle="tab">Items on sale</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="bestsel">
          	<div class="container">
            	<div class="row">
              	<div class="col-lg-7 col-md-7 col-sm-7">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>X-MAS LIGHT IPHONE LENS<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/1.jpg" alt="1"/>
                  </a>
                </div>
              	<div class="col-lg-5 col-md-5 col-sm-5">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Hedadset for iPhone<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/2.jpg" alt="2"/>
                  </a>
                </div>
              </div>
              <div class="row">
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/3.jpg" alt="3"/>
                  </a>
                </div>
              	<div class="col-lg-5 col-md-5 col-sm-5">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/4.jpg" alt="4"/>
                  </a>
                </div>
              	<div class="col-lg-3 col-md-3 col-sm-3">
                	<a class="media-link" href="#">
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
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/6.jpg" alt="6"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/7.jpg" alt="7"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/8.jpg" alt="8"/>
                  </a>
                </div>
              </div>
            	<div class="row">
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/9.jpg" alt="9"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/10.jpg" alt="10"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
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
    
      <!--Posts/Twitter Widget-->
      <section class="posts-widget">
        <div class="tw-bg"></div>
        <div class="container">
          <div class="row">
            <div class="latest-posts col-lg-8 col-md-8">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="extra-bold">Latests posts</h2>
                  <a class="btn btn-success btn-block" href="#">To blog</a>
                </div>
                <div class="col-lg-9">
                  <!--Post-->
                  <div class="post row">
                    <div class="col-lg-6 col-sm-6">
                      <a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/posts-widget/1.jpg" alt="1"/></a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <h3><a href="#">Another Title</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="author"><i class="fa fa-user"></i><a href="#">By Bedismo</a></div>
                        <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (34)</a></div>
                    </div>
                  </div><!--Post End-->
                  <!--Post-->
                  <div class="post row">
                    <div class="col-lg-6 col-sm-6">
                      <a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/posts-widget/2.jpg" alt="2"/></a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                      <h3><a href="#">Awesome Title</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="author"><i class="fa fa-user"></i><a href="#">By Jeddah</a></div>
                        <div class="comments"><i class="fa fa-comment"></i><a href="#">Comments (101)</a></div>
                    </div>
                  </div><!--Post End-->
                </div>
              </div>
            </div>
            <div class="twitter-feed col-lg-4 col-md-4">
              <a class="tw-follow" href="https://twitter.com/8Guild" target="_blank">
                <div class="button">Follow us<i class="fa fa-twitter"></i></div>
                <h2 class="extra-bold">On Twitter <i class="fa fa-twitter"></i></h2>
              </a>
              <!--Tweet-->
              <div class="tweet">
                <a href="#">@Bedismo</a>
                <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                <div class="group">
                  <div class="actions">
                    <a href="#">Reply</a>
                    <a href="#">Retweet</a>
                    <a href="#">Favorite</a>
                  </div>
                  <span class="date">5 Mar 2014</span>
                </div>
              </div><!--Tweet Close-->
              <!--Tweet-->
              <div class="tweet">
                <a href="#">@Bedismo</a>
                <p class="p-style3">Uberly impressed with the AMAZING support I constantly get from awesome!!!</p>
                <div class="group">
                  <div class="actions">
                    <a href="#">Reply</a>
                    <a href="#">Retweet</a>
                    <a href="#">Favorite</a>
                  </div>
                  <span class="date">5 Mar 2014</span>
                </div>
              </div><!--Tweet Close-->
            </div>
          </div>
        </div>
      </section>
      
      <!--Gallery Widget-->
      <section class="gray-bg gallery-widget">
      	<div class="container">
        	<h2>Product gallery</h2>
          <div class="filters">
            <a class="active" href="#" data-group="all">All</a>
            <a href="#" data-group="camera">Camera</a>
            <a href="#" data-group="flash">Flash</a>
            <a href="#" data-group="lenses">Lenses</a>
            <a href="#" data-group="video">Video</a>
          </div>
          <div class="gallery-grid">
            <!--Item-->
            <div class="gallery-item" data-groups='["camera"]' data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/1.jpg">
              <a href="img/gallery-widget/1.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/th_1.jpg" alt="1"/>
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["camera"]' data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/2.jpg">
              <a href="img/gallery-widget/2.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/th_2.jpg" alt="2"/>
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["video"]' data-src="https://www.youtube.com/watch?v=hdEAWW7tZSA">
              <a href="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                <div class="overlay"><span><i class="icon-music-play"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/th_3.jpg" alt="3"/>
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["lenses"]' data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/4.jpg">
              <a href="img/gallery-widget/4.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/th_4.jpg" alt="4"/>
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["flash"]' data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/5.jpg">
              <a href="img/gallery-widget/5.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/th_5.jpg" alt="5"/>
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item" data-groups='["flash"]' data-src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/6.jpg">
              <a href="img/gallery-widget/6.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/gallery-widget/th_6.jpg" alt="6"/>
              </a>
            </div>
          </div>
        </div>
      </section><!--Gallery Widget Close-->
      
      <!--Brands Carousel Widget-->
      <section class="brand-carousel">
      	<div class="container">
        	<h2>Brands in our shop</h2>
          <div class="inner">
          	<a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/jquery.png" alt="jQuery"/></a>
            <a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/wp.png" alt="WordPress"/></a>
            <a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/woo.png" alt="WooCommerce"/></a>
            <a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/android.png" alt="Android"/></a>
            <a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/macgasm.png" alt="Macgasm"/></a>
            <a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/dropbox.png" alt="Dropbox"/></a>
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
