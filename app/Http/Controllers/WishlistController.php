<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Wishlist;
use Redirect;
class WishlistController extends Controller
{
    public function addToWishList(Request $r){
    	$wishlist=new Wishlist;
    	
        $wishlist->user_id = Session::get("user_id");
        
        $wishlist->product_id = $r->product_id;
       
        $wishlist->save();
    }
//     public function  showWishlist(){
//         $list = Wishlist::where('user_id',Session::get('user_id'))->get();
//         // echo '<pre>';
//         // foreach($list as $c){
           
//         //     print_r($c->product);
//         //    // echo $c->count;
//         // }
//         // die;
//       return view('wishList')->with('wishlist',$list);
//     }
// public function  deleteWishListProduct($id){
//        Wishlist::where('id',$id)->delete();
//        return Redirect::to('/showWishlist');
// }
// public function  deleteWishList(){
//     Wishlist::where('user_id',Session::get('user_id'))->delete();
//     return Redirect::to('/');



// }

}
