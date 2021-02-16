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
        <th>Count</th>
        <th>Description</th>
        <th>Sum</th>
        <th>Remove</th>
        <th>Wish</th>
      </tr>
    </thead>
    <tbody>
@php


$total=0;
foreach($rows as $row){
$id=$row->id;
$count=$row->count;
$p=$row->product;

$src=$p->photo[0]->src??'product.png';
$src=asset("img/$src");
$name=$p->name;
$price=$p->price;
$description=$p->description;
$product_id=$p->id;
$product_count=$p->count;
$sum=$price*$count;
$total+=$sum;
@endphp
<tr id=<?=$id?>>
        <td><img src=<?=$src?> width=150></td>
        <td><?=$name?></td>
        <td><?=$price?></td>
         <td><input type="number" value="<?=$count?>" class="update_cart" min=1 max=<?=$product_count?>></td>
        <td><?=$description?></td>
        <td><?=$sum?></td>
        <td><button class="btn btn-primary"><span class="fa fa-trash   del_cart" ></span></button></td>
        <td><button class="like btn btn-default" type="button"><span class="fa fa-heart add_wish" id=<?=$product_id?>></span></button> </td>
</tr>


@php

}
Session::put('total',$total);
@endphp
<tr><td colspan=5>total</td><td>{{$total}}</td>
</tr> 
<tr><td colspan=7
  style="border:none"></td><td style="border:none"><a href="{{url('order')}}"><button class="like btn btn-info">BUY</button></a></td>
</tr>
  </tbody>   
</table>
</div>
@endsection