<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>User Area</title>
   
    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('public/bootstrap-4.1')}}/css/bootstrap.min.css" rel="stylesheet">

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
          <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Shop Name
          </a>
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