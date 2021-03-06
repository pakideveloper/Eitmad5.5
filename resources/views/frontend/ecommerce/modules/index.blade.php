
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

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="{{URL::to('public/frontend/ecommerce/assets')}}/js/plugins/respond.js"></script>
    <![endif]-->
 <style>
   


   .footer .old-price {
    display: inline-block;
    margin: 0 15px 10px 0;
    font-size: 1em;
    color: #b2b2b2;
    font-weight: 900;
    text-decoration: line-through;
}
    .footer .price {
    display: inline-block;
    margin: 0 15px 10px 0;
    font-size: 1em;
    font-weight: 900;
    color: #36465d;

}

    
  
 </style>
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
<!--     <div class="color-switcher group animated">
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
    </div> --><!--Color Switcher End-->
  
  	<!--Login Modal-->
    @include('frontend/ecommerce/include/login')
      <!-- /.modal -->

    <!--Header-->
    @include('frontend/ecommerce/include/header')
    <!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
      @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px; background-color: #ffb6b7;
    border-color: #d67474;
        color: #36465d;">
                            {{ session('status') }} &nbsp; <a href="ecommerce/become-seller" style="text-decoration: underline;">Become Seller</a>
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
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
            <!-- <div style="left: 110px; top: 300px;" class="ms-layer button" data-effect="bottom(50,true)" data-duration="600" data-delay="950" data-ease="easeOutQuad"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div> -->
          </div>
          @endforeach
          
        </div>
      </section><!--Hero Slider Close-->
    
    	<!--Categories-->
      <!-- <section class="cat-tiles">
      	<div class="container">
        	<h2>Browse categories</h2>
        	<div class="row">
          
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
          	
          </div>
        </div>
      </section> -->
      @include('frontend/ecommerce/include/brand-crusal')

      



      <!--Categories Close-->
      <?php
        $products = App\Product::latest()->take(8)->get();
      ?>
      <!--Catalog Grid-->
      <section class="catalog-grid">
        <div class="container">
          <h2 class="primary-color">Featured Products</h2>
          <div class="row">
          	<!--Tile-->
            @foreach($products as $product)
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="badges">
                	<span class="sale"></span>
                </div>
              	<!-- <div class="price-label">Rs. {{$product->product_price}}</div> -->
              	<a href="{{url('ecommerce/single-product')}}/{{$product->slug}}"><img src="{{URL::to('public//admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}" width = "190" height="190" alt="1"/></a>
                <div class="footer">
                 <div class="old-price" >Rs. {{$product->product_price}}</div>
              <div class="price" ><b>Rs. {{$product->product_discounted_price}}</b></div>
              <div>
                	<a href="{{url('ecommerce/single-product')}}/{{$product->slug}}">{{$product->product_name}}</a>
                  <span>by Admin</span>
                  </div>
                  <div class="tools">
                  	<div class="rate">
                    	<!-- <span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span> -->
                    @if (!Auth::guest()) 
                      <button type="button" class="btn-primary" data-toggle="modal" data-target="#affiliated{{$product->id}}" >AffiliateMarketing</button>
                      @else
                      
                      <a href="{{url('/login')}}"><button type="button" class="btn btn-primary btn-xs" >AffiliateMarketing</button></a>
                      @endif

                      
                    </div>
                    <!--Add To Cart Button-->
                    <a  href="{{url('ecommerce/single-product')}}/{{$product->slug}}" class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    
                    <a  class="wishlist-btn" href="{{url('ecommerce/wishlist')}}/{{$product->id}}" >
                      <div class="hover-state">Wishlist</div>
                      <i class="fa fa-plus"></i>
                    </a>
                    
                    <!--Share Button-->
                    <!-- <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div> -->
                    <!--Add To Wishlist Button-->
                    
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!--Tile-->
          	
          </div>
        </div>
      </section><!--Catalog Grid Close-->
      
      



      <!--Tabs Widget-->
      <section class="tabs-widget">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#newarrived" data-toggle="tab" style="color: #36465d;">New Arrivals</a></li>
          <li ><a href="#bestsel" data-toggle="tab" style="color: #36465d;">Most Wanted items</a></li>
          <li><a href="#onsale" data-toggle="tab" style="color: #36465d;">Items on sale</a></li>
           
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="newarrived">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <a class="media-link" href="#">
                    <div class="overlay">
                      <div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image6.jpeg" alt="6"/>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <a class="media-link" href="#">
                    <div class="overlay">
                      <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image7.jpeg" alt="7"/>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <a class="media-link" href="#">
                    <div class="overlay">
                      <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image8.jpeg" alt="8"/>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <a class="media-link" href="#">
                    <div class="overlay">
                      <div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image9.jpeg" alt="9"/>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <a class="media-link" href="#">
                    <div class="overlay">
                      <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image10.jpeg" alt="10"/>
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
          <div class="tab-pane fade " id="bestsel">
          	<div class="container">
            	<div class="row">
              	<div class="col-lg-7 col-md-7 col-sm-7">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>X-MAS LIGHT IPHONE LENS<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image1.jpeg" alt="1"/>
                  </a>
                </div>
              	<div class="col-lg-5 col-md-5 col-sm-5">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Hedadset for iPhone<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image2.jpeg" alt="2"/>
                  </a>
                </div>
              </div>
              <div class="row">
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image3.jpeg" alt="3"/>
                  </a>
                </div>
              	<div class="col-lg-5 col-md-5 col-sm-5">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image4.jpeg" alt="4"/>
                  </a>
                </div>
              	<div class="col-lg-3 col-md-3 col-sm-3">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image5.jpeg" alt="5"/>
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
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image6.jpeg" alt="6"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image7.jpeg" alt="7"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image8.jpeg" alt="8"/>
                  </a>
                </div>
              </div>
            	<div class="row">
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image9.jpeg" alt="9"/>
                  </a>
                </div>
              	<div class="col-lg-4 col-md-4 col-sm-4">
                	<a class="media-link" href="#">
                  	<div class="overlay">
                    	<div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/media/image10.jpeg" alt="10"/>
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
      <?php
        $sub_categories = App\Product_Sub_Category::all();
      ?>
      <!--Gallery Widget-->
      <section class="gray-bg gallery-widget" style="background: white;">
      	<div class="container">
        	<h2 class="primary-color">Product gallery</h2>
          <div class="filters">
            <a class="active" href="#" data-group="all" style="color: #36465d;">All</a>
            @foreach($sub_categories as $sub_category)
            <a href="#" data-group="{{$sub_category->sub_category_name}}" style="color: #36465d;">{{$sub_category->sub_category_name}}</a>
            @endforeach
          </div>
          <div class="gallery-grid">
            @foreach($sub_categories as $sub_category)
              @foreach($sub_category->products as $product)
            <!--Item-->
            <div class="gallery-item" data-groups='["{{$sub_category->sub_category_name}}"]' data-src="{{URL::to('public//admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}">
              <a href="img/gallery-widget/1.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public//admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}" width="190px" height="190" alt="1"/>
              </a>
            </div>
            <!--Item--> 
            @endforeach           
            @endforeach           
          </div>
        </div>
      </section><!--Gallery Widget Close-->
      
      <!--Brands Carousel Widget-->
     <!--  @include('frontend/ecommerce/include/brand-crusal') -->
      <!--Brands Carousel Close-->
      
    </div><!--Page Content Close-->
     @foreach($products as $product)
    <div class="modal fade" id="affiliated{{$product->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Affiliate Marketer Form</h4>
        </div>
        <div class="modal-body" style="height: 700px;">
          <?php
          $check = 0; 
           ?>
          <form method="post" action="{{url('ecommerce/marketer/bidForm')}}">
            {{ csrf_field()}}
            <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="product_name"><h4>Product_Name:</h4></label>
                              <input type="text" class="form-control" name="product" id="product" value="{{$product->product_name}}" readonly>
                              
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="product_price"><h4>Product_Price:</h4></label>
                              <input type="text" class="form-control" name="price" id="price" value="{{$product->product_price}}" readonly>
                              
                          </div>
                      </div>

                      
           <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="proposal"><h4>Proposal:</h4></label>
                              <textarea  class="form-control" id="proposal" name="proposal" placeholder="Please Describe Your Proposal" value="" title="Enter Your Proposal" required></textarea>
                          </div>
                      </div>
                      <hr>
                      <div class="form-group" style="">
                          
                          <div class="col-xs-12">
                            <label for="commission_ratio"><h4>Comission_ratio:</h4></label>
                              <input type="number" class="form-control" name="ratio" id="ratio" placeholder="Enter Your Expected commission ratio" value="" title="Enter Your Expected commission ratio in %" min="0" required>%
                              
                          </div>
                      </div>
                      <div class="form-group" style="">
                          
                          <div class="col-xs-8">
                            <label for="timeline"><h4>Expected Time:</h4></label>
                        
                              <input type="number" class="form-control" name="timeline" id="timeline" placeholder="e.g, 2" value="" title="Enter Your Expected Time in days,hours,minutes, or seconds" min="0" required>
                              <hr>
                              <!-- <input type="number" class="form-control" name="timeline" id="timeline" placeholder="Enter Your Expected Time in days,hours,minutes, or seconds" value="" title="Enter Your Expected Time in days,hours,minutes, or seconds"> -->
                              <select name = "time" id="time" class="form-control">
                                <option value="months">
                                  Month
                                </option>
                                <option value="days">
                                  Days
                                </option>
                                <option value="minutes">
                                  Minutes
                                </option>
                                <option value="seconds">
                                  Seconds
                                </option>
                              </select>
                                
                                                   
                              
                                
                              </div>
                      </div>
                      
        </div>
        <div class="modal-footer">
         
            
          <button type="submit" class="btn btn-primary">Submit</button>
         <!--  $check++; -->
        
        

        </div>
        </form>
      </div>
      
    </div>
  </div>
  
   @endforeach
    
   
      
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script>
      $(document).ready(function(){

    $('.customer-logos').slick({

        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

 
    </script> 
    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:02:15 GMT -->
</html>
