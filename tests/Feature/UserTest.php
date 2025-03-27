<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
   public function setUp(): void
   {
    parent::setUp();


    Config::set('database.connections.mysql.database', 'testing_db')
   }
   
   
   
   
   
   
     public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
