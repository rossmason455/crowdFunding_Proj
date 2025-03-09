<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       
        User::factory()->count(20)->create([
            'role' => 'campaigner',
        ]);
    
        
        User::factory()->count(20)->create([
            'role' => function () {
                return array_rand(['crowdfunder' => 'crowdfunder', 'investor' => 'investor']);
            },
        ]);
    }
}
