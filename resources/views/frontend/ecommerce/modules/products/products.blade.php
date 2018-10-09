<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/shop-filters-left-3cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Aug 2018 12:46:14 GMT -->
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
    <link href="{{URL::to('public/frontend/ecommerce/assets')}}/css/styles.css" rel="stylesheet" media="screen">
    <!--Color Scheme-->
    <link class="color-scheme" href="css/colors/color-default.css" rel="stylesheet" media="screen">
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
    @include('frontend/ecommerce/include/login')
    <!-- /.modal -->

    <!--Header-->
    @include('frontend/ecommerce/include/header')
    <!--Header Close-->
    
    <!--Filters Modal-->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button></div>
          <div class="modal-body">
            <!--Here goes filters dynamically pasted by jQuery-->
          </div>
        </div>
      </div>
    </div>
    
    <!--Filters Toggle-->
    <div class="filter-toggle" data-toggle="modal" data-target="#filterModal"><i class="fa fa-filter"></i></div>
    
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Shop - filters left 3 cols</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Catalog Grid-->
      <section class="catalog-grid">
      	<div class="container">
          <h2 class="with-sorting">Filters left 3 columns</h2>
          <div class="sorting">
            <a href="#">Sort by name</a>
            <a href="#">Sort by price</a>
          </div>
          <div class="subnav">
          	<a href="#">iPhone cases</a>
            <a href="#">iPad cases</a>
          </div>
          <div class="row">
          
            <!--Filters-->
          	<div class="filters-mobile col-lg-3 col-md-3 col-sm-4">
            	<div class="shop-filters">
              	
                <!--Price Section-->
                <section class="filter-section">
                	<h3>Filter by price</h3>
                  <form method="get" name="price-filters">
                  	<span class="clear" id="clearPrice" >Clear price</span>
                    <div class="price-btns">
                      <button class="btn btn-success btn-sm" value="below 50$">below 50$</button><br/>
                      <button class="btn btn-success btn-sm disabled" value="50$-100$">50$-100$</button><br/>
                      <button class="btn btn-success btn-sm" value="100$-300$">100$-300$</button><br/>
                      <button class="btn btn-success btn-sm" value="300$-1000$">300$-1000$</button>
                    </div>
                    <div class="price-slider">
                    	<div id="price-range"></div>
                      <div class="values group">
                      	<!--data-min-val represent minimal price and data-max-val maximum price respectively in pricing slider range; value="" - default values-->
                      	<input class="form-control" name="minVal" id="minVal" type="text" data-min-val="10" value="180">
                        <span class="labels">$ - </span>
                        <input class="form-control" name="maxVal" id="maxVal" type="text" data-max-val="2500" value="1400">
                        <span class="labels">$</span>
                      </div>
                      <input class="btn btn-primary btn-sm" type="submit" value="Filter">
                    </div>
                  </form>
                </section>
                
                <!--Colors Section-->
                <section class="filter-section">
                	<h3>Filter by color</h3>
                  <span class="clear clearChecks">Clear colors</span>
                  <label>
                    <input type="checkbox" name="colors" value="black" id="color_0" checked>
                    Black (12)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="colors" value="white" id="color_1">
                    White (1)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="colors" value="green" id="color_2">
                    Green  (34)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="colors" value="blue" id="color_3">
                    Blue (23)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="colors" value="red" id="color_4">
                    Red (12)</label>
                </section>
                
                <!--Colors Section-->
                <section class="filter-section">
                	<h3>Filter by size</h3>
                  <span class="clear clearChecks">Clear size</span>
                  <label>
                    <input type="checkbox" name="sizes" value="small" id="size_0" checked>
                    Small (12)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="sizes" value="white" id="size_1">
                    Medium (34)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="sizes" value="green" id="size_2">
                    Large (11)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="sizes" value="blue" id="size_3">
                    Extra large (1)</label>
                  <br>
                  <label>
                    <input type="checkbox" name="sizes" value="red" id="size_4">
                    Superman (0)</label>
                </section>
                
                <!--Categories Section-->
                <section class="filter-section">
                	<h3>Categories</h3>
                  <ul class="categories">
                  	<li class="has-subcategory"><a href="#">iPhone cases (123)</a><!--Class "has-subcategory" for dropdown propper work-->
                    	<ul class="subcategory">
                      	<li><a href="#">iPhone cases (1)</a></li>
                        <li><a href="#">iPad cases (45)</a></li>
                        <li><a href="#">MacBook cases (34)</a></li>
                        <li><a href="#">Something (12)</a></li>
                        <li><a href="#">Air cases (23)</a></li>
                      </ul>
                    </li>
                    <li><a href="#">iPad cases (34)</a></li>
                    <li><a href="#">MacBook cases (78)</a></li>
                    <li class="has-subcategory"><a href="#">Something (45)</a>
                    	<ul class="subcategory">
                      	<li><a href="#">Subcategory (1)</a></li>
                        <li><a href="#">Subcategory (45)</a></li>
                        <li><a href="#">Subcategory (23)</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Air cases (23)</a></li>
                  </ul>
                </section>
              </div>
            </div>
            
            <!--Tiles-->
          	<div class="col-lg-9 col-md-9 col-sm-8">
            	<div class="row">
                <!--Tile-->
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="tile">
                    <div class="badges">
                      <span class="sale"></span>
                    </div>
                    <div class="price-label">Rs. {{$product->product_price}}</div>
                    <a href="{{url('ecommerce/single-product')}}/{{$product->slug}}"><img src="{{URL::to('public//admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}" alt="1"/></a>
                    <div class="footer">
                      <a href="#">{{$product->product_name}}</a>
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
                @endforeach
                <!--Tile-->
                
              </div>
              <!--Pagination-->
              <ul class="pagination">
                <li class="prev-page"><a class="icon-arrow-left" href="#"></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next-page"><a class="icon-arrow-right" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section><!--Catalog Grid Close-->
    
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
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/jquery.nouislider.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/mailer/mailer.js"></script>
		<script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/scripts.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.js"></script>

    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/shop-filters-left-3cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Aug 2018 12:46:15 GMT -->
</html>
