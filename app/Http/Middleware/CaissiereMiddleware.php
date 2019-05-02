<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CaissiereMiddleware
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
        if (Auth::user()->type!='member' && Auth::user()->type!='super_admin')
        {
            return redirect()->back()->with('error',"Vous n'êtes pas autorisé à accéder à cet espace."); 

        }

        return $next($request);
    }
}
