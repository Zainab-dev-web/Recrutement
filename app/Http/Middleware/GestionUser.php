<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GestionUser
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
        if (Auth::check() && Auth::user()->role_id == 1 ||Auth::check() && Auth::user()->role_id == 2 ||Auth::check() && Auth::user()->role_id == 3) {
            return $next($request);
        
        };
    }
}
