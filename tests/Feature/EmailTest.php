<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;

class EmailTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function an_otp_email_is_send_when_user_is_logged_in()
    {
        Mail::fake();
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $res = $this->post('/login', ['email' => $user->email, 'password'=> 'password']);
        Mail::assertSent(OTPMail::class); 
    } 
    public function an_otp_email_is_not_send_if_credentials_are_incorrect()
    {
        Mail::fake();
        $this->withExceptionHandling();
        $user = factory(User::class)->create();
        $res = $this->post('/login', ['email' => $user->email, 'password'=>'password']);
        Mail::assertNotSent(OTPMail::class); 
    }
    public function otp_is_stred_in_cache_for_the_user(){
         
        $user = factory(User::class)->create();
        $res = $this->post('/login', ['email' =>$user->email, 'password' => 'secret']); 
        $this->assertNotNull($user->OTP());
     } 
} 
