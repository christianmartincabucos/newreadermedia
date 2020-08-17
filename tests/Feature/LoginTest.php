<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    public function after_login_user_can_not_access_home_page_until_verifired(){

        $this->loginUser();

        $this->get('/verify')->assertRedirect('/');
    }

    public function after_login_user_can_access_home_page_if_verifired()
    {
        $this->loginUser(['is_verified' => 1]);
        $this->get('/verify')->assertStatus(200);
    }
}
