@extends('layouts.app')

@section('title', 'Cart')

@section('content')

    <div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Count</th>
        <th>Remove</th>
        <th>Cart</th>
      </tr>
    </thead>
    <tbody>
@php
$total=0;
foreach($list as $row){
$id=$row->id;

$p=$row->product;

$src=$p->photo[0]->src??'product.png';
$src=asset("img/$src");
$name=$p->name;
$price=$p->price;
$description=$p->description;
$count=$p->count;
$product_id=$p->id;


@endphp
<tr id=<?=$id?>>
        <td><img src=<?=$src?> width=150></td>
        <td><?=$name?></td>
        <td><?=$price?></td>
        <td><?=$description?></td>
        <td><?=$count?></td>
        <td><button class="btn btn-primary"><span class="fa fa-trash   del_wish" ></span></button></td>
        <td><button class="like btn btn-default" type="button"><span class="fa fa-shopping-cart add_to_cart" id=<?=$product_id?>></span></button> </td>
</tr>


@php
}
@endphp

  </tbody>   
</table>
</div>
@endsection