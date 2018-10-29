<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/admin/job')}}/assets/images/favicon.ico">
        <!-- App title -->
        <title>Eitmad</title>

         <!-- Jquery filer css -->
        <link href="{{URL::to('public/admin/job')}}/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="{{URL::to('public/admin/job')}}/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="{{URL::to('public/admin/job')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/job')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{URL::to('public/admin/job')}}/plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::to('public/admin/job')}}/assets/js/modernizr.min.js"></script>

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
             @include('admin.job.include.navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
             @include('admin.job.include.left-sidebar')
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
                                    <h4 class="page-title">Edit Post</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Eitmad</a>
                                        </li>
                                        <li>
                                            <a href="#">Newspaper Post</a>
                                        </li>
                                        <li class="active">
                                            Edit post
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
                                        <form action="{{url('/jobs/admin/post')}}/{{$posts->id}}" method="post" enctype="multipart/form-data" id="form">
                                            {{csrf_field()}}
                                            {{ method_field('PUT')}}
                                        <div class="col-sm-12 col-xs-12 col-md-6">

                                            

                                            <div class="p-20">
                                                
                                                    <div class="form-group {{$errors->has('post_title') ? 'has-error' : ''}}" >
                                                        <label for="post_title">Post Title<span class="text-danger">*</span></label>
                                                        <input type="text" name="post_title" parsley-trigger="change" 
                                                               placeholder="Enter post title" class="form-control" id="postTitle" value="{{$posts->paper_post_title}}">
                                                        @if ($errors->has('post_title'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('post_title') }}.</li></ul>
                                                        @endif
                                                    </div>
                                                    <div class="form-group {{$errors->has('paper_name') ? 'has-error' : ''}}" >
                                                        <label for="paper_name">Paper Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="paper_name" parsley-trigger="change" 
                                                               placeholder="Enter Paper Name" class="form-control" id="" value="{{$posts->paper_name}}">
                                                        @if ($errors->has('paper_name'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('paper_name') }}.</li></ul>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="post_type">Choose Post Type *:</label>
                                                    <select id="" name="post_type" class="form-control"  required="">
                                                        <option > Choose Post Type</option>
                                                        
                                                        
                                                        <option value = "job_post">Job_Post</option>
                                                       <option value = "tender_post">Tendor_Post</option>
                                                    </select>
                                                     @if ($errors->has('post_type'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('post_type') }}.</li></ul>
                                                        @endif
                                                </div>
                                                <div class="form-group {{$errors->has('expires_after') ? 'has-error' : ''}}">
                                                        <label for="expires_after">Expires after</label>
                                                        <input type="date" name="expires_after"  class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" value="{{$posts->expired}}">
                                                        @if ($errors->has('expires_after'))
                                                            <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('expires_after') }}.</li></ul>
                                                        @endif                                
                                                    </div>
                                                    
                                                    
                                                    
                                                                                                                     
                                                    

                                                
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-xs-12 col-md-6">
                                            <div class="p-20">
                                                
                                                
                                                
                                                
                                                
                                                
                                                <div class="form-group m-b-20 {{$errors->has('newspaper_logo') ? 'has-error' : ''}}">
                                                    <label for="">Newspaper Logo</label>
                                                   <div class="col-sm-12 padding-left-0 padding-right-0">
                                                            <input type="file" name="newspaper_logo" id="filer_input2">
                                                            @if ($errors->has('newspaper_logo'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('newspaper_logo') }}.</li></ul>
                                                            @endif
                                                            
                                                        
                                                        
                                                        <div class="col-xs-6">
                                                           
                                                            <!-- copy -->
                                                            <center><img class="image{{$posts->id}}" src="{{URL::to('public/admin')}}/job/upload/Logo/{{$posts->paper_logo}}" style="width: 162px; height: 150px; padding-bottom: 19px;">
                                                                </center>
                                                            <center><span id="{{$posts->id}}" class=" close-image faClose{{$posts->id}}" style="cursor: pointer; color: red">Delete</span></center>
                                                        </div>
                                                        
                                                        
                                                        </div>
                                                        




                                                    
                                                </div>
                                                <div class="form-group m-b-20 {{$errors->has('post_ad_images') ? 'has-error' : ''}}">
                                                    <label for="">Post Ad_image</label>
                                                    <div class="col-sm-12 padding-left-0 padding-right-0">
                                                        <input type="file" name="post_ad_images" id="filer_input3">
                                                            @if ($errors->has('post_ad_images'))
                                                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('post_ad_images') }}.</li></ul>
                                                            @endif
                                                     @if (strtolower($posts->paper_ad_extension) == 'jpg' || strtolower($posts->paper_ad_extension) == 'png' || strtolower($posts->paper_ad_extension) == 'jpeg')
                                                        
                                                        <div class="col-xs-6">
                                                           
                                                            <!-- copy -->
                                                            <center><img class="image{{$posts->id}}" src="{{URL::to('public/admin')}}/job/upload/Ad/{{$posts->paper_ad}}" style="width: 162px; height: 150px; padding-bottom: 19px;">
                                                                </center>
                                                            <center><span id="{{$posts->id}}" class=" close-image faClose{{$posts->id}}" style="cursor: pointer; color: red">Delete</span></center>
                                                        </div>
                                                        
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    
                                        
                                    </div>
                                    <!-- end row -->
                                    <center>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" id="submit" >
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                   </center>
                                    <!-- end row -->


                                    

                                </div> <!-- end ard-box -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                @include('admin.job.include.footer')

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
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/detect.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/fastclick.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/waves.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{URL::to('public/admin/job')}}/plugins/switchery/switchery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::to('public/admin/job')}}/plugins/parsleyjs/parsley.min.js"></script>

        <!-- Jquery filer js -->
        <script src="{{URL::to('public/admin/job')}}/plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/job')}}/assets/js/jquery.app.js"></script>

        <!-- page specific js -->
        <script src="{{URL::to('public/admin/job')}}/assets/pages/jquery.fileuploads.init.js"></script>
        <script src="{{URL::to('public/admin/job')}}/customAssets/js/jquery.fileuploads.product.init.js"></script>
        
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
                            content = '<div class="form-group ">                                                    <label for="product_'+feature_s+'">Product '+feature+'<span class="text-danger">*</span></label>                                                        <input type="text" name="product_'+feature_s+'" parsley-trigger="change"                                                               placeholder="Enter product '+feature+'" class="form-control" id="product_'+feature_s+'"  }}">                                                   </div>'                        
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

        <script>
            $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#datepicker-autoclose').attr('min', maxDate);
});




        </script>
<script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.close-image').click(function(){
                var file_id = this.id;   
                // document.write(file_id);            
                // var project_id = {{$posts->id}};
                if (confirm('Are you sure you want to delete this?')) {
                $.ajax(
                {

                    url: '{{ url('/jobs/admin/post/logodeleteFile')}}',
                    type: 'post',              
                    data: {
                        "file_id": file_id,
                    },
                    success: function(response){
                        if(response.code ===200) {
                            $('.faClose'+file_id).hide(500);
                            $('.image'+file_id).animate({
                                left: [ "+=50", "swing" ],
                                opacity: [ 0.25, "linear" ]
                            }, 300 );
                        }                          
                    },
                });
            }
        });
    </script>
    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
</html>