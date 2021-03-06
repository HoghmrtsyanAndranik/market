@extends('layouts.account')

@section('title','My Products')

@section('my_content')


 



<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Count</th>
        <th>Description</th>
        <th>Open</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
@php
foreach($products as $p){

$src=$p->photo[0]->src??'product.png';
$src=asset("img/$src");

$id=$p->id;
$name=$p->name;
$price=$p->price;
$count=$p->count;
$description=$p->description;

@endphp
<tr id=<?=$id?>>
        <td><img src=<?=$src?> width=150></td>
        <td><?=$name?></td>
        <td><?=$price?></td>
         <td><?=$count?></td>
        <td><?=$description?></td>
        <td><a href="<?=url("myproduct/item/$id")?>"><button class="btn btn-primary">Open</button></a></td>
        <td><button class="btn btn-danger del_product">Delete</button></td>
</tr>


@php
}
@endphp
  </tbody>   
</table>
</div>
@endsection