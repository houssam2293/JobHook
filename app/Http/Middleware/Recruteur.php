<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Recruteur
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
        //return $next($request);
        if (Auth::user()->type == 'C') {
            return redirect('candidats');
        }
        elseif (Auth::user()->type == 'R') {
            return $next($request);
        }
        else {
            return redirect()->route('login');
        }
    }
}
