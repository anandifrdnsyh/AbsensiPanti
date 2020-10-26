<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
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
        // dd(!Auth::guard('users')->check());
        if (! Auth::guard('users')->check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == 2) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
