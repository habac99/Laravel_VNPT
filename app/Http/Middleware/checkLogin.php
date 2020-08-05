<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkLogin
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
        if(Auth::check()){
            if( Auth::User()->level==1){
                return redirect()->intended('/admin');
            }else{
                return redirect()->intended('/admin/full-dashboard');
            }
        }
        return $next($request);
    }
}
