<?php

namespace Tests\Feature;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_navigation_links(): void
    {
        $user = User::create([
                
            'name' => 'John Melrose',
            'email' => 'john123@examplee.com',
            'email_verified_at' => now(),
            'password' => bcrypt('hello'), 
            'remember_token' => '84QI5BKtiA',
            'role' => 'campaigner',
            'image' => 'image.jpg',
            'stripe_id' => '6c1deb66-478c-4046-9fe1-6cc80f9831f0',
            'pm_type' => 'amex',
            'pm_last_four' => '1234',
            'trial_ends_at' => null
        ]);

        $response = $this->actingAs($user)->get(route('home.index')); 
    $response->assertStatus(200); 


    $response = $this->actingAs($user)->get(route('dashboard')); 
    $response->assertStatus(200); 
    
    $response = $this->actingAs($user)->get(route('home.profileFilter')); 
    $response->assertStatus(200); 


    $response = $this->actingAs($user)->get(route('home.campaignFilter')); 
    $response->assertStatus(200); 

}



 
    }

