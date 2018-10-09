<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>AREAS-ADMIN PANEL-EITMAD</title>

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
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Area </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Eitmad</a>
                                        </li>
                                        <li>
                                            <a href="#">Areas </a>
                                        </li>
                                        <li class="active">
                                            Add Area
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                 
                                    <div class="row">
                        				<div class="col-md-6 m-t-50">
                        					<form action="{{url('/ecommerce/admin/area')}}" method="post" enctype="multipart/form-data" onsubmit="return submitForm();">
                                                {{csrf_field()}}
	                                            <div class="form-group{{ $errors->has('area_name') ? ' has-error' : '' }}">
	                                                <label for="area_name">Area Name</label>
	                                                <input type="text" class="form-control" name="area_name" id="exampleInputEmail1" placeholder="Enter area name" value="{{ old('area_name') }}">
                                                     @if ($errors->has('area_name'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('area_name') }}</strong>
                                                         </span>
                                                     @endif
	                                            </div>
                                                <div class="form-group{{ $errors->has('area_code') ? ' has-error' : '' }}">
                                                    <label for="area_code">Area Code</label>
                                                    <input type="text" class="form-control" name="area_code" id="exampleInputEmail1" placeholder="Enter area code" value="{{ old('area_code') }}">
                                                     <!-- @if ($errors->has('area_name'))
                                                        <span class="help-block">
                                                             <strong class="error">{{ $errors->first('area_name') }}</strong>
                                                         </span>
                                                     @endif -->
                                                </div>
	                                            <div class="form-group">
                                                    <label for="country_id">Select Country</label>
                                                        <select class="form-control" id="country" name="country">
                                                            <option value="">--Select Country--</option>
                                                            @foreach($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                         <span class="help-block" id="country_err">
                                                                         
                                                                    </span>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="country_id">Select City</label>
                                                        <select class="form-control" id="city_id" name="city_id">
                                                            <option value="">--Select Country first--</option>
                                                            
                                                        </select>
                                                        <span class="help-block" id="city_err">
                                                                         
                                                                    </span>
                                                </div>
                                                
	                                           
	                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
	                                        </form>
                        				</div>

                        				
                        			</div>

                                    <!-- end row -->



                                    <!-- Inline Form -->
                                   

                                   
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 - 2018 © Zircos.
                </footer>

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

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            var submitForm = function(){

        var country= $('#country').val();
        if(country == ""){
        /*alert('Please Enter First Name');*/
        var errorContent = '<strong class="error" style="color:red">Please select country</strong>';
        $('#country_err').html(errorContent).show();
       
        return false;
        }else{
      
        $('#country_err').html(errorContent).hide();
        }

        var city= $('#city_id').val();
        if(city == ""){
        /*alert('Please Enter First Name');*/
        var errorContent = '<strong class="error" style="color:red">Please select city</strong>';
        $('#city_err').html(errorContent).show();
       
        return false;
        }else{
      
        $('#city_err').html(errorContent).hide();
        }
        
        }
        </script>

         <script type="text/javascript">
        $(document).ready(function(){
           // demo.initChartist();
            
           $('#country').change(function(){
                // alert('test');
                $.get('cities/' + this.value + '/cities.json', function(cities)
                {
                    console.log(cities);
                    var $city_id = $('#city_id');

                    $city_id.find('option').remove().end();
                    if (cities!='') {
                       $.each(cities, function(index, city) {
                        $city_id.append('<option value="' + city.id + '">' + city.city_name + '</option>');
                    }); 
                    }
                    else{
                         $city_id.append('<option>No city found</option>');
                    }
                    
                });
            });
            
        });

        
    </script>

    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:42 GMT -->
</html>