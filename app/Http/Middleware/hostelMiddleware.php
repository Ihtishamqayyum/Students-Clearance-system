<?php

namespace App\Http\Middleware;

use Closure,Auth;

class hostelMiddleware
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
        if (Auth::user()->userType=='hostel')
        {
            return $next($request);
        }
      return redirect('student');
    }
}
