<?php
  $companies = App\Company::all();
?>
 <section class="brand-carousel">
        <div class="container">
          <h2>Companies Registered</h2>
          <div class="inner" />
            @foreach($companies as $company)
            <a class="item img-circle thumb-sm" href="{{URL::to('public/admin/upload')}}/{{$company->company_logo}}"><img class="b_img" src="{{URL::to('public/JobPortal_Frontend/assets/images/company')}}/{{$company->company_logo}}" alt="jQuery"/></a>
            @endforeach 
           <!--  <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/wp.png" alt="WordPress"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/dropbox.png" alt="Dropbox"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/woo.png" alt="WooCommerce"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/android.png" alt="Android"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/macgasm.png" alt="Macgasm"/></a>
            <a class="item" href="{{URL::to('public/frontend/ecommerce/assets')}}/#"><img src="{{URL::to('public/frontend/ecommerce/assets')}}/img/brands/dropbox.png" alt="Dropbox"/></a> -->
          </div>
        </div>
      </section>