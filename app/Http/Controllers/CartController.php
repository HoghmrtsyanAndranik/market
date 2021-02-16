<?php
namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
use Session;
use App\Product;
use App\ProductsPhoto;
class CartController extends Controller
{
    public function addToCart(Request $r){
     //  try {
       $cart = new Cart;
       $cart->product_id = $r->product_id;
       $cart->user_id =Session::get('user_id');
       $cart->count =1;
       //print_r($cart);die;
       $cart->save();
    //   }
    //   catch (\Exception $e) { 
    //      if ($e->getCode() == 23000) {
    //         return "Այս ապրանքը դուք արդեն ընտրել եք";  
    //      }
    //   }
    }
    public function showToCart(){
        $rows = Cart::where("user_id","=",Session::get("user_id"))->get();

       if(count($rows)==0){
          return view('empty_cart');
        }
         return view('cart')->with("rows", $rows);
    }


    public function deleteFromCart(Request $r){
              Cart::destroy($r->id);

    }
    public function updateCart(Request $r){
    	
         $cart=Cart::find($r->id);
         $cart->count=$r->count;
         $cart->save();
    }


}
