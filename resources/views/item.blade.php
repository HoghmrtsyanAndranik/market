@extends('layouts.app')

    @section('title','Product')


    @section('content')
 
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        
                        <div class="preview-pic tab-content">

                          @php
                          if(count($product->photo)>0){
                              $src=$product->photo[0]->src;
                              $src=asset("img/$src");
                          }
                          else {
                              $src=asset("img/product.png");
                          }


                              
                              $del_src=asset("img/delete-sign.png");
                              echo "<div class='tab-pane active' id='pic-1'  style='position:relative'><img src='$src'  style='width: 100%'
                               /></div>";
                              echo"";
                         
                           
                            


                     
                            
                          @endphp
                           </div>
                          <ul class="preview-thumbnail nav nav-tabs">
                         

                        @php
                        $count=count($product->photo);
                          if(count($product->photo)>1){  
                       for($i=0;$i<$count;$i++){
                                if($i==0)
                                continue;
                                $k=$i+1;
                                $src=$product->photo[$i]->src;
                                $src=asset("img/$src");
                               
                                echo "<li style='position:relative'><img src=$src width=150></li>";
                                

                            }
                          }
                       @endphp


<!-- 
                          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a><button class="btn btn-danger">del</button></li>
                          <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a><button class="btn btn-danger">del</button></li>
                          <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a><button class="btn btn-danger">del</button></li>
                          <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a><button>del</button></li>
                          <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a><button>del</button></li> -->
                        </ul>
                        
                    </div>
                    <div class="details col-md-6">
                      
                        <h3 class="product-title" >{{$product->name}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            
                        </div>
                        
                        <p class="product-description" >{{$product->description}}</p>
                       
                        <h4 >current price: <span class="product-price" >{{$product->price}}</span></h4>
                        <!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
                        <h5 class="sizes">quantity:
                        
                            <span class="product-count" data-toggle="tooltip" title="small" >{{$product->count}}</span>
                           
                        </h5>
                        
                        <div class="action">
                            <button class="btn btn-primary ad_to_cart" type="button">Add To Cart</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart add_wish"></span></button> 
                        </div>

                      </br></br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
