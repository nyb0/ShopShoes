<?php

namespace SHOP\Http\Middleware;

use SHOP\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            if (Auth::user()->role === User::ROLE_ADMIN) {
                return redirect('/admin');
            }
            
            return redirect('/home');
        }

        return $next($request);
    }
}
