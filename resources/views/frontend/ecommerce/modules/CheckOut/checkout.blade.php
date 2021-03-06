<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:23 GMT -->
<head>
    <meta charset="utf-8">
    <title>Eitmad - Checkout</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
          
          <!--Checkout Form-->
          <div class="row">
            <!-- <form action="{{url('/ecommerce/ship_bill_details')}}" id="checkout-form" method="post"> -->
              <form action="https://sandbox.2checkout.com/checkout/purchase" id="checkout-form" method="POST" name="myform" enctype="multipart/form-data">
             {{ csrf_field()}}
              <!--Left Column-->
              <div class="col-lg-8 col-md-8 col-sm-8">
                <h3>Billing Details</h3>
                
                <div class="row">
                 
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    
                    <label for="co-first-name" >First Name *</label>
                    <input type="text" class="form-control" id="co-first-name" name="b_f_name" placeholder="First name" value="{{$users->first_name}}" required>

                  </div>
                 
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="co-last-name">Last Name *</label>
                    <input type="text" class="form-control" id="co-last-name" name="b_l_name" placeholder="Last name" value="{{$users->last_name}}"  required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="co-email">Email *</label>
                    <input type="email" class="form-control" id="co-email" name="b_email" placeholder="Email adress" value="{{$users->email}}" required>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="co_phone">Phone *</label>
                    <input type="text" class="form-control" id="co_phone" name="b_phone" placeholder="Phone number" value="{{$users->contact_number}}" required>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="co-company-name">Company name</label>
                  <input type="text" class="form-control" id="co-company-name" name="co-company-name" placeholder="Company name">
                </div> -->
                <div class="row">
                  <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="co-country">Country *</label>
                  <div class="select-style">
                   
                    <select name="b_country" id="b-country" required>
                      <option value="" >Select Country</option>
                       @foreach($countries as $country)

                      <option value="{{$country->id}}" >{{$country->country_name}}</option>
                      <!-- <option>Belgium</option>
                      <option>Germany</option>
                      <option>United Kingdom</option>
                      <option>Switzerland</option>
                      <option>USA</option> -->
                       @endforeach
                    </select>
                   
                  </div>
                </div>

                <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="co-country">State *</label>
                  <div class="select-style">
                   
                    <select name="b_region" id="b-region" required>
                      <!--  <option value="" >Select Country First</option> -->
                    </select>
                   
                  </div>
                </div>


                  <div class="form-group col-lg-4 col-md-4 col-sm-4">
                    <label for="co-city">Town/ city *</label>
                    <div class="select-style">
                   
                    <select name="b_city" id="b-city" required>
                     <!--  <option value="" >Select State First</option> -->
                    </select>
                   
                  </div>
                  <!-- <input type="text" class="form-control" id="co-city" name="co-city" placeholder="Town/ city" required> -->
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="co_postcode">Postcode *</label>
                    <input type="text" class="form-control" id="co_postcode" name="co_postcode" placeholder="Postcode/ ZIP" required>



                  
                </div> -->
                
                
                <div class="form-group">
                  <label for="co-str-adress">Address *</label>
                  <textarea  class="form-control" id="co-str-adress" name="b_address" placeholder="Street address" value = "" required>{{$users->address}}
                  </textarea>
                </div>
                <!-- <div class="form-group">
                  <label class="sr-only" for="co-appartment">Appartment</label>
                  <input type="text" class="form-control" id="co-appartment" name="co-appartment" placeholder="Appartment" required>
                </div>
                 -->
                 <h3>Order notes</h3>
                <div class="form-group">
                  <label class="sr-only" for="order-notes">Order notes</label>
                  <textarea class="form-control" name="order-notes" id="order-notes" rows="4" placeholder="Order notes"></textarea>
                </div>
               <!--  <div class="checkbox form-group">
                  <label><input type="checkbox" name="create-account"> Create an account?</label>
                </div> -->
                
                <!-- <div class="checkbox form-group" >
                  <label><span class="text-primary">Ship to a different address?</span> <input type="checkbox" name="ship-to-diff-address" ></label>
                </div> -->



                <div class="checkbox form-group">
                <label><span class="text-primary">Ship to a different address?</span><input type="checkbox" name="s_check"  id="ship-to-diff-address" style="margin-left: 5px;"></label>
                </div>
                
                </div>


                      <div id="shippingdetails" class="col-lg-8 col-md-8 col-sm-8"  style="display: none;">
                <h3>Shipping Details</h3>
                
                <div class="row">
                 
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    
                    <label for="co-first-name" >First Name *</label>
                    <input type="text" class="form-control" id="co-first-name" name="s_f_name" placeholder="First name" required>

                  </div>
                 
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="co-last-name">Last Name *</label>
                    <input type="text" class="form-control" id="co-last-name" name="s_l_name" placeholder="Last name" value = "" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="co-email">Email *</label>
                    <input type="email" class="form-control" id="co-email" name="s_email" placeholder="Email adress" required>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="co_phone">Phone *</label>
                    <input type="text" class="form-control" id="co_phone" name="s_phone" placeholder="Phone number" required>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="co-company-name">Company name</label>
                  <input type="text" class="form-control" id="co-company-name" name="co-company-name" placeholder="Company name">
                </div> -->
                <div class="row">
                  <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="co-country">Country *</label>
                  <div class="select-style">
                   
                    <select name="s_country" id="s-country" required>
                      <option value="" >Select Country</option>
                       @foreach($countries as $country)
                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                      <!-- <option>Belgium</option>
                      <option>Germany</option>
                      <option>United Kingdom</option>
                      <option>Switzerland</option>
                      <option>USA</option> -->
                       @endforeach
                    </select>
                   
                  </div>
                </div>

                <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="co-country">State *</label>
                  <div class="select-style">
                   
                    <select name="s_region" id="s-region" required>
                       
                    </select>
                   
                  </div>
                </div>



                  <div class="form-group col-lg-4 col-md-4 col-sm-4">
                    <label for="co-city">Town/ city *</label>
                    <div class="select-style">
                   
                    <select name="s_city" id="s-city" required>
                       
                    </select>
                   
                  </div>
                  <!-- <input type="text" class="form-control" id="co-city" name="co-city" placeholder="Town/ city" required> -->
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="co_postcode">Postcode *</label>
                    <input type="text" class="form-control" id="co_postcode" name="co_postcode" placeholder="Postcode/ ZIP" required>



                  
                </div> -->
                
                
                <div class="form-group">
                  <label for="co-str-adress">Shipping Address *</label>
                  <textarea  class="form-control" id="co-str-adress" name="s_address" placeholder="Street adress"  required></textarea>
                </div>
                <!-- <div class="form-group">
                  <label class="sr-only" for="co-appartment">Appartment</label>
                  <input type="text" class="form-control" id="co-appartment" name="co-appartment" placeholder="Appartment" required>
                </div>
                 -->
                 <!-- <h3>Order notes</h3>
                <div class="form-group">
                  <label class="sr-only" for="order-notes">Order notes</label>
                  <textarea class="form-control" name="order-notes" id="order-notes" rows="4" placeholder="Order notes"></textarea>
                </div> -->
                <!-- <div class="checkbox form-group">
                  <label><input type="checkbox" name="create-account"> Create an account?</label>
                </div>
                
                <div class="checkbox form-group">
                  <label><span class="text-primary">Ship to a different adress?</span> <input type="checkbox" name="ship-to-dif-adress"></label>
                </div> -->
                
              </div>
              



















              
              <!--Right Column-->
              <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4">
               </span></a>
            
            <?php
            $cart_items = Cart::instance('shopping')->content();
            ?>

                <h3>Your order</h3>
                <table>
                   @foreach($cart_items as $cart_item)
                  <tr><th>Product</th></tr>
                  <tr>
                   
                    <td class="name border">{{$cart_item->name}}<span>x{{$cart_item->qty}}</span></td>
                    <td class="price border">Rs. {{$cart_item->price}}</td>
                   
                  </tr>
                  <tr>
                    <td class="th">Cart subtotal</td>
                    <td class="price">{{$cart_item->subtotal}}</td>
                  </tr>
                   
                  <tr>
                    <td class="th border">Shipping</td>
                    <td class="align-r border">Free shipping</td>
                  </tr>
                  <tr>
                    <td class="th">Order total</td>
                    <td class="price">Rs. {{$cart_item->total}}</td>
                  </tr>
                  @endforeach
                </table>
                <div class="payment-method">
                  <div class="radio light">
                    <label><input type="radio" name="payment" id="payment01" value="bank_transfer" > Direct Bank Transfer</label>
                  </div>
                  <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                  <div class="radio light">
                    <label><input type="radio" name="payment" id="payment02" value="online_pay"> Online Payment </label>
                  </div>
                  <div class="radio light">
                    <label><input type="radio" name="payment" id="payment03" value="cash_delivery"> Cash On Delivery 
                      <!-- <span class="pp-label"></span> -->
                    </label>
                  </div>
                </div>

 <?php
            $cart_items = Cart::instance('shopping')->content();
            // dd($cart_items);
            ?>
          
          <!--Checkout Form-->
          
         
<input type='hidden' name='sid' value='901394952' />
<input type='hidden' name='mode' value='2CO' />
<?php
  $inc = 0;
?>
@foreach($cart_items as $cart_item)
<input type='hidden' name='li_{{$inc}}_type' value='product' />
<input type='hidden' name='li_{{$inc}}_product_id' value='{{\Crypt::decrypt($cart_item->id)}}' />
<input type='hidden' name='li_{{$inc}}_name' value='{{$cart_item->name}}' />
<input type='hidden' name='li_{{$inc}}_price' value='{{$cart_item->price}}' />
<input type='hidden' name='li_{{$inc}}_quantity' value='{{$cart_item->qty}}' />
<?php
  $inc++;
?>
@endforeach
<input type='hidden' name='card_holder_name' value='Checkout Shopper' />
<input type='hidden' name='street_address' value='123 Test Address' />
<input type='hidden' name='street_address2' value='Suite 200' />
<input type='hidden' name='city' value='Columbus' />
<input type='hidden' name='state' value='OH' />
<input type='hidden' name='zip' value='43228' />
<input type='hidden' name='country' value='USA' />
<input type='hidden' name='s_check' value='Online_pay' />
<input type='hidden' name='email' value='{{$users->email}}' />
<input type='hidden' name='phone' value='{{$users->contact_number}}' />
<input type='hidden' name="csrf_token" value='{{ csrf_token() }}' />
<input type='hidden' name="payment" value='' />
<input type='hidden' name="total" value='{{$cart_item->total}}' />

                  
                            


                
<input class="btn btn-success btn-block" name='submit' type='submit' value='Place Order' />
               
              </div>
             
            </form>
            
          </div>
        </div>
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
      @include('frontend/ecommerce/include/brand-crusal')
      
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

    // $('#payment01').change(function () {
    //   if (this.checked) {
    //         document.myform.action = '/edit';
    //             }
            
    //     });
    $("input:radio[name=payment]").click(function() {
    var value = $(this).val();
    if (value == 'bank_transfer') {
      document.myform.action = "{{url('/ecommerce/banktransfer')}}";
      myform.submit();
    }
    if (value == 'online_pay') {
      document.myform.action = "https://sandbox.2checkout.com/checkout/purchase";
      myform.submit();
  }
  if (value == 'cash_delivery') {
      document.myform.action = "";
      myform.submit();
  }
    });


    
</script>
  
<script type="text/javascript">
    // $(document).ready(function() {
$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $('#b-country').on('change', function() {
            
            var countryID = $(this).val();
           // alert(countryID);
            if (countryID) {
                $.ajax({

                    url: '{{ url('/ecommerce/city/selectregions')}}'+'/' +countryID ,
                    type: "GET",
                    dataType: "json",
                    
                    success:function(data) {

                        
                        $('select[name="b_region"]').empty();
                        $('select[name="b_region"]').append('<option value="'+ "" +'">'+ "Select State" +'</option>');
                        $.each(data, function(key, value) {
                            $('select[name="b_region"]').append('<option value="'+ value.id +'">'+ value.region_name +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="b_region"]').empty();
            }
        });


        $('#s-country').on('change', function() {
            
            var countryID = $(this).val();
           // alert(countryID);
            if (countryID) {
                $.ajax({

                    url: '{{ url('/ecommerce/city/selectshippingregions')}}'+'/' +countryID ,
                    type: "GET",
                    dataType: "json",
                    
                    success:function(data) {

                        
                        $('select[name="s_region"]').empty();
                        $('select[name="s_region"]').append('<option value="'+ "" +'">'+ "Select State" +'</option>');
                        $.each(data, function(key, value) {
                            $('select[name="s_region"]').append('<option value="'+ value.id +'">'+ value.region_name +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="s_region"]').empty();
            }
        });




        $('#b-region').on('change', function() {
            
            var stateID = $(this).val();
           // alert(stateID);
            if (stateID) {
                $.ajax({

                    url: '{{ url('/ecommerce/city/selectcities')}}'+'/' +stateID ,
                    type: "GET",
                    dataType: "json",
                    
                    success:function(data) {

                        
                        $('select[name="b_city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="b_city"]').append('<option value="'+ value.id +'">'+ value.city_name +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="b_city"]').empty();
            }
        });


         $('#s-region').on('change', function() {
            
            var stateID = $(this).val();
           // alert(stateID);
            if (stateID) {
                $.ajax({

                    url: '{{ url('/ecommerce/city/selectshippingcities')}}'+'/' +stateID ,
                    type: "GET",
                    dataType: "json",
                    
                    success:function(data) {

                        
                        $('select[name="s_city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="s_city"]').append('<option value="'+ value.id +'">'+ value.city_name +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="s_city"]').empty();
            }
        });


    // });
</script>

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

<!-- Mirrored from template.8guild.com/bushido/v1.4/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:23 GMT -->
</html>
