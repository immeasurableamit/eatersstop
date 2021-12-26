<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdmin
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
        if( Auth::check() )
        {
            if (Auth::user() &&  Auth::user()->is_admin == 1) {
                 return $next($request);
            }

            abort(404);  // for other user throw 404 error
        }
    }
}
