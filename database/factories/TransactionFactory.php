<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $crowdfunderUserIds = User::where('role', 'crowdfunder')->pluck('id')->toArray();

        $campaignIds = Campaign::pluck('id')->toArray();


        return [
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'stripe_transaction_id' => 'txn_' . $this->faker->unique()->regexify('[A-Za-z0-9]{24}'), 
            'payment_status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
            'stripe_payment_method_id' => 'pm_' . $this->faker->unique()->regexify('[A-Za-z0-9]{24}'),
            'stripe_payment_intent_id' => 'pi_' . $this->faker->unique()->regexify('[A-Za-z0-9]{24}'),
            'campaign_id' => $this->faker->randomElement($campaignIds),
            'user_id' => $this->faker->randomElement($crowdfunderUserIds),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
