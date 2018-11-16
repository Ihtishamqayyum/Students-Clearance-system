<?php

namespace App\Http\Middleware;

use Closure,Auth;

class proctorMiddleware
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
        if (Auth::user()->userType=='proctor')
        {

            return $next($request);

        }
        return redirect('student');
        }
    }
