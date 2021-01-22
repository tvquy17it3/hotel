<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Permission
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
        $check = Auth::guard($guard)->user()->role;
        if ($check != 1) {
            if ($check !=3) {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
