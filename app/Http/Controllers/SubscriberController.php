<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            // 'email' => 'required|email'
            'email' => 'required|email|unique:subscribers'
        ]);
       
        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        // Mail::to($request->email)->send(new WelcomeMail());
        
        Toastr::success('You are successfully added to our subscriber list.', 'Success', ["positionClass" => "toast-bottom-center"]);
        return redirect()->back();
    }

    public function unsubscribe(Request $request)
    {

        $expected = md5( $user['id'] . $SECRET_STRING );
    
        if( $_GET['validation_hash'] != $expected )
            throw new Exception("Validation failed.");
    
        //delete email from subscriber
    }
}
