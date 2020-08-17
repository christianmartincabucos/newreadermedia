<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setup(){
        $this->withoutExceptionHandling();
    }
    public function loginUser($args = [])
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
    }
}

