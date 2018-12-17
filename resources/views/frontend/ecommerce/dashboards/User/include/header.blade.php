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

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('public/bootstrap-4.1')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{URL::to('public/admin/ecommerce')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="{{URL::to('public/bootstrap-4.1')}}/css/dashboard.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/css')}}/bootstrap-notifications.min.css">
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
      <ul class="nav navbar-nav">
            <li class="dropdown dropdown-notifications">
              <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
              </a>

              <div class="dropdown-container">
                <div class="dropdown-toolbar">
                  <div class="dropdown-toolbar-actions">
                    <a href="#">Mark all as read</a>
                  </div>
                  <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                </div>
                <ul class="dropdown-menu">
                </ul>
                <div class="dropdown-footer text-center">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
           
          </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item dropdown">
          <a onclick="document.getElementById('marketer').style.display='block'" style="cursor: pointer;color: white;text-decoration: underline;">
            Become a Affiliate Marketer?
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
        
       
        
        <!-- <button type="button" class="btn btn-primary" onclick="document.getElementById('confirmed_message').style.display='none'" style="float:right;margin:5px;background-color: black;
    border: black;">OK</button> -->
    <a href="{{url('ecommerce/marketer/dashboard')}}"><button type="button" class="btn btn-primary"  style="float:right;margin:5px;background-color: black;
    border: black;">OK</button></a>
    <!-- <button type="button" class="btn btn-primary" onclick="document.getElementById('confirmed_message').style.display='block'" style="float:right;margin:5px;background-color: black;
    border: black;">Yes</button> -->
       
        <p></p>
      </div>
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      var notificationsWrapper   = $('.dropdown-notifications');
      var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
      var notificationsCountElem = notificationsToggle.find('i[data-count]');
      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      var notifications          = notificationsWrapper.find('ul.dropdown-menu');

      if (notificationsCount <= 0) {
        notificationsWrapper.hide();
      }

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('d91158c1362e44bf0a16', {
        cluster: 'ap1',
        encrypted: true
      });

      // Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('send-request');

      // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\SendRequest', function(data) {
       
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml =`
        <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.message+`</strong>
                  
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>`;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
      });
    </script>
  </body>