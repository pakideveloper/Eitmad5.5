<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/shop-single-item-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    @include('frontend/ecommerce/include/login')<!-- /.modal -->

    <!--Header-->
    @include('frontend/ecommerce/include/header')<!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="shop-filters-left-3cols.html">Shop - filters left 3 cols</a></li>
        <li>Shop - single item v1</li>
      </ol><!--Breadcrumbs Close-->
       @if (session('status'))
      <!--Shopping Cart Message-->
      <section class="cart-message visible">
      	<i class="fa fa-check-square"></i>
        <p class="p-style3">"{{ session('status') }}" </p>
        <a class="btn-outlined-invert btn-success btn-sm" href="shopping-cart.html">View cart</a>
      </section><!--Shopping Cart Message Close-->
      @endif
      <!--Catalog Single Item-->
      <section class="catalog-single">
      	<div class="container">
          <div class="row">
          
          	<!--Product Gallery-->
            <div class="col-lg-6 col-md-6">
            	<div class="prod-gal master-slider" id="prod-gal">
              	<!--Slide1-->
                @foreach($product->files as $file)
                <div class="ms-slide">
                	<img src="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/blank.gif" data-src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$file->product_file_name}}" alt="Lorem ipsum"/>
                  <img class="ms-thumb" src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$file->product_file_name}}" alt="thumb" />
                </div>
                @endforeach
              	
              	
              </div>
            </div>
            
            <!--Product Description-->
            <div class="col-lg-6 col-md-6">
              <h1>{{$product->product_name}}</h1>
              <div class="rate">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
              </div>
              <div class="old-price">Rs. {{$product->product_price}}</div>
              <div class="price">Rs. {{$product->product_discounted_price}}</div>
              <div class="buttons group">
                <div class="qnt-count">
                  <a class="incr-btn" href="#">-</a>
                  <input id="quantity" class="form-control" type="text" value="2">
                  <a class="incr-btn" href="#">+</a>
                </div>
                <a class="btn btn-primary btn-sm"  href="{{url('ecommerce/product/addToCart')}}/{{\Crypt::encrypt($product->id)}}"><i class="icon-shopping-cart"></i>Add to cart</a>
                <input type="hidden" id="product_id" value="{{\Crypt::encrypt($product->id)}}" name="product_id">
                <a class="btn btn-success btn-sm" href="#"><i class="icon-heart"></i>Add to wishlist</a>
              </div>
              <p class="p-style2">{{$product->product_description}}</p>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-5">
                  <h3>Tell friedns</h3>
                  <div class="social-links">
                    <a href="#"><i class="fa fa-tumblr-square"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square"></i></a>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-7">
                  <h3>Tags</h3>
                  <div class="tags">
                    <a href="#">Nikon, </a>
                    <a href="#">camera, </a>
                    <a href="#">hd video</a>
                  </div>
                </div>
              </div>
              <div class="promo-labels">
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-truck"></i>Free delivery</div>
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-space-shuttle"></i>Deliver even on Mars</div>
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-shield"></i>Safe Buy</div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Catalog Single Item Close-->
      
      <!--Tabs Widget-->
      <section class="tabs-widget">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#specs" data-toggle="tab">Tech specs</a></li>
          <li><a href="#descr" data-toggle="tab">Description</a></li>
          <li><a href="#review" data-toggle="tab">Reviews</a></li>
        </ul>
        <div class="tab-content">
        	<!--Tab1 (Tech Specs)-->
          <div class="tab-pane fade in active" id="specs">
          	<div class="container">
            	<div class="row">
                <section class="tech-specs">
                  <div class="container">
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
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-camera-1"></i><span>Camera</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">Photos - 5 MP<br/>Videos - 720p</p></div>
                          </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-headphones"></i><span>Audio</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">Bone Conduction Transducer</p></div>
                          </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-share"></i><span>Connectivity</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">Wifi - 802.11b/g<br/>Bluetooth</p></div>
                          </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-accelerator"></i><span>Storage</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">12 GB of usable memory, synced with Google cloud storage. 16 GB Flash total.</p></div>
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
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-camera-1"></i><span>Camera</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">Photos - 5 MP<br/>Videos - 720p</p></div>
                          </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-headphones"></i><span>Audio</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">Bone Conduction Transducer</p></div>
                          </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-share"></i><span>Connectivity</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">Wifi - 802.11b/g<br/>Bluetooth</p></div>
                          </div>
                        </div>
                        <!--Item-->
                        <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-accelerator"></i><span>Storage</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">12 GB of usable memory, synced with Google cloud storage. 16 GB Flash total.</p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
          
          <!--Tab2 (Description)-->
          <div class="tab-pane fade" id="descr">
          	<div class="container">
            	<div class="row">
              	<div class="col-lg-4 col-md-5 col-sm-5">
                  <img class="center-block" src="{{URL::to('public/frontend/ecommerce/assets')}}/img/posts-widget/2.jpg" alt="Description"/>
                </div>
              	<div class="col-lg-8 col-md-7 col-sm-7">
                	<p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                  <div class="row">
                  	<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                    	<h4>Unordered list</h4>
                      <ul>
                        <li>List item</li>
                        <li><a href="#">List item link</a></li>
                        <li>List item</li>
                      </ul>
                    </div>
                  	<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                    	<h4>Ordered list</h4>
                      <ol>
                        <li>List item</li>
                        <li><a href="#">List item link</a></li>
                        <li>List item</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--Tab3 (Reviews)-->
          <div class="tab-pane fade" id="review">
          	<div class="container">
            	<div class="row">
              	<!--Disqus Comments Plugin-->
              	<div class="col-lg-10 col-lg-offset-1">
                   <div id="disqus_thread"></div>
                    <script type="text/javascript">
                      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                      var disqus_shortname = '8guild'; // required: replace example with your forum shortname
              
                      /* * * DON'T EDIT BELOW THIS LINE * * */
                      (function() {
                          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                          dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                      })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    <a href="http://disqus.com/" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Tabs Widget Close-->
      
      <!--Special Offer-->
      <section class="special-offer">
      	<div class="container">
          <h2>Special offer</h2>
          <div class="row">
          	<!--Tile-->
          	<div class="col-lg-3 col-md-3 col-sm-3">
            	<div class="tile">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/offers/special-offer-1.jpg" alt="Special Offer"/></a>
                <div class="footer"><a href="#">Nikon D5300</a></div>
              </div>
            </div>
            <!--Plus-->
            <div class="col-lg-1 col-md-1 col-sm-1">
            	<div class="sign">+</div>
            </div>
          	<!--Tile-->
          	<div class="col-lg-3 col-md-3 col-sm-3">
            	<div class="tile">
                <div class="price-label">715,00 $</div>
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/offers/special-offer-2.jpg" alt="Special Offer"/></a>
                <div class="footer"><a href="#">Nikkor AF-S</a></div>
              </div>
            </div>
            <!--Equal-->
            <div class="col-lg-1 col-md-1 col-sm-1">
            	<div class="sign">=</div>
            </div>
            <!--Offer-->
            <div class="col-lg-4 col-md-4 col-sm-4">
            	<div class="offer">
              	<h3 class="light-color">save</h3>
                <h4 class="text-primary">100,00 $</h4>
                <a class="btn btn-success" href="#">Buy for 1330$</a>
              </div>
            </div>
          </div>
        </div>
      </section><!--Special Offer Close-->
      
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
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.nouislider.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/mailer/mailer.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/scripts.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.js"></script>

    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/shop-single-item-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:23 GMT -->
</html>
