<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Candidat
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
            return $next($request);
        }
        elseif (Auth::user()->type == 'R') {
            return redirect('recruteurs');
        }
        else {
            return redirect()->route('login');
        }
    }
}
