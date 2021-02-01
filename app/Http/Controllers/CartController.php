<?php

namespace App\Http\Controllers;
use App\Cart;

use Illuminate\Http\Request;
use Session;
use App\Product;

class CartController extends Controller
{


    public function addToCart(Request $r){
     //  try {
       $cart = new Cart;
       $cart->product_id = $r->product_id;
       $cart->user_id =Session::get('user_id');
       $cart->count =1;
       $cart->save();
    //   }
    //   catch (\Exception $e) { 
    //      if ($e->getCode() == 23000) {
    //         return "Այս ապրանքը դուք արդեն ընտրել եք";  
    //      }
    //   }

    }
    public function showToCart(){
        $products = Cart::where("user_id","=",Session::get("user_id"))->get();
        echo '<pre>';
      
        return view('cart')->with("products",$products);
    }

}
