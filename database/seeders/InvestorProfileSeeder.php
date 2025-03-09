<?php

namespace Database\Seeders;
use App\Models\InvestorProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestorProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InvestorProfile::insert([
            [
                'user_id' => 21,
                'risk_profile' => 'moderate',
                'min_investment' => 5000.00,
                'max_investment' => 25000.00,
                'investment_preference' => 'Technology, Renewable Energy, AI startups',
                'investment_approach' => 'Long-term growth with a focus on sustainable industries.',
                'preferred_investment_stage' => 'growth_stage',
                'investment_interest' => 'AI-powered automation, green energy solutions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 23,
                'risk_profile' => 'high',
                'min_investment' => 10000.00,
                'max_investment' => 50000.00,
                'investment_preference' => 'Fintech, Crypto, Emerging Markets',
                'investment_approach' => 'Aggressive investment in high-risk, high-reward sectors.',
                'preferred_investment_stage' => 'early_stage',
                'investment_interest' => 'Decentralized finance, blockchain projects.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 24,
                'risk_profile' => 'low',
                'min_investment' => 2000.00,
                'max_investment' => 15000.00,
                'investment_preference' => 'Healthcare, Education, ESG initiatives',
                'investment_approach' => 'Stable returns through impact-driven investments.',
                'preferred_investment_stage' => 'late_stage',
                'investment_interest' => 'EdTech platforms, medical research funding.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 27,
                'risk_profile' => 'moderate',
                'min_investment' => 7000.00,
                'max_investment' => 30000.00,
                'investment_preference' => 'AI, Robotics, Smart Cities',
                'investment_approach' => 'Balancing innovation with risk management.',
                'preferred_investment_stage' => 'growth_stage',
                'investment_interest' => 'Smart city infrastructure, automation startups.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 29,
                'risk_profile' => 'high',
                'min_investment' => 15000.00,
                'max_investment' => 60000.00,
                'investment_preference' => 'SpaceTech, Biotech, Quantum Computing',
                'investment_approach' => 'High-risk, visionary investments in disruptive fields.',
                'preferred_investment_stage' => 'early_stage',
                'investment_interest' => 'Space exploration startups, biotech research.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 35,
                'risk_profile' => 'low',
                'min_investment' => 3000.00,
                'max_investment' => 20000.00,
                'investment_preference' => 'Sustainable Agriculture, Clean Energy',
                'investment_approach' => 'Steady investments in essential, long-term industries.',
                'preferred_investment_stage' => 'late_stage',
                'investment_interest' => 'Organic farming, renewable energy farms.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 37,
                'risk_profile' => 'moderate',
                'min_investment' => 8000.00,
                'max_investment' => 35000.00,
                'investment_preference' => 'Gaming, Virtual Reality, Metaverse',
                'investment_approach' => 'Leveraging tech trends for long-term value.',
                'preferred_investment_stage' => 'growth_stage',
                'investment_interest' => 'VR gaming platforms, metaverse projects.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 38,
                'risk_profile' => 'high',
                'min_investment' => 12000.00,
                'max_investment' => 75000.00,
                'investment_preference' => 'Cybersecurity, AI Ethics',
                'investment_approach' => 'Investing in critical technologies for future security.',
                'preferred_investment_stage' => 'early_stage',
                'investment_interest' => 'AI security systems, digital identity protection.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 39,
                'risk_profile' => 'low',
                'min_investment' => 5000.00,
                'max_investment' => 25000.00,
                'investment_preference' => 'Social Enterprises, Impact Investing',
                'investment_approach' => 'Focusing on businesses that drive social change.',
                'preferred_investment_stage' => 'late_stage',
                'investment_interest' => 'Affordable housing projects, microfinance startups.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
