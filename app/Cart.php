<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{


	public $table="cart";
    public $timestamps=false;
    public function photo(){
        return $this->hasMany('App\ProductPhoto','product_id', 'product_id');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }


    
}
