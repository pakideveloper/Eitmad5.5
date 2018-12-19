<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:05:10 GMT -->
<head>
    <meta charset="utf-8">
    <title>Eitmad - Shopping Cart</title>
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
    <style type="text/css">
      td{
        text-align: center;
      }
      th{
        text-align: center;
      }
    </style>
    <style type="text/css">
            .lds-roller {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
  top: 50%;
    left: 50%;
    background-color: rgb(158, 158, 158);
        border-radius: 50%;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 32px 32px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #36465d;
  margin: -3px 0 0 -3px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 50px;
  left: 50px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 54px;
  left: 45px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 57px;
  left: 39px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 58px;
  left: 32px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 57px;
  left: 25px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 54px;
  left: 19px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 50px;
  left: 14px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 45px;
  left: 10px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

        </style>
 
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
    <!-- <div class="color-switcher group animated">
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
    </div> --><!--Color Switcher End-->
  
  	<!--Login Modal-->
   @include('frontend/ecommerce/include/login')
   <!-- /.modal -->

    <!--Header-->
    @include('frontend/ecommerce/include/header')<!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
      <div id="ids_loader" style="position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999999;
    display: none;">
        
        <div class="lds-roller" ><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="{{URL::to('public/frontend/ecommerce/assets')}}/index.html">Home</a></li>
        <li>Shopping cart</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Shopping Cart-->
      <section class="shopping-cart">
      	<div class="container">
        	<div class="row">
          
          	<!--Items List-->
          	<div class="col-lg-9 col-md-9">
            	<h2 class="title">Shopping cart</h2>
            	<table class="items-list">
              	<tr style="    background-color: #f7f7f7;
    height: 36px;">
                	<th>&nbsp;</th>
                  <th>Product name</th>
                  <th>Product price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
                <?php
                  $cart_items = Cart::instance('shopping')->content();
                  
                  ?>
                @foreach($cart_items as $cart_item)
                <!--Item-->
                <tr class="item">
                	<td class="thumb"><a href="{{url('ecommerce/single-product')}}/{{$cart_item->options['product_slug']}}"><img src="{{URL::to('public//admin/ecommerce/upload/products')}}/{{$cart_item->options['image']->product_file_name}}" alt="Nikon D4S"/></a></td>
                  <td class="name"><a href="{{url('ecommerce/single-product')}}/{{$cart_item->options['product_slug']}}" style="color: #f2992e;">{{$cart_item->name}}</a></td>
                  <td class="price">Rs. {{$cart_item->price}}</td>
                  <td class="qnt-count">
                    <a class="incr-btn" href="javascript:void(0)" onclick="lessQuantity('{{$cart_item->rowId}}');">-</a>
                    
                    <input id="quantity{{$cart_item->rowId}}"  name="quantity" class="form-control" type="text" value="{{$cart_item->qty}}" >
                    <a class="incr-btn" href="javascript:void(0)" onclick="addQuantity('{{$cart_item->rowId}}');">+</a>
                  </td>
                  <td class="total">Rs. {{$cart_item->subtotal}}</td>
                  <td class="delete"><a href="{{url('/ecommerce/removeFromCart')}}/{{$cart_item->rowId}}"><i class="icon-delete"></i></a></td>
                </tr>
                @endforeach
                <!--Item-->
              </table>
            </div>
            
            <!--Sidebar-->
            <div class="col-lg-3 col-md-3">
            	<h3>Cart totals</h3>
              <form class="cart-sidebar" method="post">
              	<div class="cart-totals">
                	<table>
                  	<tr>
                    	<td>Cart subtotal</td>
                      <td class="total align-r">{{Cart::instance('shopping')->subTotal}}</td>
                    </tr>
                  	<tr class="devider">
                    	<td>Shipping</td>
                      <td class="align-r">Free shipping</td>
                    </tr>
                  	<tr>
                    	<td>Order total</td>
                      <td class="total align-r">2715,00 $</td>
                    </tr>
                  </table>
                  <input type="submit" class="btn btn-primary btn-sm btn-block" name="update-cart" value="Update shopping cart">
                  <a href="{{url('/ecommerce/checkout')}}" style="text-decoration: none !important;">
                  <button type="button" class="btn btn-success btn-block" name="to-checkout" value="" onclick="">Proceed to checkout</button>
                </a>
                </div>
                <h3>Have a coupon?</h3>
                <div class="coupon">
                	<div class="form-group">
                    <label class="sr-only" for="coupon-code">Enter coupon code</label>
                    <input type="text" class="form-control" id="coupon-code" name="coupon-code" placeholder="Enter coupon code">
                  </div>
                  <input type="submit" class="btn btn-primary btn-sm btn-block" name="apply-coupon" value="Apply coupon">
                </div>
                <a class="panel-toggle" href="{{URL::to('public/frontend/ecommerce/assets')}}/#calc-shipping"><h3>Calculate shipping</h3></a>
                <div class="hidden-panel calc-shipping" id="calc-shipping">
                	<div class="form-group">
                  	<div class="select-style">
                      <select name="country">
                        <option>Australia</option>
                        <option>Belgium</option>
                        <option>Germany</option>
                        <option>United Kingdom</option>
                        <option>Switzerland</option>
                        <option>USA</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="state">State/ province</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="State/ province">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="postcode">Postcode/ ZIP</label>
                    <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode/ ZIP">
                  </div>
                  <input type="submit" class="btn btn-primary btn-sm btn-block" name="update-totals" value="Update totals">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section><!--Shopping Cart Close-->
      <?php
        $products = App\Product::latest()->limit(4)->get();
      ?>
      <!--Catalog Grid-->
      <section class="catalog-grid">
      	<div class="container">
        	<h2 class="primary-color">Newcomers</h2>
          <div class="row">
            @foreach($products as $product)
          	<!--Tile-->
          	<div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="tile">
              	<div class="price-label">Rs. {{$product->product_discounted_price}}</div>
              	<a href="{{url('ecommerce/single-product')}}/{{$product->slug}}"><img src="{{URL::to('public//admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}" alt="1"/></a>
                <div class="footer">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">{{$product->product_name}}</a>
                  <span>by {{$product->brand->brand_name}}</span>
                  <div class="tools">
                  	<div class="rate">
                    	<span class="active"></span>
                      <span class="active"></span>
                      <span class="active"></span>
                      <span></span>
                      <span></span>
                    </div>
                    <!--Add To Cart Button-->
                    <a class="add-cart-btn" href="{{url('ecommerce/product/addToCart')}}/{{\Crypt::encrypt($product->id)}}"><span>To cart</span><i class="icon-shopping-cart"></i></a>
                    <!--Share Button-->
                    <div class="share-btn">
                    	<div class="hover-state">
                      	<a class="fa fa-facebook-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-twitter-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                        <a class="fa fa-google-plus-square" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"></a>
                      </div>
                      <i class="fa fa-share"></i>
                    </div>
                    <!--Add To Wishlist Button-->
                    <a class="wishlist-btn" href="{{URL::to('public/frontend/ecommerce/assets')}}/#">
                    	<div class="hover-state">Wishlist</div>
                    	<i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!--Tile-->
          	@endforeach
          </div>
        </div>
      </section><!--Catalog Grid Close-->
      
      <!--Brands Carousel Widget-->
      @include('frontend/ecommerce/include/brand-crusal')
     <!--Brands Carousel Close-->
      
    </div><!--Page Content Close-->
    
    
    
    
     @include('frontend/ecommerce/include/footer')
    
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
    <script type="text/javascript">
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      var addQuantity = function(id){
        $('#ids_loader').show();
        var rowId = id;
        var quantity = $('#quantity'+rowId).val();
        quantity = parseInt(quantity);
        ++quantity;
        $.ajax({
            url: 'http://localhost/Eitmad5.5/ecommerce/cart/update',
            data: {rowId: rowId, quantity: quantity},
            method:'post',
            success: function (response) {
                $('#quantity'+rowId).val(response);
                    $('#ids_loader').hide();
                // }
                // $('#msg').html(response); // display success response from the server
                console.log(response);
            },
            error: function (response) {
                $('#msg').html(response); // display error response from the server
            }
        });
      }
      var lessQuantity = function(id){
        $('#ids_loader').show();
        var rowId = id;
        var quantity = $('#quantity'+rowId).val();
        quantity = parseInt(quantity);
        --quantity;
        $.ajax({
            url: 'http://localhost/Eitmad5.5/ecommerce/cart/update',
            data: {rowId: rowId, quantity: quantity},
            method:'post',
            success: function (response) {
                $('#quantity'+rowId).val(response);
                    $('#ids_loader').hide();
                // }
                // $('#msg').html(response); // display success response from the server
                console.log(response);
            },
            error: function (response) {
                $('#msg').html(response); // display error response from the server
            }
        });
      }
    </script>

    
  </body><!--Body Close-->

<!-- Mirrored from template.8guild.com/bushido/v1.4/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:05:10 GMT -->
</html>
