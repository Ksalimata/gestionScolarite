<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if (Auth::user()->type!='admin' && Auth::user()->type!='super_admin')
        {
            return redirect()->back()->with('error',"Vous n'êtes pas autorisé à accéder à cet espace."); 

        }
        
        return $next($request);
    }
}
