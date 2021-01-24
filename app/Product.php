<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table="products";
    public $timestamps=false;
    // public function photo(){
    //     return $this->hasMany('App\ProductsPhoto','product_id', 'id');
    // }
    //Has many, erb mi hatin hamapatasxanum e shat tvyalner

    // public function user(){
    //     return $this->belongsTo('App\User', 'user_id', 'id');
    // }
}
