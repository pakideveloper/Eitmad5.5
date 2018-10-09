<!doctype html>
<html>
  
<!-- Mirrored from template.8guild.com/bushido/v1.4/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:25 GMT -->
<head>
    <meta charset="utf-8">
    <title>Single-Blog - Eitmad</title>
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
 
  </head>

  <!--Body-->
  <body>
  
  	<!--Color Switcher-->
    <div class="color-switcher group animated">
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
    </div><!--Color Switcher End-->
  
  	<!--Login Modal-->
    @include('frontend/ecommerce/include/login')
    <!-- /.modal -->

    <!--Header-->
    @include('frontend/ecommerce/include/header')
    <!--Header Close-->
    
    <!--Page Content-->
    <div class="page-content">
    
      <!--Breadcrumbs-->
      <ol class="breadcrumb">
        <li><a href="{{URL::to('public/frontend/ecommerce/assets')}}/index.html">Home</a></li>
        <li>Single blog post</li>
      </ol><!--Breadcrumbs Close-->
      
      <!--Blog Single-->
      <section class="blog">
      	<div class="container">
        	<div class="row">
          
          	<!--Left Column-->
          	<div class="col-lg-9 col-md-9">
            	<h2 class="title">Single blog post</h2>
              <!--Post-->
              <div class="post">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/blog/blog_01.jpg" alt="Blog post"/>
                <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <footer>
                  <div class="share">
                  	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-twitter"></i></a>
                  	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-facebook-square"></i></a>
                  	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-pinterest-square"></i></a>
                  	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><i class="fa fa-envelope"></i></a>
                  </div>
                  <ul class="meta">
                 		<li><i class="fa fa-user"></i><a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">By Bedismo</a></li>
                    <li><i class="fa fa-calendar"></i><a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">12.02.2014</a></li>
                 	</ul>
                </footer>
             </div>
             
             <!--Disqus Comments Plugin-->
             <div class="comments-block">
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
                <noscript>Please enable JavaScript to view the <a href="{{URL::to('public/frontend/ecommerce/assets')}}/http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="{{URL::to('public/frontend/ecommerce/assets')}}/http://disqus.com/" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
             </div>
            </div>
            
            <!--Sidebar-->
            <div class="col-lg-3 col-md-3">
            	<!--Search Widget-->
              <h3>Search the blog</h3>
              <form class="sidebar-search">
              	<input type="text" class="form-control" name="search-blog" placeholder="Search">
                <button type="submit"></button>
              </form>
            	<!--Tags-->
              <h3>Tags</h3>
              <div class="tags">
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Bushido</a>, 
                <a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">theme</a>, 
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">HTML5</a>, 
                <a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">premium</a>, 
                <a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">shopping</a>, 
              	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">e-commerce</a> 
              </div>
              <!--Latest posts-->
              <h3>Latest posts</h3>
              <div class="latest-posts">
              	<div class="post">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">New awesome theme out there...</a>
                  <div class="meta">
                  	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Comments <span>(34)</span></a>
                    <span class="date">12.02.2014</span>
                  </div>
                </div>
              	<div class="post">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Lorem ipsum dolor sit amet...</a>
                  <div class="meta">
                  	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Comments <span>(22)</span></a>
                    <span class="date">12.02.2014</span>
                  </div>
                </div>
              	<div class="post">
                	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Anim pariatur cliche reprehenderit...</a>
                  <div class="meta">
                  	<a href="{{URL::to('public/frontend/ecommerce/assets')}}/#">Comments <span>(81)</span></a>
                    <span class="date">12.02.2014</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--Blog Single Close-->
      
      <!--Brands Carousel Widget-->
      <section class="brand-carousel">
      	<div class="container">
        	<h2>Brands in our shop</h2>
          <div class="inner">
          	<a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/jquery.png" alt="jQuery"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/wp.png" alt="WordPress"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/woo.png" alt="WooCommerce"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/android.png" alt="Android"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/macgasm.png" alt="Macgasm"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/dropbox.png" alt="Dropbox"/></a>
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

<!-- Mirrored from template.8guild.com/bushido/v1.4/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Aug 2018 05:04:25 GMT -->
</html>
