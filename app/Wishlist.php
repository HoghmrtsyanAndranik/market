<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\ProductPhoto;
//use App\Product;
class Wishlist extends Model
{
    public $table="wishlist";
    public $timestamps=false;

    // public function photo(){
    //     return $this->hasMany('ProductPhoto','product_id', 'product_id');
    // }

    // public function product(){
    //     return $this->belongsTo('Product', 'product_id', 'id');
    // }
}
