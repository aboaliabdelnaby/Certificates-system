<?php

namespace App\Http\Middleware;

use Closure;

class user3
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
        if(auth()->user()->id==3){
            return redirect('/');
        }
        return $next($request);
    }
}
