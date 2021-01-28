@extends('layouts.app')

@section('title', 'Login')







@section('content')
<link href="{{ asset('/css/main.css') }}" rel="stylesheet" media="all"> 
<form action="{{url('loginuser')}}" method="post">
     {{ @csrf_field()}}
 <!--  <div class="imgcontainer">
    <img src="" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">

     <label for="email"><b>Email</b></label><br>
     <b>{{$errors->first("email")}}</b>
     <input type="text" placeholder="Enter Your Email" name="email" id="email"value="{{old('email')}}">
    <br>
    <label for="password"><b>Password</b></label><br>
    <b>{{$errors->first("password")}}</b>
    <input type="password" placeholder="Enter  Password" name="password" id="password"value="{{old('password')}}">
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>

  </div>

</form>
<h3 style="color:red">{{Session::get('error')}}</h3>

@endsection

