<?php

namespace Tests\Feature;
use App\Models\User;
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
   
   
   
   
     public function test_create_1000_users(): void
    {
        $users = User::factory()->count(1000)->create();

        $this->assertDatabaseCount('users', 1000);



        $user = $users->first();
    
        $this->assertDatabaseHas('users', [
            'name' => $user->name
        ]);


        $this->assertDatabaseHas('users', [
            'email' => $user->email
        ]);

        $this->assertDatabaseHas('users', [
            'password' => $user->password
        ]);

        $this->assertDatabaseHas('users', [
            'remember_token' => $user->remember_token
        ]);

        $this->assertDatabaseHas('users', [
            'stripe_id' => $user->stripe_id
        ]);

        $this->assertDatabaseHas('users', [
            'pm_type' => $user->pm_type
        ]);

        $this->assertDatabaseHas('users', [
            'pm_last_four' => $user->pm_last_four
        ]);

        $this->assertDatabaseHas('users', [
            'role' => $user->role
        ]);

        $this->assertDatabaseHas('users', [
            'image' => $user->image
        ]);
    }
}
