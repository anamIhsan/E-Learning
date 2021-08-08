<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->roles == true)
        {
            return $next($request);
        }

        return redirect('/Admin/dashboard');

        // if(Auth::user() && Auth::user()->roles == true)
        // {
        //     return $next($request);
        // }

        // return redirect('/');
    }
}
