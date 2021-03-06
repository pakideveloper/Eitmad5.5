@include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.header')
<div class="container-fluid">
  <div class="row">
    @include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.left-sidebar')
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Product</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
      </div>
    </div>
    <div class="row">
      @foreach($products as $product)
      <div class="col-md-3 col-sm-6 col-xs-12 product">
        <span class="discount">{{$product->discount->discount_percent}}%</span>
        <img src="http://localhost/Eitmad5.5/public/admin/ecommerce/upload/products/{{$product->title_image->product_file_name}}" >
        <hr>
        <h5><a href="{{url('ecommerce/user/addproduct')}}/{{$product->id}}">{{$product->product_name}}</a></h5>
        <strike>Rs.{{$product->product_price}}</strike>
        <span class="price">Rs.{{$product->product_discounted_price}}</span>
      </div>
      @endforeach  
    </div>
    
  </main>
  </div>
</div>
</div>
@include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.footer')