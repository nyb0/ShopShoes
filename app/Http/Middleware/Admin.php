<?php

namespace SHOP\Http\Middleware;

use SHOP\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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
        if (Auth::guest() === false && Auth::user()->role === User::ROLE_ADMIN){
            return $next($request);
        }
        else{
            return redirect('/home');
        }
    }
}
