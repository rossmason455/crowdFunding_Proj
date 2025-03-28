<?php

namespace Tests\Feature;
use App\Models\Campaign;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CampaignTest extends TestCase
{
    /**
     * A basic feature test example.
     */
   // public function test_create_campaign(): void
   // {   
//
   //    $user = User::firstOrCreate([
   //                 'id' => 20,
   //             ], [
   //                'name' => 'John Melrose',
   //         'email' => 'john123@examplee.com',
   //         'email_verified_at' => now(),
   //         'password' => 'hello',
   //         'remember_token' => '84QI5BKtiA',
   //         'role' => 'campaigner',
   //         'image' => 'image.jpg',
   //         'stripe_id' => '6c1deb66-478c-4046-9fe1-6cc80f9831f0',
   //         'pm_type' => 'amex',
   //         'pm_last_four' => '1234',
   //         'trial_ends_at' => null
   //             ]);
//
//
//
//
   //     $validated  = [
   //         'title' => 'New Campaign',
   //         'description' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
   //          'progress' => 10,
//
   //         'goal' => 10000.00,
   //         'solution' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
   //         'start_date' => '2025-01-01',  
   //         'end_date' => '2025-12-31',
   //       
   //         'competitive_landscape' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
   //         'team' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
   //         'use_of_funds' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page',
   //          
   //         'campaign_type' => 'Crowdfunding',
   //         
   //         'user_id' => $user->id,  
   //     ];
//
   //     $campaign = Campaign::create($validated);
//
   //     $response = $this->post(route('home.storeCampaign'));
//
   //     $this->assertDatabaseHas('campaigns', [
   //         'title' => 'New Campaign',
   //         'description' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
   //          'progress' => 10,
//
   //         'goal' => 10000.00,
   //         'solution' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
   //        'start_date' => '2025-01-01',  
   //         'end_date' => '2025-12-31',
   //       
   //         'competitive_landscape' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
   //         'team' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
   //         'use_of_funds' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page',
   //          'campaign_type' => 'Crowdfunding',
   //         'user_id' => $user->id,  
   //     ]);
//
//
   //     $response->assertRedirect(route('home.index'));
   // 
   // }




        public function test_read_campaign(){

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




    $validated  = [
        'title' => 'New Campaign',
        'description' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
         'progress' => 10,

        'goal' => 10000.00,
        'solution' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        'start_date' => '2025-01-01',  
        'end_date' => '2025-12-31',
      
        'competitive_landscape' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
        'team' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
        'use_of_funds' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page',
         
        'campaign_type' => 'Crowdfunding',
        
        'user_id' => $user->id,  
    ];

    $campaign = Campaign::create($validated);


    $response = $this->actingAs($user)
             ->get(route('home.show', $campaign));


    $response->assertStatus(200);
    $response->assertSee($campaign->title);
    $response->assertSee($campaign->description); 

        }


}



       