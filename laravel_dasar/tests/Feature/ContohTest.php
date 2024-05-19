<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContohTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // php artisan make:test ContohTest
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
