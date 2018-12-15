 @include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.header')
 
    <div id="dashboard_user">
    <div class="container-fluid">
      <div class="row">
        
        @include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.left-sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

@if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif

       
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
      <th scope="row">{{$i++}}</th>
      <td>{{$product->product_name}}</td>
     
      <td><a data-toggle="modal" data-target="#description{{$product->id}}" style="cursor: pointer;color: red;text-decoration: underline;">Tap here</a></td>

      <div class="modal fade" id="description{{$product->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
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
    
      <!-- Modal content-->
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
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
<!--  -->
  
    </main>
          
            
          
        
        </div>
      </div>
    </div>
    
</div>
    @include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.footer')

