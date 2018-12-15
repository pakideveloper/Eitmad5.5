<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Marketer Area</title>

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('public/bootstrap-4.1')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{URL::to('public/admin/ecommerce')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="{{URL::to('public/bootstrap-4.1')}}/css/dashboard.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      .is-sub{
        padding-left: 23px;
        display: none;
      }
      .has-sub > li > a{
        color: #a1a1a1 !important;
      }
      .positive{
        position: absolute;
        right: 18px;
      }
      .subDrop{
        background-color: #e9e9e9;
      }
      .dropdown-menu{
        position: absolute !important;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Eitmad</a>
      <!-- <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul> -->
      <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item dropdown">
          <a href="{{url('ecommerce/marketer/dashboard')}}" style="cursor: pointer;color: white;text-decoration: underline;">
            <?php
                                 
                                 $users=App\User::find(Auth::User()->id);
                                 ?>
                                 {{$users->first_name }}  {{$users->last_name}}
          </a>

          <div id="marketer" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="height:auto; width:30%;">
    <header class="w3-container w3-black" >
     
      <h3 style = "font-family:Segoe UI,Arial,sans-serif;font-weight: 400;margin: 10px 0;">Confirm</h3>
    </header>

      <div class="w3-container">
          
          <center>
                     
                                                        
                                                </center>
                                                
                                                <hr>
                                                    <span>Do You Really Wants To Become an Affiliate Marketer</span>
                                                    
                                                    
                                                     <hr>
        
       
        
        <button type="button" class="btn btn-primary" onclick="document.getElementById('marketer').style.display='none'" style="float:right;margin:5px;background-color: black;
    border: black;">No</button>
    <button type="button" class="btn btn-primary" onclick="document.getElementById('confirmed_message').style.display='block',document.getElementById('marketer').style.display='none'" style="float:right;margin:5px;background-color: black;
    border: black;">Yes</button>

       
        <p></p>
      </div>
    </div>
  </div>



  <div id="confirmed_message" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom" style="height:auto; width:30%;">
    <header class="w3-container w3-black" >
     
      <h3 style = "font-family:Segoe UI,Arial,sans-serif;font-weight: 400;margin: 10px 0;">Confirmation Alert</h3>
    </header>

      <div class="w3-container">
          
          <center>
                     
                                                        
                                                </center>
                                                
                                                <hr>
                                                    <span>Congratulations! You Are Successfully Login as an Affiliate Marketer.

                                                     </span>
                                                    
                                                    
                                                     <hr>
        
       
        
        <button type="button" class="btn btn-primary" onclick="document.getElementById('confirmed_message').style.display='none'" style="float:right;margin:5px;background-color: black;
    border: black;">OK</button>
    <!-- <button type="button" class="btn btn-primary" onclick="document.getElementById('confirmed_message').style.display='block'" style="float:right;margin:5px;background-color: black;
    border: black;">Yes</button> -->
       
        <p></p>
      </div>
    </div>
  </div>




          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile_dropdown">
            <a class="dropdown-item" href="javascript:void(0)" style="font-weight: 700;">My Account</a>
            <a class="dropdown-item" href="/docs/4.1/">Profile</a>
            <a class="dropdown-item" href="/docs/4.0/">User Management</a>
            <a class="dropdown-item" href="/docs/4.0/">Document Template</a>
            <a class="dropdown-item" href="/docs/4.0/">Account Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)" style="font-weight: 700;">Seller Support</a>
            <a class="dropdown-item" href="https://v4-alpha.getbootstrap.com/">Eitmad University</a>
            <a class="dropdown-item" href="https://getbootstrap.com/docs/3.3/">Help Center</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('/')}}" style="color: blue">Log Out</a>
          </div>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)">Settings</a>
            <div class="c_dropdown-menu">
              <a class="c_dropdown-item" href="#">Action</a>
              <a class="c_dropdown-item" href="#">Another action</a>
              <a class="c_dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
      </ul>

    </nav>
  </body>