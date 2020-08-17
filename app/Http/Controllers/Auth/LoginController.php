<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Mail\OTPMail; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/verify';

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        $result = $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );   
        if($result){ 
            // dd(auth()->user());
            auth()->user()->sendOTP();
        }
        return $result;
    }

    public function logout(Request $request)
    {
        // dd(auth()->user()->update(['is_verified' => 0]));
        auth()->user()->update(['is_verified' => 0]);
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

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
