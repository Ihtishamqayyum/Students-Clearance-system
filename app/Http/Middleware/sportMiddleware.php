<?php

namespace App\Http\Middleware;

use Closure,auth;

class sportMiddleware
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
        if (Auth::user()->userType=='sports')
                {
            return $next($request);
        }
        return redirect('student');
    }
}
