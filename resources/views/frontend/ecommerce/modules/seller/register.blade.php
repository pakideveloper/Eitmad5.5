<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Become a Seller</title>
		<!--SEO Meta Tags-->
		<meta name="description" content="Responsive HTML5 E-Commerce Template" />
		<meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
		<meta name="author" content="8Guild" />
		<!--Mobile Specific Meta Tag-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!--Favicon-->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!--Master Slider Styles-->
		<link href="{{URL::to('public/frontend/ecommerce/assets')}}/masterslider/style/masterslider.css" rel="stylesheet" media="screen">
		<!--Styles-->
		<link href="{{url::to('public/frontend/ecommerce/assets')}}/css/styles.css" rel="stylesheet" media="screen">
		<!--Color Scheme-->
		<link class="color-scheme" href="{{url::to('public/frontend/ecommerce/assets')}}/css/colors/color-default.css" rel="stylesheet" media="screen">
		<!--Color Switcher-->
		<link href="{{url::to('public/frontend/ecommerce/assets')}}/color-switcher/color-switcher.css" rel="stylesheet" media="screen">
		<!--Modernizr-->
		<script src="{{url::to('public/frontend/ecommerce/assets')}}/js/libs/modernizr.custom.js"></script>
		<!--Adding Media Queries Support for IE8-->
		<!--[if lt IE 9]>
		<script src="js/plugins/respond.js"></script>
		<![endif]-->
		<style type="text/css">
				body{
				background-color:#e6e6e6;
				}
			.logo > img{
				width: 173px;
				/*margin: 28px;*/
				margin-top: 28px;
				margin-bottom: 15px;
			}
			.logo{
				padding-left: 0px;
				margin-left: -23px;
			}
			.form{
				background-color: white;
				border-radius: 10px;
				box-shadow: 0 0 50px #c7c7c7;
			}
			.form-heading > h2{
				margin-top: 14px !important;
				margin-bottom: 17px !important;
				text-align: center;
			}
			.form-heading{
				border-bottom: 1px solid #d6d6d6;
			}
			.row{
				padding-left: 14px;
				padding-right: 14px;
			}
			ul{
				padding-left: 0px;
				list-style-type: none;
				color: #ff3e3e;
			}
		</style>
		
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 logo">
					<img src="../public/frontend/ecommerce/assets/img/Eitmadweblogo.png">
				</div>
				<h4>Welcome! You are just one step away to sell on Eitmad</h4>
				<div class="col-md-12 form">
					<div class="col-md-12 form-heading">
						<h2>Registration</h2>
					</div>
					<div class="row">
						<div class="col-md-3"></div>
						<form action="{{url('ecommerce/become-seller')}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="col-md-6" style="    padding-top: 12px;">
								@if (Auth::guest())
								<div class="form-group group{{ $errors->has('first_name') ? ' has-error' : '' }} col-lg-16 col-md-6 col-sm-12" >
									<label for="log-fname">First_Name</label>
									<input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your First_Name" value="{{ old('first_name') }}"  autofocus>
									@if ($errors->has('first_name'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('first_name') }}.</li></ul>
									@endif
								</div>
								<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} group  col-md-6 col-sm-12" >
									<label for="log-lname">Last_Name</label>
									<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last_Name" value="{{ old('last_name') }}" >
									@if ($errors->has('last_name'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('last_name') }}.</li></ul>
									@endif
								</div>

								<div class="form-group group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12 col-sm-12">
									<label for="rf-email">Email</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}"  >
									@if ($errors->has('email'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('email') }}.</li></ul>
									@endif
								</div>
								<div class="form-group group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6 col-sm-12">
									<label for="rf-password">Password</label>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter password" value="{{ old('password') }}" >
									@if ($errors->has('password'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('password') }}.</li></ul>
									@endif
								</div>
								<div class="form-group group col-md-6 col-sm-12">
									<label for="rf-password-repeat">Repeat password</label>
									<input type="password" class="form-control" name="password_confirmation" id="rf-password-repeat" placeholder="Repeat password" >
								</div>
								@endif
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('name') ? 'has-error' : ''}}"   >
									<label for="product_images">Your Company Name</label>
									<input type="text" class="form-control" name="name"  placeholder="name" value="{{ old('name') }}">
									@if ($errors->has('name'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('name') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('description') ? 'has-error' : ''}}">
									<label for="product_images">Whats about your company</label>
									<textarea class="form-control" name="description" value="{{ old('description') }}" rows="7"></textarea>
									@if ($errors->has('description'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('description') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('logo') ? 'has-error' : ''}}">
									<label for="product_images">Logo</label>
									<input type="file" name="logo" class="form-control">
									@if ($errors->has('logo'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('logo') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('vendor_email') ? 'has-error' : ''}}">
									<label for="product_images">Email s</label>
									<input type="email" name="vendor_email" class="form-control" value="{{ old('vendor_email') }}">
									@if ($errors->has('vendor_email'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('vendor_email') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('contact') ? 'has-error' : ''}}">
									<label for="product_images">Contact</label>
									<input type="text" name="contact" class="form-control" value="{{ old('contact') }}">
									@if ($errors->has('contact'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('contact') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('title') ? 'has-error' : ''}}">
									<label for="product_images">URL (optional)</label>
									<input type="text" name="url" class="form-control">
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('fax_no') ? 'has-error' : ''}}">
									<label for="product_images">Fax No.</label>
									<input type="text" name="fax_no" class="form-control" value="{{ old('fax_no') }}">
									@if ($errors->has('fax_no'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('fax_no') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('reg_no') ? 'has-error' : ''}}">
									<label for="product_images">Reg No.</label>
									<input type="text" name="reg_no" class="form-control" value="{{ old('reg_no') }}">
									@if ($errors->has('reg_no'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('reg_no') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('person_incharge') ? 'has-error' : ''}}">
									<label for="product_images">Person Incharge</label>
									<input type="text" name="person_incharge" class="form-control" value="{{ old('person_incharge') }}">
									@if ($errors->has('person_incharge'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('person_incharge') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('incharge_contact') ? 'has-error' : ''}}">
									<label for="product_images">Person Incharge Conatct No.</label>
									<input type="text" name="incharge_contact" class="form-control" value="{{ old('incharge_contact') }}">
									@if ($errors->has('incharge_contact'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('incharge_contact') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('incharge_email') ? 'has-error' : ''}}">
									<label for="product_images">Person Incharge Email</label>
									<input type="text" name="incharge_email" class="form-control" value="{{ old('incharge_email') }}">
									@if ($errors->has('incharge_email'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('incharge_email') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('incharge_cnic') ? 'has-error' : ''}}">
									<label for="product_images">Person Incharge CNIC</label>
									<input type="text" name="incharge_cnic" class="form-control">
									@if ($errors->has('incharge_cnic'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('incharge_cnic') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('cnic_front') ? 'has-error' : ''}}">
									<label for="product_images">Person Incharge CNIC Front Image</label>
									<input type="file" name="cnic_front" class="form-control" >
									@if ($errors->has('cnic_front'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('cnic_front') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12 {{$errors->has('cnic_back') ? 'has-error' : ''}}">
									<label for="product_images">Person Incharge CNIC Back Image</label>
									<input type="file" name="cnic_back" class="form-control" >
									@if ($errors->has('cnic_back'))
									<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $errors->first('cnic_back') }}.</li></ul>
									@endif
								</div>
								<div class="form-group col-md-12 col-sm-12">
									<input type="submit" name="submit" class="btn btn-success">
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>