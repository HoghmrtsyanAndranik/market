<html>
  <head>
    <title>@yield('title')</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">My Laravel Market Application</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">Home</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a> -->

        @php
          $user_email =Session::get("user_email")??"guest";
          $myaccount="";
          if($user_email!="guest")
             $myaccount="My account";
        @endphp
      <li><a href="#">{{$user_email}}</a></li>  
       <!--  <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul> -->
   
      <li><a href="{{url('profile')}}">{{$myaccount}}</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @php
      if($user_email=="guest"){
      @endphp
      <li><a href="{{url('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
      @php
      }else { 
      @endphp</li>
       <li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      @php
      }
      @endphp
    </ul>
  </div>
</nav>
  


    <div class="container">
      @yield('content')
    </div>


 
<!--   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);position:relative;height:50px;text-align:center;">
    © 2021 Copyright:
    <a class="text-dark" href="http://colibrilab.am//">Colibrilab</a>
  </div> -->







  </body>
</html>