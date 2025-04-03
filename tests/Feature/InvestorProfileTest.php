<?php

namespace Tests\Feature;
use App\Models\User;
use App\Models\InvestorProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvestorProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     */
//    public function test_create_investor_profile(): void
//    {   
//
//      $user = User::firstOrCreate([
//                    'id' => 20,
//                ], [
//                   'name' => 'John Melrose',
//            'email' => 'john123@examplee.com',
//            'email_verified_at' => now(),
//            'password' => 'hello',
//            'remember_token' => '84QI5BKtiA',
//            'role' => 'campaigner',
//            'image' => 'image.jpg',
//            'stripe_id' => '6c1deb66-478c-4046-9fe1-6cc80f9831f0',
//           'pm_type' => 'amex',
//           'pm_last_four' => '1234',
//           'trial_ends_at' => null
//               ]);
//
//
//
//
//        $validated  = [
//            'risk_profile' => 'moderate',
//            'min_investment' => 5000,
//             'max_investment' => 10000,
//
//            'investment_preference' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it ',
//            'investment_approach' => 'standard dummy text ever since the 1500s, when an .',
//           'preferred_investment_stage' => 'growth_stage',  
//           'investment_interest' => '2025-12-31',
//         
//  
//           
//           'user_id' => $user->id,  
//       ];
//
//        $investorProfile = InvestorProfile::create($validated);
//
//        $response = $this->actingAs($user)
//        ->post(route('home.storeInvestorProfile'), $validated);
//
//        $this->assertDatabaseHas('investor_profiles', $validated);
//
//    }
//
//    public function test_read_investor_profile(){
//        
//                    $user = User::create([
//                        
//                        'name' => 'John Melrose',
//                        'email' => 'john123@examplee.com',
//                        'email_verified_at' => now(),
//                        'password' => bcrypt('hello'), 
//                        'remember_token' => '84QI5BKtiA',
//                        'role' => 'campaigner',
//                        'image' => 'image.jpg',
//                        'stripe_id' => '6c1deb66-478c-4046-9fe1-6cc80f9831f0',
//                        'pm_type' => 'amex',
//                        'pm_last_four' => '1234',
//                        'trial_ends_at' => null
//                    ]);
//        
//        
//        
//        
//                    $validated  = [
//                        'risk_profile' => 'moderate',
//                        'min_investment' => 5000,
//                         'max_investment' => 10000,
//            
//                        'investment_preference' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it ',
//                        'investment_approach' => 'standard dummy text ever since the 1500s, when an .',
//                       'preferred_investment_stage' => 'growth_stage',  
//                       'investment_interest' => '2025-12-31',
//                     
//              
//                       
//                       'user_id' => $user->id,  
//                   ];
//        
//                   $investorProfile = InvestorProfile::create($validated);
//        
//        
//            $response = $this->actingAs($user)
//                     ->get(route('home.showProfile', $investorProfile));
//        
//        
//                     $this->assertDatabaseHas('investor_profiles', $validated);
//        
//                }
//
//
//                public function test_update_investor_profile(): void
//                {   
//            
//                   $user = User::firstOrCreate([
//                                'id' => 20,
//                            ], [
//                               'name' => 'John Melrose',
//                        'email' => 'john123@examplee.com',
//                        'email_verified_at' => now(),
//                        'password' => 'hello',
//                        'remember_token' => '84QI5BKtiA',
//                        'role' => 'campaigner',
//                        'image' => 'image.jpg',
//                        'stripe_id' => '6c1deb66-478c-4046-9fe1-6cc80f9831f0',
//                       'pm_type' => 'amex',
//                       'pm_last_four' => '1234',
//                       'trial_ends_at' => null
//                           ]);
//            
//            
//            
//            
//                    $validated  = [
//                        'risk_profile' => 'moderate',
//                        'min_investment' => 5000,
//                         'max_investment' => 10000,
//            
//                        'investment_preference' => 'standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it ',
//                        'investment_approach' => 'standard dummy text ever since the 1500s, when an .',
//                       'preferred_investment_stage' => 'growth_stage',  
//                       'investment_interest' => '2025-12-31',
//                     
//              
//                       
//                       'user_id' => $user->id,  
//                   ];
//            
//                    $investorProfile = InvestorProfile::create($validated);
//
//
//                    $updatedData  = [
//                        'risk_profile' => 'high',
//                        'min_investment' => 6000,
//                         'max_investment' => 20000,
//            
//                        'investment_preference' => 'standard dummy text ever since the 1500s, when an unknown printer took a galler of type and scrambled it ',
//                        'investment_approach' => 'standard dummy text ever since the 1500s, when an .',
//                       'preferred_investment_stage' => 'growth_stage',  
//                       'investment_interest' => '2025-12-31',
//                     
//              
//                       
//                       'user_id' => $user->id,  
//                   ];


//                   $response = $this->actingAs($user)
//->put(route('home.updateInvestorProfile', $investorProfile->id), $updatedData);
//
//
//
//            
//                 
//            
//                    $this->assertDatabaseHas('investor_profiles', $updatedData);
//            
//                }












}
