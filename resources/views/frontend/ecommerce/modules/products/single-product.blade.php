<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/shop-single-item-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Eitmad - Products</title>
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
    <!-- <div class="color-switcher group animated">
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
        <a class="btn-outlined-invert btn-success btn-sm" href="{{url ('/ecommerce/cart')}}">View cart</a>
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
                
                <div class="ms-slide">
                  <img src="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/blank.gif" data-src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}" alt="Lorem ipsum"/>
                  <img class="ms-thumb" src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}" alt="thumb" />
                </div>                
                @foreach($product->files as $file)
                @if($file->id != $product->title_img_id)
                <div class="ms-slide">
                	<img src="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/blank.gif" data-src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$file->product_file_name}}" alt="Lorem ipsum"/>
                  <img class="ms-thumb" src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$file->product_file_name}}" alt="thumb" />
                </div>
                @endif
                @endforeach
              	
              	
              </div>
            </div>
            
            <!--Product Description-->
            <div class="col-lg-6 col-md-6">
              <h1>{{$product->product_name}}</h1>
              <div class="rate">
                @if (!Auth::guest()) 
                <button  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#affiliated{{$product->id}}" >AffiliateMarketing</button>
                @else
                <a href="{{url('/login')}}"><button type="button" class="btn-primary" >AffiliateMarketing</button></a>
                @endif
              </div>
              <div class="old-price">Rs. {{$product->product_price}}</div>
              <div class="price">Rs. {{$product->product_discounted_price}}</div>
              <div class="buttons group">
                <form method="post" action="{{url('ecommerce/product/addToCart')}}" style="float: left;">
                  {{csrf_field()}}
                  <div class="qnt-count">
                    <a class="incr-btn" href="#">-</a>
                    <input id="quantity" name="quantity" class="form-control" type="text" value="1">
                    <a class="incr-btn" href="#">+</a>
                  </div>
                  <input type="hidden" name="product_id" value="{{\Crypt::encrypt($product->id)}}">
                  <button class="btn btn-primary btn-sm" ><i class="icon-shopping-cart"></i>Add to cart</button>

                </form>
                <!-- <input type="hidden" id="product_id" value="{{\Crypt::encrypt($product->id)}}" name="product_id"> -->
                <a class="btn btn-success btn-sm" href="{{url('ecommerce/wishlist')}}/{{$product->id}}"><i class="icon-heart"></i>Add to wishlist</a>
                 
              </div>
              <?php
                                                        if(strlen($product->product_description)>200){
                                                            $description = substr($product->product_description, 0, 200).'...';
                                                        }
                                                        else
                                                        {
                                                            $description = $product->product_description;
                                                        }
                                                        ?>
              <p class="p-style2">{{$description}}</p>
              <div class="row">
                <!-- <div class="col-lg-4 col-md-4 col-sm-5">
                  <h3>Tell friedns</h3>
                  <div class="social-links">
                    <a href="#"><i class="fa fa-tumblr-square"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square"></i></a>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div> -->
                <!-- <div class="col-lg-8 col-md-8 col-sm-7">
                  <h3>Tags</h3>
                  <div class="tags">
                    <a href="#">Nikon, </a>
                    <a href="#">camera, </a>
                    <a href="#">hd video</a>
                  </div>
                </div> -->
              </div>
<!--               <div class="promo-labels">
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-truck"></i>Free delivery</div>
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-space-shuttle"></i>Deliver even on Mars</div>
                <div data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-shield"></i>Safe Buy</div>
              </div> -->
            </div>
          </div>
        </div>
      </section><!--Catalog Single Item Close-->
      
      <?php
        $names = json_decode($product->category->feature_names);
        $values = json_decode($product->other_features);
        $border = round(count($names)/2); 
      ?>
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

                        @foreach($names as $key=>$name )
                        @if($key <= $border)
  <div class="item" style="border-bottom-color: #36465d;
    border: 1px solid #36465d;
    margin-bottom: 6px;
    padding-left: 10px;
    padding-bottom: 3px;
    padding-top: 0px;
    border-radius: 4px;">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><span>{{$name}}</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2"> <?php $kee = preg_replace('/\s+/', '', $name)?> {{$values->$kee}}</p></div> 
                          </div>
                        </div>
                        @endif
                        @endforeach
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-tv-monitor"></i><span>Display</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">High resolution display is the equivalent of a 25 inch high definition screen from eight feet away.</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-camera-1"></i><span>Camera</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">Photos - 5 MP<br/>Videos - 720p</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-headphones"></i><span>Audio</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">Bone Conduction Transducer</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><i class="icon-share"></i><span>Connectivity</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2">Wifi - 802.11b/g<br/>Bluetooth</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-accelerator"></i><span>Storage</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">12 GB of usable memory, synced with Google cloud storage. 16 GB Flash total.</p></div>
                          </div>
                        </div> -->
                      </div>
                      <!--Column 2-->
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <!--Item-->
                        @foreach($names as $key=>$name )
                        @if($key > $border)
                        <div class="item" style="border-bottom-color: #36465d;
    border: 1px solid #36465d;
    margin-bottom: 6px;
    padding-left: 10px;
    padding-bottom: 3px;
    padding-top: 0px;
    border-radius: 4px;">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-3"><span>{{$name}}</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2"><?php $kee = preg_replace('/\s+/', '', $name)?> {{$values->$kee}}</p></div>
                          </div>
                        </div>
                        @endif
                        @endforeach
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-tv-monitor"></i><span>Display</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">High resolution display is the equivalent of a 25 inch high definition screen from eight feet away.</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-camera-1"></i><span>Camera</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">Photos - 5 MP<br/>Videos - 720p</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-headphones"></i><span>Audio</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">Bone Conduction Transducer</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-share"></i><span>Connectivity</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">Wifi - 802.11b/g<br/>Bluetooth</p></div>
                          </div>
                        </div> -->
                        <!--Item-->
                        <!-- <div class="item">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4"><i class="icon-accelerator"></i><span>Storage</span></div>
                            <div class="col-lg-8 col-md-8 col-sm-8"><p class="p-style2">12 GB of usable memory, synced with Google cloud storage. 16 GB Flash total.</p></div>
                          </div>
                        </div> -->
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
                	<p class="p-style2">{{$product->product_description}}</p>
                 <!--  <div class="row">
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
                  </div> -->
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
      @include('frontend/ecommerce/include/brand-crusal')<!--Special Offer Close-->
      
    </div><!--Page Content Close-->
    
    
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
        pauseOnHover: false,
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

<!-- Mirrored from template.8guild.com/bushido/v1.4/shop-single-item-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:23 GMT -->
</html>
