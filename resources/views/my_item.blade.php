@extends('layouts.account')

    @section('title','My Products')


    @section('my_content')
 
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
                              $del_src=asset("img/delete-sign.png");
                              echo "<div class='tab-pane active' id='pic-1'  style='position:relative'><img src='$src'  style='width: 100%'
                               /><img src=$del_src class='item_image' style='position:absolute;right: 5px;top: 5px;'/></div>";
                              echo"";
                         
                            }
                            
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
                               
                                echo "<li style='position:relative'><img src=$src width=150><img class='item_image' src=$del_src style='position:absolute;right: 5px;top: 5px;'/></li>";
                                

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
                        <h3 class="product-title" contenteditable>{{$product->name}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            
                        </div>
                        <p class="product-description" contenteditable>{{$product->description}}</p>
                        <h4 class="price">current price: <span contenteditable>{{$product->price}}</span></h4>
                        <!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
                        <h5 class="sizes">quantity:
                            <span class="size" data-toggle="tooltip" title="small" contenteditable>{{$product->count}}</span>
                           
                        </h5>
                        
                        <div class="action">
                            <button class="btn btn-primary" type="button">Update</button>
                            <!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
                        </div>
</br></br>
                        <div >
                            <form enctype="multipart/form-data" method="post" action="{{'/itemimages'}}">
                               @csrf
                                <input type="file" name="img[]" multiple>
                                <input type="hidden" name="id" value="{{$product->id}}">
                                   <button>send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
