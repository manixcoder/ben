<?php

namespace App\Http\Middleware;

use Auth;
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
        dd(Auth::user()->isAdmin());
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        } else {
            $Role = Auth::user()->roles->first();
            return redirect('/' . $Role->name);
        }
        //return $next($request);
    }
}
