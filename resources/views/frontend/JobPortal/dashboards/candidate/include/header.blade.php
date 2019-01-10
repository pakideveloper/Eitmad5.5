<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <!-- D:\xampp\htdocs\Eitmad5.5\public\css -->
    <link href="{{URL::to('public')}}/css/font-awesome.css" rel="stylesheet">
   
    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('public/bootstrap-4.1')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::to('public/bootstrap-4.1')}}/css/dashboard.css" rel="stylesheet">
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

      /*Profile Image css*/
      body {
  background-color: #efefef;
}

.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    /*display: none;*/
}
.circle {
    border-radius: 1000px !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 8px solid rgba(255, 255, 255, 0.7);
    position: absolute;
    top: 72px;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
  position: absolute;
  top: 167px;
  right: 30px;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
/*end Profile Image css*/
/*body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}*/
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
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
          <div class="middle-btns">
            <span style="color: white;">You Logged as :</span>
            @if (Auth::guest())
            <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i> <span>Login</span></a>
            @else
            <a class="login-btn btn-outlined-invert" href="#" ><i class="icon-profile"></i> <span style="color: yellow;">{{ Auth::user()->first_name }}</span></a>
            @endif
          </div>
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