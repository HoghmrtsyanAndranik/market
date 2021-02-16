<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;
use Session;
use Redirect;
use DB;
class OrderController extends Controller
{
    public function order(){

      $order=new Order;
      $order->total=Session::get('total');
      $order->user_id=Session::get('user_id');
      $order->save();

      $cart=Cart::where("user_id",Session::get('user_id'))->get();
      foreach($cart as $p){
          DB::table('order_details')->insert([
            'order_id' =>$p->id,
             'product_id' => $p->product_id,
             'count' => $p->count
          ]);
      }
      Cart::where("user_id",Session::get('user_id'))->delete();
      return Redirect::to('/');

    }
   

}
