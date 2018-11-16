<?php

namespace App\Http\Middleware;

use Closure,Auth;

class departmentalMiddleware
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
     if (Auth::user()->userType=='departmental'){
                 return $next($request);
     }
     else
dd('hey');
     return redirect('hey');

    }
}
