@include('frontend.ecommerce.dashboards.vendor.include.header')
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
        <h1 class="h2">Edit Product</h1>
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
        <form action="{{url('ecommerce/vendor/product')}}/{{\Crypt::encrypt($product->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          {{ method_field('PUT')}}
          <div class="row">
              
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('product_name') ? 'has-error' : ''}}" >
                                                        <label for="product-name">Product Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_name" parsley-trigger="change" 
                                                               placeholder="Enter product name" class="form-control edit_input" id="userName" @if ($errors->has('product_name')) value="{{ old('product_name') }}" @else value="{{$product->product_name}}" @endif>
                                                        @if ($errors->has('product_name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_name') }}.</li></ul>
                                                        @endif
                                                    </div>
              <div class="form-group col-md-6 col-sm-6"  >
                <label for="product_images">Title Image</label>
                <input type="file" class="form-control edit_input" id="title_image" name="title_image"  placeholder="Select Images">
                @if ($errors->has('title_image'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('title_image') }}.</li></ul>
                                                            @endif
                
              </div>
              <div class="form-group col-md-6 col-sm-6"  >
                <label for="product_images">Slider Images</label>
                <input type="file" class="form-control edit_input" id="product_images" name="images[]"  placeholder="Select Images" multiple="true">
                 @if ($errors->has('images'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('images') }}.</li></ul>
                                                            @endif
                
              </div>
              
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('product_description') ? 'has-error' : ''}}" >
                                                        <label for="product-name">Product Description<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_description" parsley-trigger="change" 
                                                               placeholder="Enter product description" class="form-control edit_input" id="userName" @if ($errors->has('product_description')) value="{{ old('product_description') }}" @else value="{{$product->product_description}}" @endif>
                                                        @if ($errors->has('product_description'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_description') }}.</li></ul>
                                                        @endif
                                                    </div>
              
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('product_size') ? 'has-error' : ''}}">
                                                        <label for="product_size">Product Size<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_size" parsley-trigger="change"
                                                               placeholder="Enter product size" class="form-control edit_input" id="product_size" @if ($errors->has('product_size')) value="{{ old('product_size') }}" @else value="{{$product->product_size}}" @endif>
                                                        @if ($errors->has('product_size'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_size') }}.</li></ul>
                                                        @endif
                                                    </div>
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('product_colour') ? 'has-error' : ''}}">
                                                        <label for="product_colour">Product Color<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_colour" parsley-trigger="change"
                                                               placeholder="Enter product color" class="form-control edit_input" id="product_colour" @if ($errors->has('product_colour')) value="{{ old('product_colour') }}" @else value="{{$product->product_colour}}" @endif>
                                                        @if ($errors->has('product_colour'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_colour') }}.</li></ul>
                                                        @endif
                                                    </div>
              
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('product_price') ? 'has-error' : ''}}">
                                                        <label for="product_price">Product Price<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_price" parsley-trigger="change"
                                                               placeholder="Enter product price" class="form-control edit_input" id="product_price" @if ($errors->has('product_price')) value="{{ old('product_price') }}" @else value="{{$product->product_price}}" @endif>
                                                        @if ($errors->has('product_price'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_price') }}.</li></ul>
                                                        @endif
                                                    </div>
              
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('product_quantity') ? 'has-error' : ''}}">
                                                        <label for="product_quantity">Product Quantity<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_quantity" parsley-trigger="change"
                                                               placeholder="Enter product quantity" class="form-control edit_input" id="product_quantity" @if ($errors->has('product_quantity')) value="{{ old('product_quantity') }}" @else value="{{$product->product_quantity}}" @endif>
                                                        @if ($errors->has('product_quantity'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_quantity') }}.</li></ul>
                                                        @endif
                                                    </div> 
              
              
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('sub_category_id') ? 'has-error' : ''}}">
                                                    <label for="sub_category_id"></label>
                                                    <select name="sub_category_id" id="sub_category_id" class="form-control edit_input">
                                                        <option value="">Select Category</option>
                                                        @foreach($categories  as $category)
                                                            <optgroup label="{{$category->category_name}}">
                                                                @foreach($sub_categories as $sub_category)
                                                                    @if($category->id == $sub_category->id)
                                                                    
                                                                    <option value="{{$sub_category->id}}" @if($sub_category->id == $product->category->id) selected="" @endif>{{$sub_category->sub_category_name}}</option>
                                                                    
                                                                    @endif
                                                                @endforeach
                                                                
                                                            </optgroup>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('sub_category_id'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('sub_category_id') }}.</li></ul>
                                                    @endif
                                                </div>

                                                <div id="features_div" class=" col-md-12 col-sm-12">
                                                    @foreach(json_decode($product->category->feature_names) as $key=>$feature)
                                                    <?php $feature_n = preg_replace('/\s+/', '', $feature); ?>
                                                    <div class="form-group  col-md-12 col-sm-12">                                                    <label for="product_{{$feature_n}}">Product {{$feature}}<span class="text-danger">*</span></label>                                                        <input type="text" name="product_{{$feature_n}}" parsley-trigger="change"                                                               placeholder="Enter product size" class="form-control edit_input" id="product_{{$feature_n}}" value="{{json_decode($product->other_features)->$feature_n}}">                                                    </div>

                                                    @endforeach
                                                </div>
              
              
              <div class="form-group col-md-6 col-sm-6 {{$errors->has('brand_id') ? 'has-error' : ''}}">
                                                    <label for="brand"></label>
                                                    <select name="brand_id" id="brand" class="form-control edit_input">
                                                        <option value="">Select Brand</option>
                                                        @foreach($brands as $brand)
                                                        
                                                        <option value="{{$brand->id}}" @if($brand->id == $product->brand->id) selected=""  @endif>{{$brand->brand_name}}</option>
                                                       
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('brand_id'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('brand_id') }}.</li></ul>
                                                    @endif
                                                </div>
              

              <div class="form-group col-md-6 col-sm-6 {{$errors->has('discount_id') ? 'has-error' : ''}}">
                                                    <label for="discount"></label>
                                                    <select name="discount_id" id="discount" class="form-control edit_input">
                                                        <option value="">Select Discount</option>
                                                         @foreach($discounts as $discount)
                                                         
                                                        <option value="{{$discount->id}}" @if($discount->id == $product->discount->id) selected="" @endif>{{$discount->discount_name}}  -- {{$discount->discount_percent}}%</option>
                                                        
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('discount_id'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('discount_id') }}.</li></ul>
                                                    @endif
                                                </div>
              <div class="col-md-12 form-group">
                <button type="submit" class="btn btn-primary" >Update</button>
              </div>
              
          </div>
        </form>
      </div>
      
    </main>
  </div>
</div>
</div>
@include('frontend.ecommerce.dashboards.vendor.include.footer')
<script type="text/javascript">
  var old_content = $("#features_div").html();
                    sessionStorage.setItem('old_content', JSON.stringify(old_content));
      $('#sub_category_id').change(function(){
        console.log({{$product->sub_category_id}});
        console.log(this.value);
                if (this.value == {{$product->sub_category_id}}) {
                    $("#features_div").html('');
                    var old_content = JSON.parse(sessionStorage.getItem('old_content'))
                    $("#features_div").append(old_content);
                    console.log('dd');
                    return false; 
                }
                // var old_content = $("#features_div").html();
                // sessionStorage.setItem('old_content', JSON.stringify(old_content));
                $.get('http://localhost/Eitmad/ecommerce/admin/products/' + this.value + '/features', function(features){
                    
                     
                    $("#features_div").html(''); 
                        $.each(features, function(index, feature) { 
                        feature_s = feature.replace(/\s+/g, '');                             
                            var content = '<div class="form-group col-md-12 col-sm-12">                                                    <label for="product_'+feature_s+'">Product '+feature+'<span class="text-danger">*</span></label>                                                        <input type="text" name="product_'+feature_s+'" parsley-trigger="change"                                                               placeholder="Enter product size" class="form-control edit_input" id="product_'+feature_s+'">                                                    </div>'                        
                            $("#features_div").append(content); 
                                                    
                        });
                });
            });
</script>