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

       
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Change Password</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
<form method="post" id="passwordForm" action="{{url('ecommerce/passwordchange')}}" enctype="multipart/form-data">
  {{ csrf_field()}}
<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
<div class="row">
<div class="col-sm-6">
<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
</div>
<div class="col-sm-6">
<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
</div>
</div>
<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
<div class="row">
<div class="col-sm-12">
<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
</div>
</div>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>

    </main>
          
            
          
        
        </div>
      </div>
    </div>
    @include('frontend.ecommerce.dashboards.Affiliate_Marketer.include.footer')

