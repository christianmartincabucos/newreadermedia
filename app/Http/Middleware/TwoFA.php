<?php

namespace App\Http\Middleware;

use Closure;

class TwoFA
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
        /* if (Auth::user()->is_verified == 5) {
            return $next($request);
        } */
        if(auth()->user()->is_verified == 5){
            return $next($request);
        }
        return redirect('/verify');
    }
}
