@extends('layouts.account')

    @section('title','Add Product')
    @section('my_content')
    <form action="{{url('savenewproduct')}}" method="post" class="w-25 mx-auto p-3 bg-dark text-white mt-5 rounded text-center" enctype="multipart/form-data">
        {{ @csrf_field()}}
         <h1 class="text-danger text-center pb-4">Add Product</h1>
         <b>{{$errors->first("name")}}</b>
         <input type="text" name="name" class="form-control mb-3" placeholder="Name" value="{{old('name')}}">
         <b>{{$errors->first("price")}}</b>
         <input type="text" name="price" class="form-control mb-3" placeholder="Price" value="{{old('price')}}">
         <b>{{$errors->first("count")}}</b>
         <input type="text" name="count" class="form-control mb-3" placeholder="Count" value="{{old('count')}}">
         <b>{{$errors->first("description")}}</b>
         <textarea name="description" class="form-control mb-3" placeholder="Description">{{old('description')}}</textarea>
         <b>{{$errors->first("photo")}}</b>
         <input type="file" name="photo[]" multiple class=" mb-3" value="{{old('photo')}}">
         <button class="btn btn-danger">Add</button>
    </form>

    @endsection