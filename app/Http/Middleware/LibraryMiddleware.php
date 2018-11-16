<?php

namespace App\Http\Middleware;

use Closure,Auth;

class LibraryMiddleware
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

        if(Auth::user()->userType == 'librarian'){
            return $next($request);
        }

        return redirect('student');
    }
}
