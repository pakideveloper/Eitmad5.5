@include('frontend.ecommerce.dashboards.vendor.include.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.btn.focus, .btn:focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
}
</style>
<div class="container-fluid">
  <div class="row">
    @include('frontend.ecommerce.dashboards.vendor.include.left-sidebar')
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
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
    <div id="btnContainer" style="padding-bottom: 11px;">
  <button class="btn active" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
    <div class="row" id="gridViewDiv" style="display: none;">
      @foreach($products as $product)
      <div class="col-md-3 col-sm-6 col-xs-12 product">
        <span class="discount">{{$product->discount->discount_percent}}%</span>
        <img src="http://localhost/Eitmad5.5/public/admin/ecommerce/upload/products/{{$product->title_image->product_file_name}}" >
        <hr>
        <h5><a href="{{url('ecommerce/vendor/product')}}/{{\Crypt::encrypt($product->id)}}">{{$product->product_name}}</a></h5>
        <strike>Rs.{{$product->product_price}}</strike>
        <span class="price">Rs.{{$product->product_discounted_price}}</span>
      </div>
      @endforeach  
    </div>
    <div class="row" id="listViewDiv">
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Product size</th>
      <th scope="col">Product Colour</th>
      
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Discounted Price</th>
      <th scope="col">product Sub_Category</th>
      <th scope="col">Product Brand</th>
      <th scope="col">Product Features</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
$i = 1;

     ?>
    @foreach($products as $product)
    
    <tr>
      <td scope="row">{{$i++}}</td>
      <td>{{$product->product_name}}</td>
     
      <td><a data-toggle="modal" data-target="#description{{$product->id}}" style="cursor: pointer;color: red;text-decoration: underline;">Tap here</a></td>

      <div class="modal fade" id="description{{$product->id}}" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="display: block;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" >Product Description</h4>
            </div>
            <div class="modal-body">
              <div class="form-group" style="margin: 0px;">
                          
                <div class="col-xs-12">
                              {{$product->product_description}}
                              <!-- <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Your product name" value=""  title="enter your first n if any."> -->
                </div>
              </div>
                      
                      
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      
      </div>


      <td>{{$product->product_size}}</td>
       <td>{{$product->product_colour}}</td>
      
      <td>{{$product->product_price}}</td>
      <td>{{$product->product_quantity}}</td>
       <td>{{$product->product_discounted_price}}</td>
      <td>{{$product->category->sub_category_name}}</td>
       <td>{{$product->brand->brand_name}}</td>
      
      <td><a data-toggle="modal" data-target="#features{{$product->id}}" style="cursor: pointer;color: red;text-decoration: underline;">Tap here</a></td>

      <div class="modal fade" id="features{{$product->id}}" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="display: block;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" >Product Features</h4>
            </div>
            <div class="modal-body">
              <div class="form-group" style="margin: 0px;">
                <div class="col-xs-12">
                              {{$product->other_features}}
                              <!-- <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Your product name" value=""  title="enter your first n if any."> -->
                </div>
              </div>
                      
                      
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      
      </div>
    
    
    
      <td>
                                                            <a href="{{url('/ecommerce/user/addproduct')}}/{{$product->id}}/edit"  style="float: left;">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                           <form id="delete-form{{$product->id}}" 
                                                                action="{{url('/ecommerce/user/addproduct')}}/{{$product->id}}" method="post">
                                                                {{csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                 
                                                                <i  onclick="return deleteProduct({{$product->id}});" class="fa fa-trash-o" style="cursor: pointer;"></i>
                                                            
                                                            </form>
                                                            
                                                           
                                                        </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
    </div>
    
  </main>
  </div>
</div>
</div>
@include('frontend.ecommerce.dashboards.vendor.include.footer')
<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  // for (i = 0; i < elements.length; i++) {
  //   elements[i].style.width = "100%";
  // }
  $("#gridViewDiv").hide();
  $("#listViewDiv").show();
}

// Grid View
function gridView() {
  // for (i = 0; i < elements.length; i++) {
  //   elements[i].style.width = "50%";
  // }
  $("#gridViewDiv").show();
  $("#listViewDiv").hide();
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>