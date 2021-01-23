@extends('layouts.app')
@section('title', 'Register')
@section('content');


    <form action="{{url('adduser')}}" method="post" class="w-25 mx-auto p-3 bg-dark text-white mt-5 rounded text-center">
       {{ @csrf_field()}}
        <h1 class="text-danger text-center pb-4">Register</h1>
        <b>{{$errors->first("name")}}</b>
        <input type="text" name="name" class="form-control mb-3" placeholder="Name" value="{{old('name')}}">
        <b>{{$errors->first("surname")}}</b>
        <input type="text" name="surname" class="form-control mb-3" placeholder="Surname" value="{{old('surname')}}">
        <b>{{$errors->first("age")}}</b>
        <input type="text" name="age" class="form-control mb-3" placeholder="Age" value="{{old('age')}}">
        <b>{{$errors->first("email")}}</b>
        <input type="text" name="email" class="form-control mb-3" placeholder="Email" value="{{old('email')}}">
        <b>{{$errors->first("password")}}</b>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" value="{{old('password')}}">
        <b>{{$errors->first("confirmPassword")}}</b>
        <input type="password" name="confirmPassword" class="form-control mb-3" placeholder="Confirm Password" value="{{old('confirmPassword')}}">
        <button class="btn btn-danger">Save</button>
    </form>
    <style>
        b{color:red}
    </style>
@endsection