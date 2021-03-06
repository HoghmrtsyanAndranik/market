@extends('layouts.app')

@section('title', 'Home')

@section('content')
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
        <th>Cart</th>
        <th>Wish</th>
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
        <td><a href="<?=url("product/item/$id")?>"><button class="btn btn-primary">Open</button></a></td>
        <td><button class="btn btn-primary add_to_cart"><span class="fa fa-shopping-cart add_to_cart" id=<?=$id?>></span></button></td>
        <td><button class="like btn btn-default" type="button"><span class="fa fa-heart add_wish" id=<?=$id?>></span></button> </td>
</tr>


@php
}
@endphp
  </tbody>   
</table>
</div>
{{ $products->links() }}
@endsection