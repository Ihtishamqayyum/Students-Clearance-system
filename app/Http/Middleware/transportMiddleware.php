<?php

namespace App\Http\Middleware;

use Closure,Auth;

class transportMiddleware
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
        if (Auth::user()->userType=='transport')
        {
        return $next($request);

        }
        return redirect('student');
    }

}
