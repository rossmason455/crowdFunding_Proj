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
   
     public function testDatabaseConnectionIsCorrect()
     {
         
         $this->assertEquals('testing_db', config('database.connections.mysql.database'));
     }
   
   
   
   
     public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
