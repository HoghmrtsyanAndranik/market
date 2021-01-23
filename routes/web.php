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
Route::get('admin', function () {
     return 'This is admin page';
});
Route::get('/profile', 'Main@profile');