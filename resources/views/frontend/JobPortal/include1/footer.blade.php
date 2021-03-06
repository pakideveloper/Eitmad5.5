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
</section>
<!--Subscription Widget Close-->
 <!-- Footer -->
   <footer class="footer">
    	<div class="container">
      	<div class="row">
        	<div class="col-lg-5 col-md-5 col-sm-5">
          	<div class="info">
              <!-- <a class="logo" href="index.html"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/logo.png" alt="Bushido"/></a> -->
              <a class="logo" href="http://localhost/Eitmad5.5/home" style="font-size: 63px; top: 8px; left: 18px; padding-bottom: 3px;"><!-- <img src="http://localhost/Eitmad5.5/public/frontend/ecommerce/assets/img/logo.png" alt="Bushido"/> --><span style="
          color: #4dfb4d;">E</span><span style="color: #a772ff;">i</span><span>t</span><span style="color: red;">m</span><span style="color: yellow;">a</span><span>d</span></a>
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
            	4120 Lenox Avenue, New York, NY,<br/>
              10035 76 Saint Nicholas Avenue<br/>
              <a href="mailto:mail@bushido.com">mail@bushido.com</a><br/>
              +48 543765234<br/>
              +48 555 234 54 34<br/>
            </p>
          </div>
        </div>
        <div class="copyright">
        	<div class="row">
          	<div class="col-lg-7 col-md-7 col-sm-7">
              <p>&copy; 2018 ITFALCONS. All Rights Reserved. Designed by <a href="http://itfalcons.com/" target="_blank">ITFALCONS</a></p>
            </div>
          	<div class="col-lg-5 col-md-5 col-sm-5">
            	<div class="payment">
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/visa.png" alt="Visa"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/paypal.png" alt="PayPal"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/master.png" alt="Master Card"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/discover.png" alt="Discover"/>
                <img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/payment/amazon.png" alt="Amazon"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer Close-->