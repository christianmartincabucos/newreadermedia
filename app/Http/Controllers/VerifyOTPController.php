<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OTPRequest;

class VerifyOTPController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth')->except('showverifyform');
    }
    
    public function verify(OTPRequest $request)
    {
        // dd(auth()->user()->OTP());
        if(request('OTP') == auth()->user()->OTP()){
            auth()->user()->update(['is_verified' => true]);
            return redirect('/');
        } 

        return back()->withErrors('OTP is expired or invalid');
    }

    public function showverifyform()
    {
        // dd(auth()->user()->is_verified());
        // dd(Auth::user()->is_verified);
        if (Auth::user()->is_verified == 0){
            return view('verify-otp.verify');
        }
        return redirect('/');
    }
}
