<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::has('user_id')){
            return $next($request);
        }else{
            return Redirect::to('login')->with('error','Please login'); //redirecty withi het sessiai meja  qcum
        }
    }
}
