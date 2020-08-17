<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Cache;

class VerifyOTPTest extends TestCase
{
    use DatabaseMigrations;

    public function a_user_can_submit_otp_and_Get_verified(){

        $this->loginUser();
        $OTP = auth()->user()->cacheTheOTP();
        $this->post('/verifyOTP', ['OTP' => $OTP])->assertStatus(302);
        $this->assertDatabaseHas('users',['is_verified' => 1]); 
    }

    public function user_can_see_otp_verify_page()
    {
        $this->loginUser();
        $this->get('/verifyOTP')->assertStatus(200)->assertSee('Enter OTP');
    }

}
