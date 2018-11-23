  <!--Header-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style type="text/css">
    .logo:hover{
      text-decoration: none;
    }
  </style>
    <header data-offset-top="500" data-stuck="600"><!--data-offset-top is when header converts to small variant and data-stuck when it becomes visible. Values in px represent position of scroll from top. Make sure there is at least 100px between those two values for smooth animation-->
    
      <!--Search Form-->
      <form class="search-form closed" method="get" role="form" autocomplete="off">
      	<div class="container">
          <div class="close-search"><i class="icon-delete"></i></div>
            <div class="form-group">
              <label class="sr-only" for="search-hd">Search for product</label>
              <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Search for procuct">
              <button type="submit"><i class="icon-magnifier"></i></button>
          </div>
        </div>
      </form>
      
    	<!--Split Background-->
    	<div class="left-bg"></div>
    	<div class="right-bg"></div>
      
    	<div class="container">
      	<a class="logo" href="http://localhost/Eitmad5.5" style="font-size: 47px; top: 8px;
    left: 18px;">
    <img src="public/frontend/ecommerce/assets/img/Eitmadweblogo.png" alt="Bushido"/>
    <!-- <span style="
    color: #4dfb4d;
">E</span><span style="
    color: #a772ff;
">i</span><span>t</span><span style="
    color: red;
">m</span><span style="
    color: yellow;
">a</span><span>d</span> -->
</a>
        
        <!--Language / Currency Switchers-->
        <!-- <ul class="switchers">
        	<li>$
            <ul class="dropdown">
              <li><a href="#">&euro;</a></li>
              <li><a href="#">$</a></li>
            </ul>
          </li>
        	<li>En
            <ul class="dropdown">
              <li><a href="#">En</a></li>
              <li><a href="#">Fr</a></li>
              <li><a href="#">Gr</a></li>
            </ul>
          </li>
        </ul> -->
      
      	<!--Mobile Menu Toggle-->
        <div class="menu-toggle"><i class="fa fa-list"></i></div>
        <div class="mobile-border"><span></span></div>
        
        <!--Main Menu-->
        <nav class="menu">
          <ul class="main">
          	<li class="has-submenu"><a href="{{url('/ecommerce')}}">Homesss<i class="fa fa-chevron-down"></i></a><!--Class "has-submenu" for proper highlighting and dropdown-->
            	<ul class="submenu">
              	<li><a href="index.html">Home - Slideshow</a></li>
              	<li><a href="home-fullscreen.html">Home - Fullscreen Slider</a></li>
              	<li><a href="home-showcase.html">Home - Product Showcase</a></li>
              	<li><a href="home-categories.html">Home - Categories Slider</a></li>
              	<li><a href="home-offers.html">Home - Special Offers</a></li>
              </ul>
            </li>
          	<li class="has-submenu"><a href="{{ url('shop') }}">Shop<i class="fa fa-chevron-down"></i></a>
              
            	<ul class="submenu">
                
              	
                
              	<li><a href="shop-filters-left-2cols.html">Shop - Filters Left 2 Cols</a></li>
              	<li><a href="shop-filters-right-3cols.html">Shop - Filters Right 3 Cols</a></li>
              	<li><a href="shop-filters-right-2cols.html">Shop - Filters Right 2 Cols</a></li>
              	<li><a href="shop-no-filters-4cols.html">Shop - No Filters 4 Cols</a></li>
              	<li><a href="shop-no-filters-3cols.html">Shop - No Filters 3 Cols</a></li>
                <li><a href="shop-single-item-v1.html">Shop - Single Item Vers 1</a></li>
                <li><a href="shop-single-item-v2.html">Shop - Single Item Vers 2</a></li>
                <li><a href="{{url('/ecommerce/cart')}}">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout Page</a></li>
                <li><a href="{{url('/ecommerce/wishlist')}}">Wishlist</a></li>
              </ul>
            </li>
          	<li class="has-submenu"><a href="{{url('/ecommerce/blog')}}">Blog<i class="fa fa-chevron-down"></i></a>
            	<!-- <ul class="submenu">
              	<li><a href="blog-sidebar-left.html">Blog - Sidebar Left</a></li>
              	<li><a href="blog-sidebar-right.html">Blog - Sidebar Right</a></li>
              	<li><a href="blog-single.html">Blog - Single Post</a></li>
              </ul> -->
            </li>
          	<li class="has-submenu"><a href="#">Pages<span class="label">NEW</span><i class="fa fa-chevron-down"></i></a>
            	<ul class="submenu">
              	<li><a href="{{ route('register') }}">Login / Registration</a></li>
                <li><a href="{{ url('ecommerce/become-seller') }}">Become a Seller<span class="label">NEW</span></a></li>
                <li><a href="account-addresses.html">Account: Addresses<span class="label">NEW</span></a></li>
                <li><a href="order-history.html">Orders History<span class="label">NEW</span></a></li>
                <li><a href="order-tracking.html">Order Tracking<span class="label">NEW</span></a></li>
                <li><a href="delivery-info.html">Delivery Info<span class="label">NEW</span></a></li>
              	<li><a href="about.html">About Us</a></li>
              	<li><a href="contacts.html">Contacts</a></li>
              	<li><a href="coming-soon.html">Coming Soon</a></li>
              	<li><a href="404.html">404 Page</a></li>
              	<li><a href="support.html">Support Page</a></li>
              	<li><a href="cs-page.html">Components &amp; Styles</a></li>
              </ul>
            </li>
          	<li class="hide-sm"><a href="support.html">Support</a></li>
          </ul>
          <ul class="catalog">
          	<li class="has-submenu"><a href="shop-filters-left-3cols.html">Categories<i class="fa fa-chevron-down"></i></a>
              <?php
                                 
                                 $categories=App\Product_Category::all();
                                 ?>
            	<ul class="submenu">
               <!--  @foreach($categories as $category)
              	<li><a href="#">{{$category->category_name}}</a></li>
                @endforeach -->
                @foreach($categories as $category)
              	<li class="has-submenu"><a href="#">{{$category->category_name}}</a><!--Class "has-submenu" for adding carret and dropdown-->
                  
                	<ul class="sub-submenu">
                    @foreach($category->sub_categories as $subcategory)
                    <li><a href="{{url('/ecommerce/category')}}/{{$subcategory->sub_category_name}}">{{$subcategory->sub_category_name}}</a></li>
                     @endforeach
                    <!-- <li><a href="#">iPhone 4s</a></li>
                    <li><a href="#">iPhone 5c</a></li>
                    <li><a href="#">iPhone 5s</a></li> -->
                  </ul>
                </li>
                 @endforeach
              	
                <li class="offer">
                	<!-- <div class="col-1">
                  	<p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div> -->
                  <!-- <div class="col-2">
                  	<img src="img/offers/menu-drodown-offer.jpg" alt="Special Offer"/>
                  	<a class="btn btn-block" href="#"><span>584$</span>Special offer</a>
                  </div> -->
                </li>
              </ul>
            </li>
          	<li><a href="shop-filters-left-3cols.html">Dashboard</a></li>
          	<li><a href="shop-filters-left-3cols.html">Personal</a></li>
          	<li><a href="shop-filters-left-3cols.html">Gaming consoles</a></li>
          	<li><a href="shop-filters-left-3cols.html">TV sets</a></li>
          </ul>
        </nav>
        
        <!--Toolbar-->
        <div class="toolbar group">
          <button class="search-btn btn-outlined-invert"><i class="icon-magnifier"></i></button>
          <div class="middle-btns">
            <a class="btn-outlined-invert" href="{{url('/ecommerce/wishlist')}}"><i class="icon-heart"></i> <span>Wishlist</span></a>
            @if (Auth::guest())
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i> <span>Login</span></a>
            @else
            <a class="login-btn btn-outlined-invert" href="#" ><i class="icon-profile"></i> <span>{{ Auth::user()->first_name }}</span></a>
            @endif
          </div>
          <div class="cart-btn">
          	<a class="btn btn-outlined-invert" href="{{url('/ecommerce/cart')}}"><i class="icon-shopping-cart-content"></i><span id="head_total_quantity">{{Cart::instance('shopping')->count()}}</span></a>
            
            <?php
            $cart_items = Cart::instance('shopping')->content();
            ?>
            <!--Cart Dropdown-->
            <div class="cart-dropdown">
              <span></span><!--Small rectangle to overlap Cart button-->
              <div class="body">
                <table>
                  <tr>
                    <th>Items</th>
                    <th>Quantity</th>
                    <th>Price</th>

                  </tr>
                  @foreach($cart_items as $cart_item)
                  <tr class="item">
                    <td><a href="{{url('/ecommerce/removeFromCart')}}/{{$cart_item->rowId}}"><div class="delete"></div></a><a href="{{url('ecommerce/single-product')}}/{{$cart_item->options['product_slug']}}"">{{$cart_item->name}}</a></td>
                    <td><input type="text" id="head_quantity{{\Crypt::decrypt($cart_item->id)}}" value="{{$cart_item->qty}}"></td>
                    <td class="price">Rs. {{$cart_item->price}}</td>
                  </tr>
                  @endforeach
                </table>
              </div>
              <div class="footer group">
                <div class="buttons">
                  <a class="btn btn-outlined-invert" href="checkout.html"><i class="icon-download"></i>Checkout</a>
                  <a class="btn btn-outlined-invert" href="shopping-cart.html"><i class="icon-shopping-cart-content"></i>To cart</a>
                </div>
                <div class="total" id="head_total">{{Cart::total()}}</div>
              </div>
            </div><!--Cart Dropdown Close-->
          </div>
        </div><!--Toolbar Close-->
      </div>
    </header>
    <!--Header Close-->