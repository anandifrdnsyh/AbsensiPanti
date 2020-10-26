<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(!Auth::guard('users')->check())
        {
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == 1) {
             return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
