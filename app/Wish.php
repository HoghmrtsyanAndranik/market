<?php

namespace App;
use App\ProductsPhoto as Photo;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    public $table="wishlist";
    public $timestamps=false;

    public function photo(){
        return $this->hasMany('Photo','product_id', 'product_id');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }


}
