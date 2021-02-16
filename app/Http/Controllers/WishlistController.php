<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Wish;
use Redirect;
class WishlistController extends Controller
{
    public function addToWishList(Request $r){
    	$wishlist=new Wish;
    	
        $wishlist->user_id = Session::get("user_id");
        
        $wishlist->product_id = $r->product_id;
       
        $wishlist->save();
    }


    public function  showWish(){
       $list = Wish::where('user_id',Session::get('user_id'))->get();
       return view('wishList')->with('list',$list);
    }
    public function  deleteFromWish(Request $r){
       Wish::destroy($r->id);

    }


// public function  deleteWishListProduct($id){
//        Wishlist::where('id',$id)->delete();
//        return Redirect::to('/showWishlist');
// }
// public function  deleteWishList(){
//     Wishlist::where('user_id',Session::get('user_id'))->delete();
//     return Redirect::to('/');



// }

}
