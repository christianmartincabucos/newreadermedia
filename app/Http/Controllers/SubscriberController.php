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

        return view('pages.unsubscribe');
    }

    public function delete(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'email' => 'required|email'
            // 'email' => 'required|email|unique:subscribers'
        ]);
        $email = $request->email;
        $subscriber = Subscriber::where('email', $email)->first();
        $subscriber->delete();

        
        
        Toastr::success('You are successfully removed to our subscriber list.', 'Success', ["positionClass" => "toast-bottom-center"]);
        return redirect()->route('home');
    }

    public function testmail()
    {
        return view('emails.welcome');
    }

    
}
