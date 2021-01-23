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
      <a class="navbar-brand" href="#">Market</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">Home</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a> -->
      <li><a href="#">Page 1</a></li>  
       <!--  <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul> -->
   
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  


    <div class="container">
      @yield('content')
    </div>

<div class="navbar-fixed-bottom row-fluid">
      <div class="navbar-inner">
          <div class="container">


  <!-- Grid container -->
  <!-- <div class="container p-4 pb-0"> -->
    <form action="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <p class="pt-2"><strong>Sign up for our newsletter</strong></p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12 mb-4 mb-md-0">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form5Example2" class="form-control" />
            <label class="form-label" for="form5Example2">Email address</label>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary mb-4">Subscribe</button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);position:relative;height:50px;text-align:center;padding:10px">
    © 2021 Copyright:
    <a class="text-dark" href="http://colibrilab.am//">Colibrilab</a>
  </div>
</div>
</div>

  <!-- Copyright -->



  </body>
</html>