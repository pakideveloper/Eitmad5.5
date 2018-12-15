@include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.header')
<div class="container-fluid">
  <div class="row">
    @include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.left-sidebar')
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Product</h1>
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
      <div class="col-md-12">
        <form action="{{url('ecommerce/user/addproduct')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12">
              
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('product_name') ? 'has-error' : ''}}" >
                                                        <label for="product-name">Product Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_name" parsley-trigger="change" 
                                                               placeholder="Enter product name" class="form-control" id="userName" value="{{ old('product_name') }}">
                                                        @if ($errors->has('product_name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_name') }}.</li></ul>
                                                        @endif
                                                    </div>
              <div class="form-group col-md-12 col-sm-12"  >
                <label for="product_images">Title Image</label>
                <input type="file" class="form-control" id="title_image" name="title_image"  placeholder="Select Images">
                @if ($errors->has('title_image'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('title_image') }}.</li></ul>
                                                            @endif
                
              </div>
              <div class="form-group col-md-12 col-sm-12"  >
                <label for="product_images">Slider Images</label>
                <input type="file" class="form-control" id="product_images" name="images[]"  placeholder="Select Images" multiple="true">
                 @if ($errors->has('images'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('images') }}.</li></ul>
                                                            @endif
                
              </div>
              
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('product_description') ? 'has-error' : ''}}" >
                                                        <label for="product-name">Product Description<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_description" parsley-trigger="change" 
                                                               placeholder="Enter product description" class="form-control" id="userName" value="{{ old('product_description') }}">
                                                        @if ($errors->has('product_description'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_description') }}.</li></ul>
                                                        @endif
                                                    </div>
              
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('product_size') ? 'has-error' : ''}}">
                                                        <label for="product_size">Product Size<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_size" parsley-trigger="change"
                                                               placeholder="Enter product size" class="form-control" id="product_size" value="{{ old('product_size') }}">
                                                        @if ($errors->has('product_size'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_size') }}.</li></ul>
                                                        @endif
                                                    </div>
              <!-- <div class="form-group col-md-12 col-sm-12"  >
                <label for="product_color">Product Color</label>
                <input type="text" class="form-control" id="product_color" placeholder="text" >
                <span class="error" v-if="$v.color.$error">Field is required</span>
              </div> -->
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('product_colour') ? 'has-error' : ''}}">
                                                        <label for="product_colour">Product Color<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_colour" parsley-trigger="change"
                                                               placeholder="Enter product color" class="form-control" id="product_colour" value="{{ old('product_colour') }}">
                                                        @if ($errors->has('product_colour'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_colour') }}.</li></ul>
                                                        @endif
                                                    </div>
              
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('product_price') ? 'has-error' : ''}}">
                                                        <label for="product_price">Product Price<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_price" parsley-trigger="change"
                                                               placeholder="Enter product price" class="form-control" id="product_price" value="{{ old('product_price') }}">
                                                        @if ($errors->has('product_price'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_price') }}.</li></ul>
                                                        @endif
                                                    </div>
              
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('product_quantity') ? 'has-error' : ''}}">
                                                        <label for="product_quantity">Product Quantity<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_quantity" parsley-trigger="change"
                                                               placeholder="Enter product quantity" class="form-control" id="product_quantity" value="{{ old('product_quantity') }}">
                                                        @if ($errors->has('product_quantity'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_quantity') }}.</li></ul>
                                                        @endif
                                                    </div> 
              
              
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('sub_category_id') ? 'has-error' : ''}}">
                                                    <label for="sub_category_id"></label>
                                                    <select name="sub_category_id" id="sub_category_id" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach($categories  as $category)
                                                            <optgroup label="{{$category->category_name}}">
                                                                @foreach($sub_categories as $sub_category)
                                                                    @if($category->id == $sub_category->product_category_id)
                                                                    @if(old('sub_category_id') == $sub_category->id)
                                                                    <option value="{{$sub_category->id}}" selected>{{$sub_category->sub_category_name}}</option>
                                                                    @else
                                                                    <option value="{{$sub_category->id}}">{{$sub_category->sub_category_name}}</option>
                                                                    @endif
                                                                    @endif
                                                                @endforeach
                                                                
                                                            </optgroup>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('sub_category_id'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('sub_category_id') }}.</li></ul>
                                                    @endif
                                                </div>

                                                <div id="features_div">
                                                    @if(old('sub_category_id'))
                                                    <?php
                                                    $sub_category = App\Product_Sub_Category::find(old('sub_category_id'));
                                                    $features = json_decode($sub_category->feature_names);
                                                    ?>
                                                    @foreach($features as $feature)
                                                    <?php
                                                    $input_name = 'product_'.$feature;
                                                    $input_name = preg_replace('/\s+/', '', $input_name);
                                                    ?>
                                                    <div class="form-group form-group col-md-12 col-sm-12 {{$input_name}} {{$errors->has($input_name) ? 'has-error' : ''}}">
                                                        <label for="product_{{$feature}}">Product {{$feature}}<span class="text-danger">*</span></label> 
                                                        <input type="text" name="{{$input_name}}" parsley-trigger="change" placeholder="Enter product size" class="form-control" id="product_{{$feature}}" value="{{ old($input_name)}}">
                                                        @if ($errors->has($input_name))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-5">
                                                            <li class="parsley-required">{{ $errors->first($input_name) }}.
                                                            </li>
                                                        </ul>
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
              
              
              <div class="form-group col-md-12 col-sm-12 {{$errors->has('brand_id') ? 'has-error' : ''}}">
                                                    <label for="brand"></label>
                                                    <select name="brand_id" id="brand" class="form-control">
                                                        <option value="">Select Brand</option>
                                                        @foreach($brands as $brand)
                                                        @if(old('brand_id') == $brand->id)
                                                        <option value="{{$brand->id}}" selected>{{$brand->brand_name}}</option>
                                                        @else
                                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('brand_id'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('brand_id') }}.</li></ul>
                                                    @endif
                                                </div>
              

              <div class="form-group col-md-12 col-sm-12 {{$errors->has('discount_id') ? 'has-error' : ''}}">
                                                    <label for="discount"></label>
                                                    <select name="discount_id" id="discount" class="form-control">
                                                        <option value="">Select Discount</option>
                                                         @foreach($discounts as $discount)
                                                        <option value="{{$discount->id}}">{{$discount->discount_name}} -- {{$discount->discount_percent}}%</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('discount_id'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('discount_id') }}.</li></ul>
                                                    @endif
                                                </div>
              <div class="form-group form-check  col-md-12 col-sm-12">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div><br>
              <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
          </div>
        </form>
      </div>
      
    </main>
  </div>
</div>
</div>
@include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.footer')