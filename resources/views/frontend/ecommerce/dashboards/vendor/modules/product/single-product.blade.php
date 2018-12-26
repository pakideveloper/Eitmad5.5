@include('frontend.ecommerce.dashboards.vendor.include.header')
<style type="text/css">
.carousel-item{
text-align: center;
}
.ml-sm-auto{
padding: 70px;
}
.image{
border: 1px solid #e0e0e0;
border-radius: 9px;
/*box-shadow: blue;*/
box-shadow: 4px 4px #f7f7f7;
}
.carousel-control-next{
background-color: #717171;
}
.carousel-control-prev{
background-color: #717171;
}
.carousel-indicators > li{
background-color: #b8b8b8;
}
.carousel-indicators > .active{
background-color: #343a40;
}
.nav-item{
text-align: center;
padding: 0px;
}
.tabs{
padding-top: 10px;
}
.deleteLink{
  color: red;
}
.carousel-item > img{
  max-height: 390px;
}.old-price{
  display: inline-block;
    margin: 0 15px 10px 0;
    font-size: 1.375em;
    color: #b2b2b2;
    font-weight: 900;
    text-decoration: line-through;
}
.price{
      display: inline-block;
    margin: 0 15px 10px 0;
    font-size: 1.75em;
    font-weight: 900;
}
</style>
<div class="container-fluid">
  <div class="row">
    @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
      </div> -->
      <div class="row">
        <div class="col-md-6 image">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              @foreach($product->files as $key=>$file)
              @if($key==0)
              <li data-target="#demo" data-slide-to="{{$key}}" class="active"></li>
              @else
              <li data-target="#demo" data-slide-to="{{$key}}"></li>
              @endif
              @endforeach
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$product->title_image->product_file_name}}" alt="Los Angeles">
              </div>
              @foreach($product->files as $file)
                @if($file->id != $product->title_img_id)
              <div class="carousel-item">
                <img src="{{URL::to('public/admin/ecommerce/upload/products')}}/{{$file->product_file_name}}" alt="Chicago">
              </div>
                @endif
              @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <h1>{{$product->product_name}}</h1>
          <span class="old-price">Rs. {{$product->product_price}}</span>
          <span class="price">Rs. {{$product->product_discounted_price}}</span>
          <div class="description">
            <?php
            if(strlen($product->product_description)>200){
            $description = substr($product->product_description, 0, 200).'...';
            }
            else
            {
            $description = $product->product_description;
            }
            ?>
            <p>{{$description}}</p>
            <a href="{{url('ecommerce/vendor/product')}}/{{\Crypt::encrypt($product->id)}}/edit">Edit</a>
            <form id="delete-form{{$product->id}}"
              action="{{url('ecommerce/vendor/product')}}/{{$product->id}}" method="post">
              {{csrf_field() }}
              {{ method_field('DELETE') }}
              
              <span  onclick="return deleteProduct({{$product->id}});"  style="cursor: pointer;     color: red;">Delete</span>
            </form>
          </div>
        </div>
        <div class="col-md-12 tabs">
          <ul class="nav nav-tabs">
            <li class="nav-item col-md-4">
              <a class="nav-link active" data-toggle="tab" href="#home">Tech Specs</a>
            </li>
            <li class="nav-item col-md-4">
              <a class="nav-link" data-toggle="tab" href="#menu1">Description</a>
            </li>
            <li class="nav-item col-md-4">
              <a class="nav-link" data-toggle="tab" href="#menu2">Reviews</a>
            </li>
          </ul>
          <?php
          $names = json_decode($product->category->feature_names);
          $values = json_decode($product->other_features);
          $border = round(count($names)/2);
          ?>
          <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
              <div class="container">
                <div class="row">
                  <!--Column 1-->
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <!--Item-->
                    @foreach($names as $key=>$name )
                    @if($key <= $border)
                    <div class="item" style="border-bottom-color: #a3c756;
                      border: 1px solid #2ba8db;
                      margin-bottom: 6px;
                      padding-left: 10px;
                      padding-bottom: 3px;
                      padding-top: 0px;
                      border-radius: 4px;">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3"><span>{{$name}}</span></div>
                        <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2"> <?php $kee = preg_replace('/\s+/', '', $name)?> {{$values->$kee}}</p></div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                    
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    @foreach($names as $key=>$name )
                    @if($key > $border)
                    <div class="item" style="border-bottom-color: #a3c756;
                      border: 1px solid #2ba8db;
                      margin-bottom: 6px;
                      padding-left: 10px;
                      padding-bottom: 3px;
                      padding-top: 0px;
                      border-radius: 4px;">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3"><span>{{$name}}</span></div>
                        <div class="col-lg-8 col-md-8 col-sm-9"><p class="p-style2"><?php $kee = preg_replace('/\s+/', '', $name)?> {{$values->$kee}}</p></div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                    
                  </div>
                </div>
              </div>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
              {{$product->product_description}}
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
              <h3>Menu 2</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
          </div>
        </div>
      </div>
      
    </main>
  </div>
</div>
</div>
@include('frontend.ecommerce.dashboards.vendor.include.footer')