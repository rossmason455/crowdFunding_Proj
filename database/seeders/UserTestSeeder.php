<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::insert([
        
     [
        'id' => 20,
       'name' => 'John Melrose',
'email' => 'john123@examplee.com',
'email_verified_at' => now(),
'password' => 'hello',
'remember_token' => '84QI5BKtiA',
'role' => 'campaigner',
'image' => 'image.jpg',
'stripe_id' => '6c1deb66-478c-4046-9fe1-6cc80f9831f0',
'pm_type' => 'amex',
'pm_last_four' => '1234',
'trial_ends_at' => null
     ]
    ]);
    }
}
