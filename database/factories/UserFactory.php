<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $roles = ['crowdfunder', 'investor'];
        $role = 'campaigner';


        if(rand(1,2)==1){
            $role = 'campaigner';
        }else{
            $role = $roles[array_rand($roles)];
        }



        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'role' => fake()->randomElement(['campaigner', 'crowdfunder', 'investor']),
            'image' => fake()->imageUrl(400, 400, 'people'),
            'stripe_id' => Str::uuid(), // Simulated Stripe customer ID
            'pm_type' => fake()->randomElement(['visa', 'mastercard', 'amex']),
            'pm_last_four' => fake()->numerify('####'),
            'trial_ends_at' => null
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
