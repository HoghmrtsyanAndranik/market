<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{asset('css/product.css')}}"  rel="stylesheet">
    <link href="{{ asset('/css/profile.css') }}" rel="stylesheet" >

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
      <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        My Account
                    </a>
                </li>
                <li>
                    <a href="{{'/myproducts'}}">My Products</a>
                </li>
                <li>
                    <a href="{{'/addproduct'}}">Add Product</a>
                </li>
                 <li>
                    <a href="{{'/showcart'}}">Cart</a>
                </li>
                 <li>
                    <a href="{{'/showwish'}}">Wish List</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         @yield('my_content')
                          <a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    </div>


  

<!--   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);position:relative;height:50px;text-align:center;padding:10px">
    © 2021 Copyright:
    <a class="text-dark" href="http://colibrilab.am//">Colibrilab</a>
  </div> -->


    <script > base_url="<?=url('/')?>";</script> 
    <script src="{{asset('js/products.js')}}"></script>
    <script src="{{asset('js/profile.js')}}"></script>



  </body>
</html>