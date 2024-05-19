<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
    // php artisan make:test AppEnvironmentTest
    /**
     * A basic feature test example.
     */
    public function testAppEnv()
    {
        if(App::environment('testing')){
            self::assertTrue(false);
        }
    }
}
