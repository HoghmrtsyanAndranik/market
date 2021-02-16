<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{


	public $table="cart";
    public $timestamps=false;
    public function photo(){
        return $this->hasMany('App\ProductsPhoto');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }


    
}
