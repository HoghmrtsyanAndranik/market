<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductsPhoto;
use Redirect;
use Validator;
use Session;
use Cart;

class ProductController extends Controller
{
    public function addProduct(){
    	return view('add_product');
    }
    public function saveNewProduct(Request $r){

    
      $validator = Validator::make($r->all(), [
            'name' => 'required',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'description' => 'required'
            
        ]);

        if ($validator->fails()) {

            return redirect('/addproduct')
                        ->withErrors($validator)
                        ->withInput();
        }


        $product = new Product();
        $product->name = $r->name;
        $product->price = $r->price;
        $product->count = $r->count;
        $product->description = $r->description;
        $product->user_id = Session::get("user_id");
        
        $product->save();
       

        if($r->hasfile('photo'))
        {
           foreach($r->file('photo') as $image)
           {
               $name=time().$image->getClientOriginalName();
               $image->move(public_path().'/img/', $name);
               $photo = new ProductsPhoto;
               $photo->src = $name;
               $photo->product_id = $product->id;

               $photo->save();
           }
        }
        return Redirect::to('/addproduct');


    }
   public function myProducts(){

         $products = Product::where("user_id","=",Session::get("user_id"))->get();
      
        
         return view('my_products')->with("products",$products);
 }
}