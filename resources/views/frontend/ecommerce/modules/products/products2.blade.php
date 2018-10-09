<html class=" js touch rgba backgroundsize borderimage borderradius csstransforms csstransforms3d csstransitions svg" style=""><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head>
    <meta charset="utf-8">
    <title>Bushido - HTML5 E-Commerce Template</title>
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive HTML5 E-Commerce Template">
        <meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern">
        <meta name="author" content="8Guild">
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Master Slider Styles-->
    <link href="{{URL::to('public/frontend/ecommerce')}}/assets/masterslider/style/masterslider.css" rel="stylesheet" media="screen">
    <!--Styles-->
    <link href="{{URL::to('public/frontend/ecommerce')}}/assets/css/styles.css" rel="stylesheet" media="screen">
    <!--Color Scheme-->
    <link class="color-scheme" href="{{URL::to('public/frontend/ecommerce')}}/assets/css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Color Switcher-->
    <link href="{{URL::to('public/frontend/ecommerce')}}/assets/color-switcher/color-switcher.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/libs/modernizr.custom.js"></script>
    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/respond.js"></script>
    <![endif]-->
 
  </head>

  <!--Body-->
  <body>
  
    <!--Color Switcher-->
    <div class="color-switcher group animated">
        <div class="toggle"><i class="fa fa-cog"></i></div>
        <div class="color">
        <a class="current" style="background-image:url(color-switcher/img/default.png);" href="#" data-color="default"></a>
        <span>#2ba8db<br>#a3c756</span>
      </div>
        <div class="color">
        <a style="background-image:url(color-switcher/img/scheme2.png);" href="#" data-color="scheme2"></a>
        <span>#a1b0ca<br>#e7807f</span>
      </div>
        <div class="color">
        <a style="background-image:url(color-switcher/img/scheme3.png);" href="#" data-color="scheme3"></a>
        <span>#4bb5c1<br>#bfa995</span>
      </div>
        <div class="color">
        <a style="background-image:url(color-switcher/img/scheme4.png);" href="#" data-color="scheme4"></a>
        <span>#73cbbe<br>#c7b07b</span>
      </div>
    </div><!--Color Switcher End-->
  
    <!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <h2>Login or <a href="register.html">Register</a></h2>
            <p class="large">Use social accounts</p>
            <div class="social-login">
                <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                <a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
                <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
            </div>
          </div>
          <div class="modal-body">
          <form class="login-form" novalidate="novalidate">
            <div class="form-group group">
                <label for="log-email">Email</label>
              <input type="email" class="form-control" name="log-email" id="log-email" placeholder="Enter your email" required="">
              <a class="help-link" href="#">Forgot email?</a>
            </div>
            <div class="form-group group">
                <label for="log-password">Password</label>
              <input type="text" class="form-control" name="log-password" id="log-password" placeholder="Enter your password" required="">
              <a class="help-link" href="#">Forgot password?</a>
            </div>
            <div class="checkbox">
              <label><div class="icheckbox" style="position: relative;"><input type="checkbox" name="remember" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember me</label>
            </div>
            <input class="btn btn-success" type="submit" value="Login">
          </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Header-->
    <header data-offset-top="500" data-stuck="600" class=""><!--data-offset-top is when header converts to small variant and data-stuck when it becomes visible. Values in px represent position of scroll from top. Make sure there is at least 100px between those two values for smooth animation-->
    
      <!--Search Form-->
      <form class="search-form closed" method="get" role="form" autocomplete="off">
        <div class="container">
          <div class="close-search"><i class="icon-delete"></i></div>
            <div class="form-group">
              <label class="sr-only" for="search-hd">Search for procuct</label>
              <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Search for procuct">
              <button type="submit"><i class="icon-magnifier"></i></button>
          </div>
        </div>
      </form>
      
        <!--Split Background-->
        <div class="left-bg"></div>
        <div class="right-bg"></div>
      
        <div class="container">
        <a class="logo" href="index.html"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/logo.png" alt="Bushido"></a>
        
        <!--Language / Currency Switchers-->
        <ul class="switchers">
            <li>$
            <ul class="dropdown">
              <li><a href="#">€</a></li>
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
        </ul>
      
        <!--Mobile Menu Toggle-->
        <div class="menu-toggle"><i class="fa fa-list"></i></div>
        <div class="mobile-border"><span></span></div>
        
        <!--Main Menu-->
        <nav class="menu">
          <ul class="main">
            <li class="has-submenu"><a href="index.html">Home<i class="fa fa-chevron-down"></i></a><!--Class "has-submenu" for proper highlighting and dropdown-->
                <ul class="submenu">
                <li><a href="index.html">Home - Slideshow</a></li>
                <li><a href="home-fullscreen.html">Home - Fullscreen Slider</a></li>
                <li><a href="home-showcase.html">Home - Product Showcase</a></li>
                <li><a href="home-categories.html">Home - Categories Slider</a></li>
                <li><a href="home-offers.html">Home - Special Offers</a></li>
              </ul>
            </li>
            <li class="has-submenu"><a href="shop-filters-left-3cols.html">Shop<i class="fa fa-chevron-down"></i></a>
                <ul class="submenu">
                <li><a href="shop-filters-left-3cols.html">Shop - Filters Left 3 Cols</a></li>
                <li><a href="shop-filters-left-2cols.html">Shop - Filters Left 2 Cols</a></li>
                <li><a href="shop-filters-right-3cols.html">Shop - Filters Right 3 Cols</a></li>
                <li><a href="shop-filters-right-2cols.html">Shop - Filters Right 2 Cols</a></li>
                <li><a href="shop-no-filters-4cols.html">Shop - No Filters 4 Cols</a></li>
                <li><a href="shop-no-filters-3cols.html">Shop - No Filters 3 Cols</a></li>
                <li><a href="shop-single-item-v1.html">Shop - Single Item Vers 1</a></li>
                <li><a href="shop-single-item-v2.html">Shop - Single Item Vers 2</a></li>
                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout Page</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
              </ul>
            </li>
            <li class="has-submenu"><a href="blog-sidebar-right.html">Blog<i class="fa fa-chevron-down"></i></a>
                <ul class="submenu">
                <li><a href="blog-sidebar-left.html">Blog - Sidebar Left</a></li>
                <li><a href="blog-sidebar-right.html">Blog - Sidebar Right</a></li>
                <li><a href="blog-single.html">Blog - Single Post</a></li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#">Pages<span class="label">NEW</span><i class="fa fa-chevron-down"></i></a>
                <ul class="submenu">
                <li><a href="register.html">Login / Registration</a></li>
                <li><a href="account-personal-info.html">Account: Personal Info<span class="label">NEW</span></a></li>
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
            <li class="has-submenu"><a href="shop-filters-left-3cols.html">Phones<i class="fa fa-chevron-down"></i></a>
                <ul class="submenu">
                <li><a href="#">Nokia</a></li>
                <li class="has-submenu"><a href="#">iPhone</a><!--Class "has-submenu" for adding carret and dropdown-->
                    <ul class="sub-submenu">
                    <li><a href="#">iPhone 4</a></li>
                    <li><a href="#">iPhone 4s</a></li>
                    <li><a href="#">iPhone 5c</a></li>
                    <li><a href="#">iPhone 5s</a></li>
                  </ul>
                </li>
                <li><a href="#">HTC</a></li>
                <li class="has-submenu"><a href="#">Samsung</a>
                    <ul class="sub-submenu">
                    <li><a href="#">Galaxy Note 3</a></li>
                    <li><a href="#">Galaxy S5</a></li>
                    <li><a href="#">Galaxy S3 Neo</a></li>
                    <li><a href="#">Galaxy Gear</a></li>
                    <li><a href="#">Galaxy S Duos 2</a></li>
                  </ul>
                </li>
                <li><a href="#">BlackBerry</a></li>
                <li class="offer">
                    <div class="col-1">
                    <p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="col-2">
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/offers/menu-drodown-offer.jpg" alt="Special Offer">
                    <a class="btn btn-block" href="#"><span>584$</span>Special offer</a>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="shop-filters-left-3cols.html">Cameras</a></li>
            <li><a href="shop-filters-left-3cols.html">Personal computers</a></li>
            <li><a href="shop-filters-left-3cols.html">Gaming consoles</a></li>
            <li><a href="shop-filters-left-3cols.html">TV sets</a></li>
          </ul>
        </nav>
        
        <!--Toolbar-->
        <div class="toolbar group">
          <button class="search-btn btn-outlined-invert"><i class="icon-magnifier"></i></button>
          <div class="middle-btns">
            <a class="btn-outlined-invert" href="wishlist.html"><i class="icon-heart"></i> <span>Wishlist</span></a>
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i> <span>Login</span></a>
          </div>
          <div class="cart-btn">
            <a class="btn btn-outlined-invert" href="shopping-cart.html"><i class="icon-shopping-cart-content"></i><span>3</span></a>
            
            <!--Cart Dropdown-->
            <div class="cart-dropdown">
              <span></span><!--Small rectangle to overlap Cart button-->
              <div class="body">
                <table>
                  <tbody><tr>
                    <th>Items</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>
                  <tr class="item">
                    <td><div class="delete"></div><a href="#">Good Joo-Joo Surfb</a></td>
                    <td><input type="text" value="1"></td>
                    <td class="price">89 005 $</td>
                  </tr>
                  <tr class="item">
                    <td><div class="delete"></div><a href="#">Good Joo-Joo Item</a></td>
                    <td><input type="text" value="2"></td>
                    <td class="price">4 300 $</td>
                  </tr>
                  <tr class="item">
                    <td><div class="delete"></div><a href="#">Good Joo-Joo</a></td>
                    <td><input type="text" value="5"></td>
                    <td class="price">84 $</td>
                  </tr>
                </tbody></table>
              </div>
              <div class="footer group">
                <div class="buttons">
                  <a class="btn btn-outlined-invert" href="checkout.html"><i class="icon-download"></i>Checkout</a>
                  <a class="btn btn-outlined-invert" href="shopping-cart.html"><i class="icon-shopping-cart-content"></i>To cart</a>
                </div>
                <div class="total">93 389 $</div>
              </div>
            </div><!--Cart Dropdown Close-->
          </div>
        </div><!--Toolbar Close-->
      </div>
    </header><!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
        <!--Hero Slider-->
      <section class="hero-slider" style="position: relative;">
        <div class="master-slider ms-wk" id="hero-slider" style="margin: 0px; width: 1316px; visibility: visible; opacity: 1;"><div class="ms-container"><div class="ms-inner-controls-cont" style="max-width: 1140px;"><div class="ms-view ms-basic-view" style="width: 1316px; height: 455px; left: -88px;"><div class="ms-slide-container" style="transform: translateX(-1316px) translateZ(0px);"><div class="ms-slide" data-delay="7" style="width: 1316px; height: 455px; left: 2632px;">
            <div class="overlay"></div>
            
            
            
            
          <div class="ms-slide-bgcont" style="height: 100%; opacity: 1;"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/hero/slideshow/slide_3.jpg" alt="3D Printer" style="width: 1316px; height: 822.5px; margin-top: -184px; margin-left: 0px;"></div><div class="ms-slide-layers" style="left: 88px; max-width: 1140px;"><div class="ms-anim-layers" style="opacity: 1; display: none;"><h2 style="width: 456px; left: 110px; top: 110px; margin: 8px 0px 24px; padding: 0px; font-size: 68px; line-height: 82px; display: none;" class="light-color ms-layer">3D Printer</h2><p style="width: 456px; left: 110px; top: 210px; margin: 0px 0px 24px; padding: 0px; font-size: 14px; line-height: 23px; display: none;" class="light-color ms-layer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p><div style="left: 110px; top: 300px; margin: 0px; padding: 0px; font-size: 16px; line-height: 22px; display: none;" class="ms-layer button"><a class="btn btn-primary" href="#"><span>2500$</span>Buy it now</a></div></div></div></div><div class="ms-slide" data-delay="7" style="width: 1316px; height: 455px; left: 0px;">
            <div class="overlay"></div>
            
            
            
            
          <div class="ms-slide-bgcont" style="height: 100%; opacity: 1;"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/hero/slideshow/slide_1.jpg" alt="Nikon D4S" style="width: 1316px; height: 822.5px; margin-top: -184px; margin-left: 0px;"></div><div class="ms-slide-layers" style="left: 88px; max-width: 1140px;"><div class="ms-anim-layers" style="opacity: 1; display: none;"><h2 style="width: 456px; left: 110px; top: 110px; margin: 8px 0px 24px; padding: 0px; font-size: 68px; line-height: 82px; display: none;" class="light-color ms-layer">Nikon D4S</h2><p style="width: 456px; left: 110px; top: 210px; margin: 0px 0px 24px; padding: 0px; font-size: 14px; line-height: 23px; display: none;" class="light-color ms-layer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p><div style="left: 110px; top: 300px; margin: 0px; padding: 0px; font-size: 16px; line-height: 22px; display: none;" class="ms-layer button"><a class="btn btn-primary" href="#"><span>1845$</span>Buy it now</a></div></div></div></div><div class="ms-slide ms-sl-selected" data-delay="7" style="width: 1316px; height: 455px; left: 1316px;">
            <span class="overlay"></span>
            
            
            
            
          <div class="ms-slide-bgcont" style="height: 100%; opacity: 1;"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/hero/slideshow/slide_2.jpg" alt="Nest" style="width: 1316px; height: 822.5px; margin-top: -184px; margin-left: 0px;"></div><div class="ms-slide-layers" style="left: 88px; max-width: 1140px;"><div class="ms-anim-layers" style=""><h2 style="width: 456px; left: 110px; top: 110px; margin: 8px 0px 24px; padding: 0px; font-size: 68px; line-height: 82px;" class="light-color ms-layer">Nest</h2><p style="width: 456px; left: 110px; top: 210px; margin: 0px 0px 24px; padding: 0px; font-size: 14px; line-height: 23px;" class="light-color ms-layer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p><div style="left: 110px; top: 300px; margin: 0px; padding: 0px; font-size: 16px; line-height: 22px; transform-origin: right bottom 0px;" class="ms-layer button"><a class="btn btn-primary" href="#"><span>1640$</span>Buy it now</a></div></div></div></div></div></div><div class="ms-nav-next ms-ctrl-hide" style="opacity: 0;"></div><div class="ms-nav-prev ms-ctrl-hide" style="opacity: 0;"></div><div class="ms-bullets ms-dir-h ms-ctrl-hide" style="opacity: 0; width: 66px;"><div class="ms-bullets-count"><div class="ms-bullet" style="margin: 5px;"></div><div class="ms-bullet ms-bullet-selected" style="margin: 5px;"></div><div class="ms-bullet" style="margin: 5px;"></div></div></div></div></div>
        
            <!--Slide 1-->
            
          
            <!--Slide 2-->
            
          
            <!--Slide 3-->
            
          
        </div>
      </section><!--Hero Slider Close-->
    
        <!--Categories-->
      <section class="cat-tiles">
        <div class="container">
            <h2>Browse categories</h2>
            <div class="row">
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/categories/1.jpg" alt="1">
                <p>Category name</p>
              </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/categories/2.jpg" alt="2">
                <p>Category name</p>
              </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/categories/3.jpg" alt="3">
                <p>Category name</p>
              </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/categories/4.jpg" alt="4">
                <p>Category name</p>
              </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/categories/5.jpg" alt="5">
                <p>Category name</p>
              </a>
            </div>
            <!--Category-->
            <div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <a href="#">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/categories/6.jpg" alt="5">
                <p>Category name</p>
              </a>
            </div>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/1.jpg" alt="1"></a>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/2.jpg" alt="2"></a>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/3.jpg" alt="3"></a>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/4.jpg" alt="4"></a>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/5.jpg" alt="5"></a>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/6.jpg" alt="6"></a>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/7.jpg" alt="7"></a>
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
                <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/catalog/tiles/8.jpg" alt="8"></a>
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
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/1.jpg" alt="1">
                  </a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Hedadset for iPhone<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/2.jpg" alt="2">
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/3.jpg" alt="3">
                  </a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/4.jpg" alt="4">
                  </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$24.15</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/5.jpg" alt="5">
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
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/6.jpg" alt="6">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/7.jpg" alt="7">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/8.jpg" alt="8">
                  </a>
                </div>
              </div>
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$14.95</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/9.jpg" alt="9">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/10.jpg" alt="10">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a class="media-link" href="#">
                    <div class="overlay">
                        <div class="descr"><div>Product Name<span>$19.40</span></div></div>
                    </div>
                    <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/media/11.jpg" alt="11">
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
                      <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/posts-widget/1.jpg" alt="1"></a>
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
                      <a href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/posts-widget/2.jpg" alt="2"></a>
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
          <div class="gallery-grid shuffle" style="position: relative; height: 584px; transition: height 250ms ease-out 0s;">
            <!--Item-->
            <div class="gallery-item shuffle-item filtered" data-groups="[&quot;camera&quot;]" data-src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/1.jpg" style="position: absolute; top: 0px; left: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
              <a href="img/gallery-widget/1.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/th_1.jpg" alt="1">
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item shuffle-item filtered" data-groups="[&quot;camera&quot;]" data-src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/2.jpg" style="position: absolute; top: 0px; left: 0px; transform: translate3d(380px, 0px, 0px) scale3d(1, 1, 1); opacity: 1; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
              <a href="img/gallery-widget/2.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/th_2.jpg" alt="2">
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item shuffle-item filtered" data-groups="[&quot;video&quot;]" data-src="https://www.youtube.com/watch?v=hdEAWW7tZSA" style="position: absolute; top: 0px; left: 0px; transform: translate3d(760px, 0px, 0px) scale3d(1, 1, 1); opacity: 1; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
              <a href="https://www.youtube.com/watch?v=hdEAWW7tZSA">
                <div class="overlay"><span><i class="icon-music-play"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/th_3.jpg" alt="3">
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item shuffle-item filtered" data-groups="[&quot;lenses&quot;]" data-src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/4.jpg" style="position: absolute; top: 0px; left: 0px; transform: translate3d(0px, 292px, 0px) scale3d(1, 1, 1); opacity: 1; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
              <a href="img/gallery-widget/4.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/th_4.jpg" alt="4">
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item shuffle-item filtered" data-groups="[&quot;flash&quot;]" data-src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/5.jpg" style="position: absolute; top: 0px; left: 0px; transform: translate3d(380px, 292px, 0px) scale3d(1, 1, 1); opacity: 1; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
              <a href="img/gallery-widget/5.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/th_5.jpg" alt="5">
              </a>
            </div>
            <!--Item-->
            <div class="gallery-item shuffle-item filtered" data-groups="[&quot;flash&quot;]" data-src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/6.jpg" style="position: absolute; top: 0px; left: 0px; transform: translate3d(760px, 292px, 0px) scale3d(1, 1, 1); opacity: 1; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
              <a href="img/gallery-widget/6.jpg">
                <div class="overlay"><span><i class="icon-expand"></i></span></div>
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/gallery-widget/th_6.jpg" alt="6">
              </a>
            </div>
          </div>
        </div>
      </section><!--Gallery Widget Close-->
      
      <!--Brands Carousel Widget-->
      <section class="brand-carousel">
        <div class="container">
            <h2>Brands in our shop</h2>
          <div class="inner owl-carousel" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2268px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 189px;"><a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/brands/jquery.png" alt="jQuery"></a></div><div class="owl-item" style="width: 189px;"><a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/brands/wp.png" alt="WordPress"></a></div><div class="owl-item" style="width: 189px;"><a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/brands/woo.png" alt="WooCommerce"></a></div><div class="owl-item" style="width: 189px;"><a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/brands/android.png" alt="Android"></a></div><div class="owl-item" style="width: 189px;"><a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/brands/macgasm.png" alt="Macgasm"></a></div><div class="owl-item" style="width: 189px;"><a class="item" href="#"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/brands/dropbox.png" alt="Dropbox"></a></div></div></div>
            
            
            
            
            
          <div class="owl-controls"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div>
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
            <form class="subscr-form" role="form" action="//8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=d704057a31" target="_blank" method="post" autocomplete="off" novalidate="novalidate">
              <div class="form-group">
                <label class="sr-only" for="subscr-name">Enter name</label>
                <input type="text" class="form-control" name="FNAME" id="subscr-name" placeholder="Enter name" required="">
                <button class="subscr-next"><i class="icon-arrow-right"></i></button>
              </div>
              <div class="form-group fff" style="display: none">
                <label class="sr-only" for="subscr-email">Enter email</label>
                <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Enter email" required="">
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
    <footer class="footer">
        <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="info">
              <a class="logo" href="index.html"><img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/logo.png" alt="Bushido"></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              <div class="social">
                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a>
                <a href="#" target="_blank"><i class="fa fa-tumblr-square"></i></a>
                <a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a>
                <a href="#" target="_blank"><i class="fa fa-pinterest-square"></i></a>
                <a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <h2>Latest news</h2>
            <ul class="list-unstyled">
                <li>25 May <a href="#">Nemo enim ipsam voluptatem</a></li>
                <li>01 May <a href="#">Neque porro quisquam est</a></li>
                <li>16 Apr <a href="#">Lorem ipsum dolor sit amet</a></li>
                <li>10 Jan <a href="#">Sed ut perspiciatis unde</a></li>
            </ul>
          </div>
          <div class="contacts col-lg-3 col-md-3 col-sm-3">
            <h2>Contacts</h2>
            <p class="p-style3">
                4120 Lenox Avenue, New York, NY,<br>
              10035 76 Saint Nicholas Avenue<br>
              <a href="mailto:mail@bushido.com">mail@bushido.com</a><br>
              +48 543765234<br>
              +48 555 234 54 34<br>
            </p>
          </div>
        </div>
        <div class="copyright">
            <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
              <p>© 2014 BUSHIDO. All Rights Reserved. Designed by <a href="http://8guild.com/" target="_blank">8Guild</a></p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="payment">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/payment/visa.png" alt="Visa">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/payment/paypal.png" alt="PayPal">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/payment/master.png" alt="Master Card">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/payment/discover.png" alt="Discover">
                <img src="{{URL::to('public/frontend/ecommerce')}}/assets/img/payment/amazon.png" alt="Amazon">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer><!--Footer Close-->
    
    <!--Javascript (jQuery) Libraries and Plugins-->
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/libs/jquery-1.11.1.min.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/libs/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/libs/jquery.easing.min.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/bootstrap.min.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/smoothscroll.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/jquery.validate.min.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/icheck.min.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/jquery.placeholder.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/jquery.stellar.min.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/jquery.touchSwipe.min.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/jquery.shuffle.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/lightGallery.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/owl.carousel.min.js"></script>
    <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/plugins/masterslider.min.js"></script>
    <script src="mailer/mailer.js"></script>
        <script src="{{URL::to('public/frontend/ecommerce')}}/assets/js/scripts.js"></script>
    <script src="color-switcher/color-switcher.js"></script>

    
  

</body><!--Body Close--></html>