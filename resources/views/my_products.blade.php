@extends('layouts.account')

    @section('title','My Products')
    @section('my_content')

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revslider.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    

    
                        <div class="category-products">
                            <ol class="products-list" id="products-list">


                                @php
                                foreach($products as $p){
                                $id=$p->id;
                               
                                $open_url=url("myproduct/item/{$id}");
                                $delete_url=url("deleteProduct/{$id}");
                                @endphp
                                    <li class="item first">
                                        <div class="product-image"> <a href="{{url('myproduct/item/'.$p->id)}}" title="HTC Rhyme Sense"> <img class="small-image" src="products-images/product.jpg" alt="HTC Rhyme Sense"> </a> </div>
                                        <div class="product-shop">
                                            <h2 class="product-name"><a href="{{url('myproduct/item/').$p->id}}" title="HTC Rhyme Sense"><?=$p->name?></a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:50%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator"></p>
                                            </div>
                                            <div class="desc std">
                                                <p><?=$p->description?><a class="link-learn" title="" href="#">Learn More</a> </p>
                                            </div>
                                            <div class="price-box">

                                                <p class="special-price"> <span class="price-label"></span> <span class="price"> <?='$'.$p->price?></span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> $442.99 </span> </p>
                                            </div>
                                            <div class="actions">
                                                <a href="{{$open_url}}"><button class="button btn-cart ajx-cart" title="open" type="button"><span>Open</span></button></a>
                                                <span class="add-to-links"> <a title="Delete" class="button link-wishlist" href="{{$delete_url}}"><span>Delete</span></a> <a title="See statistics" class="button link-compare" href="#"><span>See statistics</span></a> </span> </div>
                                        </div>
                                    </li>
                                @php    
                                }
                                @endphp
                            </ol>
                        </div>
                   

   

<!-- JavaScript -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mobile-menu.min.js')}}"></script>

    @endsection
