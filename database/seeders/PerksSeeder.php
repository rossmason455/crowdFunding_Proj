<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perk;
class PerksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perk::insert([
            [
               'title' => 'Exclusive Early Access to Immunotherapy Trials', 
               'campaign_id' => 1,
'description' => 'As a supporter of this campaign, you will receive exclusive early access to our immunotherapy trials. This is your opportunity to witness firsthand the groundbreaking treatment that could revolutionize cancer care.',
'amount_required' => 5000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
               'title' => 'Personalized Consultation with Leading Oncologists', 
               'campaign_id' => 1,
'description' => 'Contribute to our campaign and get a one-on-one consultation with world-renowned oncologists. This session will focus on the latest advancements in cancer treatment and how immunotherapy is changing the landscape of cancer care.',
'amount_required' => 10000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'VIP Invitation to Launch Event', 
                'campaign_id' => 1,
'description' => 'As a top supporter, you’ll be invited to our exclusive launch event. Meet the researchers, oncologists, and clinical trial participants who are part of our groundbreaking immunotherapy project. Enjoy a VIP experience and be a part of history in the making.',
'amount_required' => 20000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'Early Bird Access to AvaWatz Smart Home System',
                'campaign_id' => 2,
'description' => 'Be one of the first to experience the future of smart living. As a supporter, you will gain early access to our AvaWatz smart home system and enjoy exclusive benefits before it hits the market.',
'amount_required' => 1000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
              'title' => 'Personalized Smart Home Consultation',
              'campaign_id' => 2,
'description' => 'Support the campaign and receive a personalized consultation to help you integrate AvaWatz into your home. Our experts will design a smart home system tailored to your needs and preferences.',
'amount_required' => 3000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
               'title' => 'VIP Invitation to AvaWatz Launch Event',
               'campaign_id' => 2,
'description' => 'Join us for an exclusive launch event where you will meet the innovators behind AvaWatz. Get a first-hand look at the smart home system and enjoy a VIP experience with industry experts and early adopters.',
'amount_required' => 5000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
             'title' => 'Exclusive Beta Access to Cintap Cloud Platform',
             'campaign_id' => 4,
'description' => 'Be one of the first to try Cintap’s cutting-edge cloud-based business management platform. Enjoy exclusive beta access and help shape the future of business operations with your feedback.',
'amount_required' => 500.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
              'title' => '1-Year Premium Subscription to Cintap',
              'campaign_id' => 4,
'description' => 'Support Cintap’s mission and receive a full year of premium access to our cloud platform. Unlock all features, including project management, invoicing, HR tools, and more to streamline your business operations.',
'amount_required' => 2500.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'Personalized Cintap Business Consultation',
                'campaign_id' => 4,
'description' => 'Receive a one-on-one consultation with our experts to help integrate Cintap into your business operations. Our team will provide tailored solutions to optimize your workflow and improve overall efficiency.',
'amount_required' => 5000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
              'title' => 'Exclusive Seasonal Bouquet Delivery',
              'campaign_id' => 5,
'description' => 'Support Designer Blooms and enjoy a premium seasonal bouquet delivered straight to your door. Our handpicked, seasonal flowers will brighten any occasion with elegance and beauty.',
'amount_required' => 100.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
              'title' => 'Personalized Floral Arrangement for Special Occasions',
              'campaign_id' => 5,
'description' => 'Support our campaign and receive a personalized floral arrangement designed for any occasion. Whether it’s a wedding, anniversary, or birthday, we’ll tailor a bouquet just for you.',
'amount_required' => 500.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
            'title' => 'VIP Flower Subscription – Monthly Bouquets',
            'campaign_id' => 5,
'description' => 'Join Designer Blooms with a VIP subscription! Get a beautiful, fresh bouquet delivered to your doorstep every month. Perfect for anyone who loves the beauty of flowers year-round.',
'amount_required' => 1500.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'Early Access to EZscope – Portable Diagnostic Device',
                'campaign_id' => 6,
'description' => 'Support EZscope and be among the first to receive a cutting-edge portable diagnostic device. Help bring remote diagnostics to healthcare providers everywhere.',
'amount_required' => 250.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
              'title' => 'Exclusive Training Session for EZscope Device Use',
              'campaign_id' => 6,
'description' => 'Contribute to our campaign and get exclusive access to a virtual training session on how to use the EZscope diagnostic device effectively. Learn all the features and maximize its potential.',
'amount_required' => 1000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'EZscope Premium Bundle – Full Diagnostic Kit',
                'campaign_id' => 6,
'description' => 'For the most committed supporters, get the complete EZscope diagnostic kit, including the device, app access, and all necessary accessories to perform remote medical assessments.',
'amount_required' => 5000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'Early Access to Fivvy Platform – Data Collection Made Easy',
                'campaign_id' => 7,
'description' => 'Support our campaign and get early access to the Fivvy platform. Be one of the first to try our smart data collection solutions and optimize your data collection process.',
'amount_required' => 200.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
           'title' => 'Exclusive Fivvy Training – Learn to Use the Platform',
           'campaign_id' => 7,
'description' => 'Contribute to our campaign and gain exclusive access to a detailed training session. Learn how to leverage the Fivvy platform and sensors to maximize your data collection efficiency.',
'amount_required' => 1500.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'Fivvy Full System – Smart Sensors & Platform Access',
                'campaign_id' => 7,
'description' => 'For our most dedicated supporters, receive a complete Fivvy data collection system, including smart sensors and full access to the platform. Perfect for businesses or researchers looking to revolutionize their data collection.',
'amount_required' => 10000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
               'title' => 'VIP Membership – Exclusive Access to Luxury Travel Deals',
               'campaign_id' => 9,
'description' => 'Support our campaign and gain VIP membership to the Luxury Vacation Club. Enjoy exclusive access to discounted luxury vacation packages, private tours, and priority booking for top-tier resorts.',
'amount_required' => 500.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
               'title' => 'Private Island Getaway – Ultimate Luxury Experience',
               'campaign_id' => 9,
'description' => 'Contribute to the campaign and enjoy an exclusive private island vacation. This all-inclusive package includes a luxurious private villa, personal chef, and a bespoke itinerary tailored to your preferences.',
'amount_required' => 50000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'Elite Cultural Tour – Discover Unique Destinations in Style',
                'campaign_id' => 9,
'description' => 'Donate to the campaign and receive an all-expenses-paid cultural tour. Experience bespoke cultural and historical tours with private guides, luxury transportation, and exclusive access to iconic landmarks.',
'amount_required' => 25000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
                'title' => 'Green Energy Starter Kit – Solar Power for Your Home',
                'campaign_id' => 10,
'description' => 'Support our campaign and receive a solar power starter kit for your home. This kit includes a small solar panel system with installation to get you started on your journey to sustainable energy.',
'amount_required' => 1000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
             'title' => 'Free Solar Consultation and Installation – Go Solar with Ease',
             'campaign_id' => 10,
'description' => 'Contribute to the campaign and get a free consultation along with a full solar system installation for your home or business. Our experts will assess your energy needs and ensure seamless integration of solar panels.',
'amount_required' => 10000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],
            [
               'title' => 'Solar Power for Your Business – Maximize Energy Savings',
               'campaign_id' => 10,
'description' => 'Donate to the campaign and receive a custom-designed solar energy solution for your business. This perk includes system design, installation, and a tailored energy-saving plan that suits your business needs.',
'amount_required' => 50000.00,
'image' => '/images/perks/Perks_image.jpg',

              
            ],//////////
            [
               'title' => 'Eco Home Starter Kit – Begin Your Sustainable Living Journey',
               'campaign_id' => 11,
'description' => 'Support our campaign and receive an eco-friendly starter kit for your home, including solar-powered lights, a rainwater harvesting system, and organic gardening tools to help you live sustainably.',
'amount_required' => 500.00,
'image' => '/images/perks/Perks_image.jpg',

               
             ],
             [
               'title' => 'Build Your Eco-Friendly Dream Home – Sustainable Design Consultation',
               'campaign_id' => 11,
'description' => 'Donate to the campaign and receive a personalized consultation for designing your eco-friendly home, featuring renewable energy solutions, sustainable building materials, and green architecture principles.',
'amount_required' => 10000.00,
'image' => '/images/perks/Perks_image.jpg',


               
             ],
             [
                'title' => 'Live in an Eco Village – Priority Housing Application',
                'campaign_id' => 11,
'description' => 'Contribute to the campaign and receive priority application status for one of our first eco-friendly villages. Be among the first to experience sustainable living in a community designed for the future.',
'amount_required' => 50000.00,
'image' => '/images/perks/Perks_image.jpg',


               
             ],
             [
                'title' => 'Early Access – Be the First to Experience AI-Powered Gameplay',
                'campaign_id' => 12,
'description' => 'Support our campaign and get early access to our AI-driven games. Be among the first to experience a gaming world that adapts to your every move, with personalized gameplay and unique, ever-evolving environments.',
'amount_required' => 100.00,
'image' => '/images/perks/Perks_image.jpg',



               
             ],
             [
                'title' => 'Exclusive In-Game Items – Boost Your Gaming Experience',
                'campaign_id' => 12,
'description' => 'Donate to the campaign and unlock exclusive in-game items, including rare skins, unique avatars, and special abilities that will give you an edge in our AI-driven game worlds.',
'amount_required' => 500.00,
'image' => '/images/perks/Perks_image.jpg',


               
             ],
             [
              'title' => 'Become an NPC – Get Your Own AI-Driven Character in the Game',
              'campaign_id' => 12,
'description' => 'Contribute to the campaign and have your likeness integrated into our game as an NPC. You’ll get an AI-powered character that reacts to player behavior, bringing a new level of immersion to the game world.',
'amount_required' => 2000.00,
'image' => '/images/perks/Perks_image.jpg',



               
             ],
             [
               'title' => 'Early Access to Rizz Wireless Services – Get Connected First',
               'campaign_id' => 14,
'description' => 'Support our campaign and be among the first to experience Rizz Wireless. Enjoy fast, reliable mobile services with a focus on affordability and seamless connectivity, especially in underserved areas.',
'amount_required' => 100.00,
'image' => '/images/perks/Perks_image.jpg',



               
             ],
             [
               'title' => 'Exclusive Discount – Get 50% Off Your First Three Months',
               'campaign_id' => 14,
'description' => 'Contribute to the campaign and receive an exclusive discount of 50% off your first three months of Rizz Wireless services. Stay connected with high-quality mobile data and voice services at a fraction of the cost.',
'amount_required' => 250.00,
'image' => '/images/perks/Perks_image.jpg',



               
             ],
             [
               'title' => 'Lifetime Subscription – Get Unlimited Mobile Service for Life',
               'campaign_id' => 14,
'description' => 'Donate to the campaign and secure a lifetime subscription to Rizz Wireless services. Enjoy unlimited data, voice, and customer support, ensuring you stay connected for years to come.',
'amount_required' => 5000.00,
'image' => '/images/perks/Perks_image.jpg',


               
             ],
             [
              'title' => 'Early Access to Syntra Research Platform – Be the First to Experience AI-Driven Music Production',
              'campaign_id' => 16,
'description' => 'Support our campaign and get early access to Syntra Research’s suite of AI-powered tools. Experience the future of music production by using cutting-edge technology to enhance your creative process.',
'amount_required' => 150.00,
'image' => '/images/perks/Perks_image.jpg',



               
             ],
             [
              'title' => 'Exclusive Music Production Package – Access to Full Suite of Tools',
              'campaign_id' => 16,
'description' => 'Contribute to our campaign and unlock the full set of Syntra Research tools for your music production. From real-time composition suggestions to automated mastering, enjoy a comprehensive package designed to streamline your workflow.',
'amount_required' => 500.00,
'image' => '/images/perks/Perks_image.jpg',


               
             ],
             [
               'title' => 'Professional Music Production Consultation – Expert Guidance to Enhance Your Sound',
               'campaign_id' => 16,
'description' => 'Donate to our campaign and get a personalized consultation with a professional music producer. Get advice on how to maximize the use of Syntra Research’s platform and elevate your music production.',
'amount_required' => 1000.00,
'image' => '/images/perks/Perks_image.jpg',


               
             ],
             [
                'title' => 'Exclusive Early Access to Bakery Process Solutions – Revolutionize Your Bakery with Automation',
                'campaign_id' => 20,
'description' => 'Support our campaign and gain exclusive early access to Bakery Process Solutions’ automation technology. Upgrade your bakery with our state-of-the-art equipment, designed to enhance efficiency and product consistency.',
'amount_required' => 250.00,
'image' => '/images/perks/Perks_image.jpg',



               
             ],
             [
               'title' => 'Automated Production System Package – Complete Automation for Your Bakery',
               'campaign_id' => 20,
'description' => 'Contribute to our campaign and unlock a complete automated production system for your bakery. From dough mixers to packaging solutions, our technology will streamline your production process and increase throughput.',
'amount_required' => 2000.00,
'image' => '/images/perks/Perks_image.jpg',

               
             ],
             [
               'title' => 'Bakery Consulting & Automation Setup – Expert Guidance for Smooth Integration',
               'campaign_id' => 20,
'description' => 'Donate to our campaign and receive personalized consultation on setting up Bakery Process Solutions’ automation systems in your bakery. Our team will guide you through the integration process to ensure maximum efficiency and minimal downtime.',
'amount_required' => 5000.00,
'image' => '/images/perks/Perks_image.jpg',


               
             ],
  
             


            
        ]);
    }
}
