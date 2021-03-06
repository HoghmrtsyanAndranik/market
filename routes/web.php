<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'Main@home');
Route::get('/register', 'Main@register');
Route::post('/adduser', 'Main@addUser');
Route::get('/login', 'Main@login');
Route::post('/loginuser', 'Main@loginUser');
Route::get('/product/item/{id}', 'ProductController@ProductItem');

Route::get('admin', function () {
     return 'This is admin page';
});


Route::group(['middleware' => 'islogin'], function () {

Route::get('/myaccount', 'Main@myAccount');
Route::get('/logout', 'Main@logOut');
Route::get('/profile', 'Main@profile');
Route::get('/addproduct', 'ProductController@addProduct');
Route::post('/savenewproduct', 'ProductController@saveNewProduct');
Route::get('/myproducts', 'ProductController@myProducts');
Route::get('/myproduct/item/{id}', 'ProductController@myProductItem');
Route::post('/itemimages','ProductController@addItemImages');
Route::post('/deleteitemimage','ProductController@deleteItemImage');
Route::get('/deleteproduct','ProductController@deleteProduct');
Route::post('/updateproduct','ProductController@updateProduct');
Route::post('/addtocart','CartController@addToCart');
Route::post('/addtowishlist','WishlistController@addToWishList');
Route::get('/showcart','CartController@showToCart'); 
Route::post('/deletefromcart','CartController@deleteFromCart'); 
Route::post('/updatecart','CartController@updateCart'); 
Route::get('/showwish','WishlistController@showWish');
Route::post('/delwishlist','WishlistController@deleteFromWish'); 
Route::get('/order','OrderController@order'); 
});




