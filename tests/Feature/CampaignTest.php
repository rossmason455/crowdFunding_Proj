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
    public function test_create_campaign(): void
    {   

        $user = User::find(20);
        if (!$user) {
            throw new \Exception('User with ID 20 does not exist');
        }




        $validated  = [
            'title' => 'New Campaign',
            'description' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'progress' => 10,

            'goal' => 10000,
            'solution' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'start_date' => now()->subMonths(4),
            'end_date' => now()->addMonths(8),
          
            'competitive_landscape' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
            'team' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
            'use_of_funds' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page',
             'campaign_type' => 'Crowdfunding',
             'user_id' => null
        ];

        $campaign = Campaign::create($validated);

        $response = $this->post(route('home.storeCampaign'));

        $this->assertDatabaseHas('campaigns', [
            'title' => 'New Campaign',
            'description' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
             'progress' => 10,

            'goal' => 10000,
            'solution' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            
            
            'start_date' => now()->subMonths(4),
            'end_date' => now()->addMonths(8),
            'competitive_landscape' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
            'team' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset',
            'use_of_funds' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page',
             'campaign_type' => 'Crowdfunding',
             'user_id' => null
        ]);


        $response->assertRedirect(route('home.dashboard'));
    }
}



       