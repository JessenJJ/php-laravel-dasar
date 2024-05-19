<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {   
        //export YOUTUBE="Programmer Zaman Now"
        //memasukan Programmer Zaman Now ke nilai YOUTUBE
        $youtube = env('YOUTUBE','Programmer Zaman Now');

        self::assertEquals('Programmer Zaman Now', $youtube);
    }
    public function testDefaultEnv()
    {
        $author = env('AUTHOR', 'jess');
        // $author = Env::get('AUTHOR','jess');

        self::assertEquals('jess',$author);
    }
}
