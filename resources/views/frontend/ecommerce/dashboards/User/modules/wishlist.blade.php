@include('frontend.ecommerce.dashboards.User.include.header')
<div class="container-fluid">
  <div class="row">
    @include('frontend.ecommerce.dashboards.User.include.left-sidebar')
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px; background-color: #ffb6b7;
    border-color: #d67474;
    color: #ffffff;">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All WishList Product</h1>
      <!-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
      </div> -->
    </div>
    <div class="row">
      @foreach($wishlists as $wproducts)
      <div class="col-md-3 col-sm-6 col-xs-12 product">
        <span class="discount">{{$wproducts->product->discount->discount_percent}}%</span>
        <img src="http://localhost/Eitmad5.5/public/admin/ecommerce/upload/products/{{$wproducts->product->title_image->product_file_name}}" width="190px" height="190px" >
        <hr>
        <h5><a href="{{url('ecommerce/single-product')}}/{{$wproducts->product->slug}}">{{$wproducts->product->product_name}}</a></h5>
        <strike>Rs.{{$wproducts->product->product_price}}</strike>
        <span class="price">Rs.{{$wproducts->product->product_discounted_price}}</span>
         <div >
          <form id="delete-form{{$wproducts->product->id}}" 
        action="{{url('/ecommerce/user/deleteWishlist')}}/{{$wproducts->product->id}}" method="post">
              {{csrf_field() }}
             
          <a onclick="return deleteWishlist({{$wproducts->product->id}});" style="cursor: pointer;" >Remove</a></div> 
        </form>
      </div>

      @endforeach 

    </div>
    
  </main>
  </div>
</div>
</div>
@include('frontend.ecommerce.dashboards.User.include.footer')