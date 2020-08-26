<?php

namespace App\Http\Controllers;

class ResendController extends Controller
{
    public function resend()
    {
        auth()->user()->sendOTP();
        return back()->with('Message', 'Your new OTP is sent, please check !');
    }
}
