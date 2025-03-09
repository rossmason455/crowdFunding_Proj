<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampaignImage;
use Illuminate\Support\Facades\DB;
class CampaignImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CampaignImage::insert([
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 1
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 2
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 4
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 5
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 6
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 7
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 9
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 10
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 11
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 12
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 14
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 15
              
            ],
            [
                'image' => '/images/perks/Perks_image.jpg',
                'campaign_id' => 16
              
            ],

            
        ]);
    }
}
