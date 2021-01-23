<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Redirect;
use Validator;
use Session;
use Cookie;
// use Mail;
// use Artisan;

class Main extends Controller
{
    public function home(){
    	$c=Cookie::get('user_id');

     return view('home');
    }
    public function register(){
     return view('register');
    }

    public function addUser(Request $r){

      $validator = Validator::make($r->all(), [
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required|integer',
            'email' => 'required|email',
            'password' => ['required', 'regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/'],
            'confirmPassword' => 'required',
        ]);

        $email = User::where('email',$r->email)->first();
        $validator->after(function ($validator) use($email) {
            if ($email) {
                $validator->errors()->add('email', 'Email Already exists!');
            }
        });
        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }else{

        $u = new User();
        $u->name = $r->name;
        $u->surname = $r->surname;
        $u->age = $r->age;
        $u->email = $r->email;
        $u->created_at=date('Y-m-d h:i:s');
        $u->updated_at=date('Y-m-d h:i:s');
        $u->password = Hash::make($r->password);
        $dd=$u->save();

        return Redirect::to("/");
        }
    }
    public function login(Request $r){
     
      if(Cookie::has('user_id')){

               Session::put("user_id", Cookie::get('user_id'));
               Session::put("user_email",Cookie::get('user_email'));
               return redirect('/');
            }


            return view("login");
    }

    public function loginUser(Request $r){
      $validator = Validator::make($r->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $r->email)->first(); 


        $validator->after(function ($validator) use($user,$r) {
            if (!$user) {
                $validator->errors()->add('email', 'User is not registered!');
            }elseif(!Hash::check($r->password, $user->password)) {
                $validator->errors()->add('password', 'Password is not correct!');
            }
         });

        if ($validator->fails()) {
            return redirect('/login')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            Session::put("user_id", $user->id);
            Session::put("user_email", $user->email);
            if($r->remember=='on'){
            	// Cookie::put("user_id", $user->id, 60*24*365,'/');
            	// Cookie::put("user_email", $user->email, 60*24*365,'/');
            	Cookie::queue(Cookie::forever("user_id", $user->id));
                Cookie::queue(Cookie::forever("user_email", $user->email));
                // Cookie::forever("user_id", $user->id,'/');
                // Cookie::forever("user_email", $user->email,'/');
                  // echo 'remember=555 '.$r->remember;
                  //    die;
            }
            
            if($user->role == "user"){
                return Redirect::to('/profile');
            }elseif($user->role == "admin"){
                return Redirect::to('/admin');
            }
        }
    }
    function profile(){
        $user = User::where('id',Session::get("user_id"))->first();
      
        return view('profile')->with("user",$user);
    }
}
