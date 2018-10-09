<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/admin/ecommerce')}}/assets/images/favicon.ico">
        <!-- App title -->
        <title>Eitmad</title>

         <!-- Jquery filer css -->
        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="{{URL::to('public/admin/ecommerce')}}/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{URL::to('public/admin/ecommerce')}}/plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
             @include('admin.ecommerce.include.navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
             @include('admin.ecommerce.include.left-sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @if (session('status'))
                        <div class="alert alert-success" style="margin-bottom: 0px;">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->has("product_battery"))  
                    <div class="alert alert-danger" style="margin-bottom: 0px;">
                            {{ $errors->first("product_battery") }}
                        </div>                                                                                                                  @endif 


                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add Product</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Eitmad</a>
                                        </li>
                                        <li>
                                            <a href="#">product </a>
                                        </li>
                                        <li class="active">
                                            Add product
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">

                                    <div class="row">
                                        <form action="{{url('/ecommerce/admin/products')}}" method="post" enctype="multipart/form-data" id="form">
                                            {{csrf_field()}}
                                        <div class="col-sm-12 col-xs-12 col-md-6">

                                            

                                            <div class="p-20">
                                                
                                                    <div class="form-group {{$errors->has('product_name') ? 'has-error' : ''}}" >
                                                        <label for="product-name">Product Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_name" parsley-trigger="change" 
                                                               placeholder="Enter product name" class="form-control" id="userName" value="{{ old('product_name') }}">
                                                        @if ($errors->has('product_name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_name') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group {{$errors->has('product_description') ? 'has-error' : ''}}" >
                                                        <label for="product-name">Product Description<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_description" parsley-trigger="change" 
                                                               placeholder="Enter product name" class="form-control" id="userName" value="{{ old('product_description') }}">
                                                        @if ($errors->has('product_description'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_description') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group {{$errors->has('product_size') ? 'has-error' : ''}}">
                                                        <label for="product_size">Product Size<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_size" parsley-trigger="change"
                                                               placeholder="Enter product size" class="form-control" id="product_size" value="{{ old('product_size') }}">
                                                        @if ($errors->has('product_size'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_size') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group {{$errors->has('product_colour') ? 'has-error' : ''}}">
                                                        <label for="product_colour">Product Color<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_colour" parsley-trigger="change"
                                                               placeholder="Enter product size" class="form-control" id="product_colour" value="{{ old('product_colour') }}">
                                                        @if ($errors->has('product_colour'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_colour') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group {{$errors->has('product_price') ? 'has-error' : ''}}">
                                                        <label for="product_price">Product Price<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_price" parsley-trigger="change"
                                                               placeholder="Enter product size" class="form-control" id="product_price" value="{{ old('product_price') }}">
                                                        @if ($errors->has('product_price'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_price') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group {{$errors->has('product_quantity') ? 'has-error' : ''}}">
                                                        <label for="product_quantity">Product Quantity<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_quantity" parsley-trigger="change"
                                                               placeholder="Enter product size" class="form-control" id="product_quantity" value="{{ old('product_quantity') }}">
                                                        @if ($errors->has('product_quantity'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('product_quantity') }}.</li></ul>
                                                        @endif
                                                    </div>                                                                          
                                                    

                                                
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-xs-12 col-md-6">
                                            <div class="p-20">
                                                
                                                <!-- @foreach($sub_categories  as $sub_category)
                                                    @foreach(json_decode($sub_category->feature_names) as $input )
                                                    {{$input}}
                                                    <div class="form-group">
                                                        <label for="product_{{$input}}">Product {{$input}}<span class="text-danger">*</span></label>
                                                        <input type="text" name="product_{{$input}}" parsley-trigger="change"
                                                               placeholder="Enter product size" class="form-control" id="product_{{$input}}">
                                                    </div>
                                                    @endforeach                                     
                                                @endforeach  -->
                                                <div class="form-group m-b-20 {{$errors->has('sub_category_id') ? 'has-error' : ''}}">
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
                                            <div class="form-group {{$input_name}} {{$errors->has($input_name) ? 'has-error' : ''}}">
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
                                                <div class="form-group m-b-20 {{$errors->has('brand_id') ? 'has-error' : ''}}">
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
                                                <div class="form-group m-b-20 {{$errors->has('discount_id') ? 'has-error' : ''}}">
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
                                                <div class="form-group m-b-20 {{$errors->has('images') ? 'has-error' : ''}}">
                                                    <label for="">Title Image</label>
                                                    <div class="col-sm-12 padding-left-0 padding-right-0">
                                                            <input type="file" name="title_image" id="filer_input3">
                                                            @if ($errors->has('title_image'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('title_image') }}.</li></ul>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="form-group m-b-20 {{$errors->has('images') ? 'has-error' : ''}}">
                                                    <label for="">Upload Images</label>
                                                    <div class="col-sm-12 padding-left-0 padding-right-0">
                                                            <input type="file" name="images[]" id="filer_input2"
                                                               multiple="multiple">
                                                            @if ($errors->has('images'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('images') }}.</li></ul>
                                                            @endif
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" id="submit" >
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                        
                                    </div>
                                    <!-- end row -->

                                   
                                    <!-- end row -->


                                    

                                </div> <!-- end ard-box -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                @include('admin.ecommerce.include.footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/detect.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/fastclick.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/waves.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/switchery/switchery.min.js"></script>

        <script type="text/javascript" src="{{URL::to('public/admin/ecommerce')}}/plugins/parsleyjs/parsley.min.js"></script>

        <!-- Jquery filer js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>

        <!-- page specific js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/pages/jquery.fileuploads.init.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/customAssets/js/jquery.fileuploads.product.init.js"></script>
      
        <script type="text/javascript">


            
            

            // var submit_content = JSON.parse(sessionStorage.getItem('submit_content'))
            // $("#features_div").append(submit_content);
            // sessionStorage.clear();
            // var content;
            // var id;
            $('#sub_category_id').change(function(){
                id = this.value;
                $("#features_div").html('');
                $.get(this.value + '/features', function(features){
                     
                        $.each(features, function(index, feature) { 
                        feature_s = feature.replace(/\s+/g, '');                             
                            content = '<div class="form-group ">                                                    <label for="product_'+feature_s+'">Product '+feature+'<span class="text-danger">*</span></label>                                                        <input type="text" name="product_'+feature_s+'" parsley-trigger="change"                                                               placeholder="Enter product size" class="form-control" id="product_'+feature_s+'"  }}">                                                   </div>'                        
                            $("#features_div").append(content);
                                                    
                        });
                });
            });
            $("#submit").click(function(){
                // var submit_content = $("#features_div").html();
                // sessionStorage.setItem('submit_content', JSON.stringify(content));
                // console.log(content);
                $("#form").submit();

            });
        </script>

    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
</html>