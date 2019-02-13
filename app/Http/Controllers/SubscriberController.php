<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class SubscriberController extends Controller
{

    public function index()
    {
        return view('subscribe.index');
    }

    public function thankyou()
    {
        return view('subscribe.thankyou');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'email' => 'required|email'
            // 'email' => 'required|email|unique:subscribers'
        ]);
       
        // $subscriber = new Subscriber();
        // $subscriber->email = $request->email;
        // $subscriber->save();

        if(Newsletter::isSubscribed($request->email)){
            
            
            Toastr::success('The email is already a subsciber to our list.', 'Success', ["positionClass" => "toast-bottom-center"]);
            return redirect()->route('subscribe');
        } else {
            Newsletter::subscribePending($request->email);
            Toastr::success('You are successfully added to our subscriber list.', 'Success', ["positionClass" => "toast-bottom-center"]);
            return redirect()->route('subscribe.thankyou');
        }
        
        

        // Mail::to($request->email)->send(new WelcomeMail());
        
        // Toastr::success('You are successfully added to our subscriber list.', 'Success', ["positionClass" => "toast-bottom-center"]);
        // return redirect()->back();
    }

    public function unsubscribe(Request $request)
    {

        return view('pages.unsubscribe');
    }

    public function goodbye()
    {

        return view('subscribe.goodbye');
    }

    public function delete(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            // 'email' => 'required|email'
            'email' => 'required|email|exists:subscribers,email'
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
