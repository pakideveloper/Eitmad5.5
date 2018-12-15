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
      <th scope="col">bid_Proposal</th>
      <th scope="col">Commission_ratio</th>
      
      <th scope="col">timestamp</th>
      <th scope="col">commission_amount</th>
      <th scope="col">status</th>
       <th scope="col">Action</th>
     <!-- <th scope="col">Payment Method</th>
      <th scope="col">Status</th>
      <th scope="col">Claim Order</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
$i = 1;

     ?>
    @foreach($requests as $request)
    
    <tr>
      <th scope="row">{{$i++}}</th>
      
     
      <td>{{$request->product_name}}</td>

      <td>{{$request->proposal}}</td>
       <td>{{$request->commission_ratio}}</td>
      
      <td>{{$request->timestamp}}</td>
      <td>{{$request->commission_amount}}</td>
       
      
      @if($request->status == 0)
      <td>Pending</td>
      @else
      <td>Accept</td>
      @endif
      <td>
        <a data-toggle="modal" data-target="#bid{{$request->id}}" style="float: left;cursor: pointer;">
          <i class="fa fa-pencil"></i>
       </a>

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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display: block;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Claim Order</h4>
        </div>
        <div class="modal-body">
          <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                              <label for="product_name"><h4>Product name:</h4></label>
                              <!-- <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Your product name" value=""  title="enter your first n if any."> -->
                          </div>
                      </div>
                      
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="product_category"><h4>Product Category:</h4></label>
                              <!-- <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Your last name" value="" title="enter your last name if any."> -->
                          </div>
                      </div>
                  <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="product_type"><h4>Product Type:</h4></label>
                              <!-- <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="" title="enter your email."> -->
                          </div>
                      </div>
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="brand"><h4>Brand:</h4></label>
                             <!--  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Your last name" value="" title="enter your last name if any."> -->
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="company_name"><h4>Company Name:</h4></label>
                              <!-- <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="" title="enter your email."> -->
                          </div>
                      </div>
                      <div class="form-group" style="margin: 0px;">
                          
                          <div class="col-xs-12">
                            <label for="last_name"><h4>Product Defected:</h4></label>
                              <input type="number" class="form-control" name="product_defected" id="product_defected" placeholder="Enter  product_defected" value="" title="enter product_defected if any.">
                          </div>
                      </div>
                         <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="address"><h4>Product Problem Described:</h4></label>
                              <textarea  class="form-control" id="address" name="address" placeholder="Please Describe Problem" value="" title="Enter Your Problem"></textarea>
                          </div>
                      </div>
                       <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="date"><h4>Purchasing Date:</h4></label>
                              <!-- <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="" title="enter your email."> -->
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






@foreach($requests as $request)

<div class="modal fade" id="bid{{$request->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="display:block !important">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Form</h4>
        </div>
        <div class="modal-body" style="height: 460px;">
          <?php
          $check = 0; 
           ?>
          <form method="post" action="{{url('ecommerce/marketer/dashboard')}}/{{$request->id}}">
            {{ csrf_field()}}
            {{ method_field('PUT')}}
            <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="product_name"><h4>Product_Name:</h4></label>
                              <input type="text" class="form-control" name="product" id="product" value="{{$request->product_name}}" readonly>
                              
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="product_price"><h4>Product_Price:</h4></label>
                              <input type="text" class="form-control" name="price" id="price" value="{{$request->product_price}}" readonly>
                              
                          </div>
                      </div>

                      
           <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="proposal"><h4>Proposal:</h4></label>
                              <textarea  class="form-control" id="proposal" name="proposal" placeholder="Please Describe Your Proposal" value="{{$request->proposal}}" title="Enter Your Proposal">{{$request->proposal}}</textarea>
                          </div>
                      </div>
                      <hr>
                      <div class="form-group" style="">
                          
                          <div class="col-xs-12">
                            <label for="commission_ratio"><h4>Comission_ratio:</h4></label>
                              <input type="number" class="form-control" name="ratio" id="ratio" placeholder="Enter Your Expected commission ratio" value="{{$request->commission_ratio}}" title="Enter Your Expected commission ratio in %">
                              
                          </div>
                      </div>
                      <div class="form-group" style="">
                          
                          <div class="col-xs-12">
                            <label for="timeline"><h4>Expected Time:</h4></label>
                              <input type="number" class="form-control" name="timeline" id="timeline" placeholder="Enter Your Expected Time in days,hours,minutes, or seconds" value="{{$request->timestamp}}" title="Enter Your Expected Time in days,hours,minutes, or seconds">
                              
                          </div>
                      </div>
                      
        </div>
        <div class="modal-footer">
         
            
          <button type="submit" class="btn btn-primary">Submit</button>
         <!--  $check++; -->
        
        

        </div>
        </form>
      </div>
      
    </div>
  </div>

  @endforeach

    </main>
          
            
          
        
        </div>
      </div>
    </div>
    
</div>
    @include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.footer')

