<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected function attemptLogin(Request $request)
    {
        return (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1]));
    }
    public function authenticated()
    {

        if(Auth::check()) {
            if(Auth::user()->userType=="provost") {
                return redirect('/provost');
            }
            elseif (Auth::user()->userType=="librarian")
            {
                return redirect('/library');
            }
            elseif (Auth::user()->userType=='hostel')
            {
                return redirect('hostel');
            }
            elseif (Auth::user()->userType=='sports')
            {
                return redirect('sports');
            }
            elseif (Auth::user()->userType=='proctor')
            {
                return redirect('/proctor');
            }
            elseif (Auth::user()->userType=='transport')
            {
                return redirect('/transport');
            }
            elseif (Auth::user()->userType=='Student')
            {
                return redirect('/student');

            }
            elseif (Auth::user()->userType=='departmental')
            {


              return redirect('/departmental');
            }
            else
            {


                return redirect('/finance');
            }

        }
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
