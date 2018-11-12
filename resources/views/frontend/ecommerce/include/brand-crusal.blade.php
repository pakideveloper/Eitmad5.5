<?php
  $brands = App\Brand::all();
?>
 <section class="brand-carousel">
        <div class="container">
          <h2>Brands in our shop</h2>
          <div  class="inner">
            @foreach($brands as $brand)
            <a style="height: 100px;" class="item img-circle thumb-sm" href="{{URL::to('public/admin/upload')}}/{{$brand->brand_logo}}">
            <img style="max-width: 100%; max-height: 100%; border-radius: 50%; object-fit: contain;" class="b_img" src="{{URL::to('public/admin/upload/brands')}}/{{$brand->brand_logo}}" alt="jQuery"/></a>
            @endforeach 
          </div>
        </div>
      </section>