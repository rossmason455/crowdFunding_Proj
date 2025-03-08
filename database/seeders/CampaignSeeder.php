<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Campaign;
use App\Models\User;
class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $campaigners = User::where('role', 'campaigner')->get();

        $campaignData = [];
       
        foreach ($campaigners as $campaigner) {
        $campaignData[] =  [
            'title' => 'Revolutionizing Cancer Treatment Through Immunotherapy', 
            'user_id' => $campaigner->id,
            'progress' => '25%', 
            'goal' => 500000.00,
            'solution' => 'Our campaign focuses on developing a revolutionary form of immunotherapy to target and eliminate cancer cells more effectively than current methods. This new approach leverages advanced technology to boost the body’s immune system in fighting off cancer, with promising early-stage clinical results showing significant tumor shrinkage in patients with various forms of cancer.',
            'description' => 'The campaign is dedicated to funding the development of a cutting-edge immunotherapy drug designed to target multiple types of cancer at once. Our approach is innovative in the way it uses the body’s own immune system to specifically target and destroy cancer cells without the severe side effects seen in traditional treatments like chemotherapy and radiation. Our goal is to radically change the way cancer is treated and improve survival rates worldwide, starting with lung cancer and breast cancer, and eventually expanding to other cancers as we progress through clinical trials.',
            'start_date' => now()->subMonths(4),
            'end_date' => now()->addMonths(8),
            'competitive_landscape' => 'Currently, the competitive landscape in the cancer treatment space is filled with a mix of traditional treatments, such as chemotherapy and immunotherapy, but none have successfully targeted multiple cancer types at once with the precision and minimal side effects that our campaign promises. Some competitors are working on similar technologies, but our research shows that our solution could have a significantly higher success rate, which is why we are optimistic about the future. We believe that with the right funding, we can outpace our competitors and bring this much-needed innovation to market first.',
            'team' => 'Our team consists of world-renowned oncologists, biochemists, and pharmaceutical researchers who have been working in the cancer treatment field for over 15 years. The team is led by Dr. Jane Smith, a leading immunologist who has been awarded numerous prestigious awards for her work in cancer research. Together, they bring a wealth of experience in clinical trials, drug development, and regulatory processes. Our team is committed to achieving the highest standards of scientific rigor and ensuring that our treatment is safe, effective, and ready for wide-scale distribution.',
            'campaign_type' => 'crowdfunding',
            'use_of_funds' => 'Funds raised through this campaign will be used to complete the final stages of our clinical trials, specifically for further testing on animal models and the first round of human trials. The remaining funds will go towards the approval process with the FDA, manufacturing the treatment in compliance with industry regulations, and bringing it to market. A portion of the funds will also go towards outreach programs to ensure that people worldwide, especially in developing countries, have access to this life-saving treatment. We estimate that it will cost approximately $10 million to complete the trials and gain approval.',
        ];
        $campaignData[] =  [
           'title' => 'AvaWatz - Revolutionizing Smart Technology for the Future',
'user_id' => $campaigner->id,
'progress' => 60,
'goal' => 1000000.00,
'solution' => 'AvaWatz develops cutting-edge smart technology solutions for everyday problems. Our product line includes smart devices that simplify life through automation, security, and efficiency. With a focus on sustainability, we aim to lead the market in IoT-based innovations.',
'description' => 'Our main product, AvaWatz, is a smart home system that allows users to control appliances, security systems, and lighting with ease. The system is designed to be fully compatible with voice assistants, and it integrates seamlessly into existing smart home environments. With its focus on energy conservation and automation, AvaWatz helps homeowners reduce their carbon footprint while maintaining a high standard of living.',
'start_date' => '2025-09-01',
'end_date' => '2026-09-01',
'competitive_landscape' => 'While there are numerous smart home products in the market, AvaWatz sets itself apart by offering a truly integrated system that connects with all major smart home devices, ensuring ease of use and flexibility. Our primary competitors focus on single-use devices, whereas we provide an all-in-one platform designed to grow with the user’s needs.',
'team' => 'AvaWatz is led by a diverse team of engineers, designers, and visionaries. We have backgrounds in artificial intelligence, hardware design, user experience, and business development. The team’s combined experience in the tech industry makes us uniquely equipped to innovate and disrupt the smart home market.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'The funds raised will be allocated to research and development, product manufacturing, marketing, and customer support. We aim to refine the AvaWatz system, expand its functionality, and ensure a smooth and scalable launch. Additionally, a portion of the funds will go toward building strategic partnerships with other smart home product manufacturers to enhance our ecosystem.'
    ];
        $campaignData[] =  [
   'title' => 'UpBrainsAI - Pioneering Artificial Intelligence for Smarter Solutions',
'user_id' => $campaigner->id,
'progress' => 35,
'goal' => 500000.00,
'solution' => 'UpBrainsAI is developing cutting-edge AI solutions to help businesses streamline operations, improve decision-making, and create more personalized customer experiences. Our proprietary AI algorithms are designed to integrate seamlessly into existing business workflows, providing automation, predictive analytics, and real-time insights.',
'description' => 'UpBrainsAI offers advanced machine learning models and AI tools that enable businesses to unlock the full potential of their data. We focus on industries such as finance, healthcare, retail, and logistics, delivering AI-driven solutions that increase efficiency, reduce costs, and foster innovation.',
'start_date' => '2025-06-01',
'end_date' => '2026-06-01',
'competitive_landscape' => 'The AI market is rapidly growing, with competitors such as IBM Watson, Google AI, and Microsoft Azure leading the charge. However, UpBrainsAI differentiates itself by focusing on creating tailored solutions that are easy to implement, require less training data, and can be adapted to a wide variety of industries. Our solutions are built with user-friendliness and flexibility in mind, ensuring businesses can harness AI’s full potential without a steep learning curve.',
'team' => 'UpBrainsAI’s team is composed of experienced AI researchers, software engineers, and business strategists. Our leadership includes experts in machine learning, natural language processing, and data science, all of whom have worked in major tech companies and academic institutions. Together, we aim to bring AI to the forefront of business innovation.',
'campaign_type' => 'angel_investment',
'use_of_funds' => 'The funds will be used to accelerate product development, expand our AI research capabilities, build strategic partnerships with technology providers, and enhance our go-to-market efforts. A portion of the funding will also support hiring top-tier AI talent to drive continuous innovation and ensure the scalability of our solutions.'

        ];
        $campaignData[] =  [
            'title' => 'Cintap - Revolutionizing Business with Cloud-Based Solutions',
'user_id' => $campaigner->id,
'progress' => 45,
'goal' => 750000.00,
'solution' => 'Cintap is a comprehensive cloud software solution designed to simplify business management, improve collaboration, and enhance productivity. With our suite of tools, businesses can manage operations, track financials, handle HR tasks, and streamline communication in one seamless platform. Cintap’s intuitive interface and customizable features ensure businesses of all sizes can maximize efficiency and focus on growth.',
'description' => 'Cintap provides an all-in-one platform for businesses to manage their entire workflow. From project management and invoicing to employee scheduling and resource allocation, our cloud-based solution offers flexibility, scalability, and security. Cintap helps companies reduce operational costs, improve transparency, and enable remote work seamlessly with cloud capabilities.',
'start_date' => '2025-07-01',
'end_date' => '2026-07-01',
'competitive_landscape' => 'The market for cloud business software is highly competitive, with players like Salesforce, Microsoft Dynamics, and Zoho offering similar tools. However, Cintap distinguishes itself with its focus on usability, affordability, and industry-specific customization. Our solution is tailored to small and medium-sized businesses, providing a more cost-effective alternative to large-scale enterprise software.',
'team' => 'Cintap’s leadership team consists of seasoned professionals with backgrounds in cloud computing, business software development, and enterprise solutions. Our team includes cloud engineers, business analysts, and customer support specialists who are passionate about simplifying business processes and delivering exceptional customer service.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'The raised funds will be allocated to further development of the platform, including adding new features, expanding the product’s scalability, and improving integration with third-party services. A portion will also go towards marketing efforts to raise awareness and attract more users, as well as support customer success initiatives to ensure a smooth onboarding process for new clients.'

        ];
        $campaignData[] =  [
          'title' => 'Designer Blooms - Bringing Nature’s Beauty to Your Doorstep',
'user_id' => $campaigner->id,
'progress' => 60,
'goal' => 50000.00,
'solution' => 'Designer Blooms offers a premium flower delivery service that provides carefully curated, seasonal bouquets for every occasion. From weddings and corporate events to birthdays and anniversaries, we bring elegance and creativity to floral arrangements. Our mission is to deliver exceptional quality, unique designs, and an unforgettable experience that delights every customer.',
'description' => 'Designer Blooms specializes in luxury floral arrangements that go beyond traditional flower delivery. Each bouquet is thoughtfully designed by expert florists using only the freshest, most beautiful flowers sourced locally. Our service guarantees on-time delivery and customized options tailored to the customer’s preferences, making every occasion extra special with beautiful flowers that make a lasting impression.',
'start_date' => '2025-06-01',
'end_date' => '2026-06-01',
'competitive_landscape' => 'The floral delivery industry is competitive, with established players like 1-800-Flowers and FTD. However, Designer Blooms sets itself apart by focusing on high-end, custom arrangements, excellent customer service, and a strong commitment to sustainability. We use eco-friendly packaging and prioritize working with local flower farms to reduce our environmental impact.',
'team' => 'Our team is composed of passionate floral designers, logistics experts, and customer service professionals who share a commitment to delivering beauty and joy through flowers. Led by an experienced team of entrepreneurs, Designer Blooms aims to revolutionize the floral industry with exceptional customer experiences and sustainable practices.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'Funds raised will be used to expand our floral production facilities, invest in a user-friendly mobile app for easy ordering, and increase our marketing efforts to reach a broader audience. Additionally, a portion will go towards building a community-focused program that supports local flower farms and promotes sustainable flower-growing practices.'

        ];      

        $campaignData[] =  [
'title' => 'EZscope - Revolutionizing Remote Diagnostics with Cutting-Edge Technology',
'user_id' => $campaigner->id,
'progress' => 75,
'goal' => 150000.00,
'solution' => 'EZscope offers a portable, easy-to-use remote diagnostics tool designed to help healthcare providers and technicians perform on-site medical assessments. Through advanced imaging and wireless connectivity, EZscope allows real-time consultations with specialists anywhere, reducing the need for patients to travel and improving access to timely medical care, particularly in underserved areas.',
'description' => 'EZscope is a state-of-the-art portable diagnostic device that allows doctors and healthcare providers to conduct remote assessments using high-quality imaging and real-time video consultations. The device connects to a mobile app that lets medical professionals securely share patient data with specialists, ensuring quicker and more accurate diagnoses, no matter the location.',
'start_date' => '2025-07-01',
'end_date' => '2026-07-01',
'competitive_landscape' => 'While companies like TytoCare and MedWand offer similar remote healthcare solutions, EZscope stands out due to its compact design, superior imaging quality, and seamless integration with telehealth platforms. Our technology is optimized for a wide range of medical uses, from general diagnostics to specialized imaging, making it a versatile tool for clinics and mobile healthcare units.',
'team' => 'Our team consists of biomedical engineers, healthcare professionals, and tech experts passionate about improving healthcare accessibility. With decades of combined experience in both medical and technological fields, our team is dedicated to making healthcare more accessible and efficient for everyone, anywhere.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'Funds raised will be used to finalize product development, conduct field trials, enhance the mobile app’s features, and launch a marketing campaign aimed at healthcare providers. A portion of the funds will also go towards securing necessary certifications for medical devices to ensure compliance with regulatory standards.'

        ];
        $campaignData[] =  [
         'title' => 'Fivvy - Unlocking the Power of Data with Smart Collection Solutions',
'user_id' => $campaigner->id,
'progress' => 60,
'goal' => 200000.00,
'solution' => 'Fivvy is an innovative platform designed to simplify and automate data collection for businesses, researchers, and organizations. Our solution combines intuitive software with smart sensors and devices to collect real-time, actionable data from various environments. Whether it’s for market research, scientific studies, or operational analytics, Fivvy ensures that data is gathered efficiently and accurately, reducing human error and saving time.',
'description' => 'Fivvy provides a complete data collection system that empowers businesses and researchers to gather, analyze, and make data-driven decisions. Our platform integrates seamlessly with IoT sensors, mobile devices, and cloud technology, enabling users to monitor and track data points in real-time from any location. Our goal is to make data collection more accessible, accurate, and scalable across a wide range of industries.',
'start_date' => '2025-08-01',
'end_date' => '2026-08-01',
'competitive_landscape' => 'Fivvy competes with data collection giants like SurveyMonkey and Qualtrics, but our key differentiator lies in the integration of real-time sensor data and automation. Unlike traditional survey tools, Fivvy leverages smart technologies to gather data from a variety of sources, including environmental sensors, wearables, and connected devices, making it the go-to platform for industries that require continuous and dynamic data input.',
'team' => 'Our team is made up of engineers, data scientists, and business leaders who are committed to transforming how data is collected. With backgrounds in technology, AI, and business intelligence, our team is well-equipped to meet the diverse needs of our customers and help them unlock the potential of their data for smarter decision-making.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'Funds will be used to expand our platform’s capabilities by integrating additional sensor types, enhance our cloud infrastructure for better scalability, and support a global marketing campaign to introduce Fivvy to new industries. A portion will also be allocated for hiring additional engineers and expanding our customer support services.'

        ];
        $campaignData[] =  [
           'title' => 'InventorPrism | LenderPrism - Revolutionizing Capital Sourcing for Innovators and Lenders',
'user_id' => $campaigner->id,
'progress' => 45,
'goal' => 500000.00,
'solution' => 'InventorPrism and LenderPrism bring together innovators and lenders on a single platform, creating a seamless connection for capital sourcing and funding. InventorPrism offers a unique solution to entrepreneurs and inventors looking for funding, while LenderPrism provides a pool of trusted lenders who are eager to fund projects with high potential. Our solution simplifies the capital raising process by providing clear data analytics, risk assessments, and a transparent platform for both parties.',
'description' => 'InventorPrism and LenderPrism create an efficient and effective marketplace for sourcing capital. Inventors can submit their projects and innovations to be reviewed by qualified lenders, who can then make investments based on the project’s projected growth and return on investment. The platform provides detailed project information, including risk metrics, expected outcomes, and financial projections, to help lenders make informed decisions. This dual-purpose platform ensures that inventors get access to the funding they need, while lenders have greater transparency and control over their investments.',
'start_date' => '2025-06-01',
'end_date' => '2026-06-01',
'competitive_landscape' => 'We operate in a competitive landscape that includes crowdfunding platforms like Kickstarter and equity investment platforms like SeedInvest. However, InventorPrism and LenderPrism’s unique value proposition lies in the way we connect innovative entrepreneurs directly with professional lenders, providing detailed project assessments and risk analyses to support their decision-making. Our platform also helps avoid the uncertainty and unpredictability often associated with traditional financing methods by focusing on data-driven insights and transparency.',
'team' => 'Our team consists of seasoned professionals in the fields of finance, technology, and innovation. With experience in venture capital, angel investing, and startup acceleration, our team has the knowledge and expertise to evaluate and connect promising projects with the right investors. We are passionate about helping inventors bring their ideas to life while ensuring lenders have a clear understanding of the potential risks and rewards.',
'campaign_type' => 'angel_investment',
'use_of_funds' => 'Funds raised through this campaign will be used to expand the platform’s technology infrastructure, enhance its data analytics capabilities, and market the platform to both inventors and lenders. Additionally, we plan to hire key personnel in technology, risk management, and customer support to ensure the smooth running and scalability of the platform as it grows.'

        ];
        $campaignData[] =  [
          'title' => 'Luxury Vacation Club - Exclusive Travel Experiences for Elite Members',
'user_id' => $campaigner->id,
'progress' => 60,
'goal' => 1000000.00,
'solution' => 'Luxury Vacation Club offers exclusive vacation experiences to its members by partnering with five-star resorts and travel agencies. The platform provides a curated collection of luxury vacation packages, ranging from private island getaways to bespoke cultural tours. Members can book customized vacations that cater to their specific desires, all while enjoying exceptional service, personalized itineraries, and special perks like private chefs and concierge services.',
'description' => 'Luxury Vacation Club is for individuals who seek unparalleled luxury and privacy when it comes to travel. Our club offers members access to some of the world’s most exclusive resorts and vacation destinations. We specialize in providing all-inclusive packages that cater to every aspect of the vacation experience, from private tours to unique cultural experiences. Our goal is to make every vacation unforgettable, ensuring our members have an elite and seamless travel experience.',
'start_date' => '2025-07-01',
'end_date' => '2026-07-01',
'competitive_landscape' => 'The luxury vacation industry is highly competitive, with companies like Luxury Retreats and Villas of Distinction offering premium vacation rentals. However, Luxury Vacation Club differentiates itself by offering exclusive memberships that guarantee access to a curated selection of resorts and experiences. Unlike traditional booking platforms, our members receive personalized attention and access to travel experiences that are not available through other providers.',
'team' => 'Our team is composed of seasoned experts in the travel and hospitality industries, including travel designers, luxury concierges, and experts in high-end customer service. We work closely with our resort partners to curate the most luxurious and exclusive vacation experiences available. We are committed to providing our members with seamless and tailored experiences, supported by a professional and attentive team.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'Funds raised from this campaign will be used to expand our network of luxury partners, enhance the user experience on our platform, and invest in marketing to attract more members to the club. Additionally, we plan to develop a mobile app that allows members to access their vacation details and book trips directly from their smartphones, ensuring a smoother and more convenient experience.'

        ];
        $campaignData[] =  [
            'title' => 'Msolar - Revolutionizing Solar Energy for a Sustainable Future',
'user_id' => $campaigner->id,
'progress' => 40,
'goal' => 1500000.00,
'solution' => 'Msolar provides affordable and efficient solar energy solutions to residential and commercial clients. Our mission is to make solar energy accessible to everyone by offering high-performance, cost-effective solar panels, backed by a seamless installation process and reliable after-sales support. We aim to reduce the reliance on traditional energy sources while promoting sustainable energy practices.',
'description' => 'Msolar is committed to providing innovative solar energy solutions that make a positive impact on the environment and help reduce energy costs for our customers. Our solar systems are designed for maximum efficiency and durability, ensuring a long-lasting investment. We focus on providing clean, renewable energy to homeowners and businesses, making the transition to solar energy as easy and affordable as possible.',
'start_date' => '2025-08-01',
'end_date' => '2026-08-01',
'competitive_landscape' => 'The solar energy industry is growing rapidly with established players like SunPower and First Solar dominating the market. However, Msolar differentiates itself by providing customized solar solutions that cater specifically to the needs of small and medium-sized businesses and residential clients. Our pricing model is also more flexible, with options for financing and installation that make it easier for customers to adopt solar energy.',
'team' => 'The Msolar team consists of experienced engineers, solar energy specialists, and customer service professionals. Our team has years of experience in designing and installing solar systems, and we are passionate about making a meaningful difference in the transition to clean energy. We collaborate with trusted suppliers of high-quality solar equipment to ensure our customers receive the best possible products.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'Funds raised through this campaign will be used to scale our operations, develop new solar energy products, and expand our marketing efforts to raise awareness about the benefits of solar energy. We also plan to invest in training programs for our installation teams and customer service representatives to ensure we provide top-notch service to all our clients.'

        ];
        $campaignData[] =  [
           'title' => 'Neighbr - Building Sustainable Eco Villages for the Future',
'user_id' => $campaigner->id,
'progress' => 25,
'goal' => 1000000.00,
'solution' => 'Neighbr aims to build sustainable, eco-friendly villages that reduce environmental impact and foster a strong sense of community. These villages will be designed with renewable energy, green architecture, and sustainable farming practices at their core. Our goal is to create spaces where people can live in harmony with nature, while reducing their carbon footprint and promoting sustainable living for future generations.',
'description' => 'Neighbr is developing self-sustaining eco villages that promote a harmonious lifestyle by utilizing renewable energy sources, permaculture farming, and green building materials. Our villages will feature solar-powered homes, community gardens, organic farming, water conservation systems, and waste recycling to reduce the impact on the environment. The objective is to create a model for future cities that prioritize environmental health, economic stability, and social equity.',
'start_date' => '2025-06-01',
'end_date' => '2026-06-01',
'competitive_landscape' => 'The eco-village market has gained momentum with pioneers like Earthship Biotecture and EcoVillage Development. However, Neighbr differentiates itself by offering a more community-centric approach. Our villages will be designed with affordability in mind, ensuring that sustainable living is accessible to a broader population, not just affluent individuals. Additionally, Neighbr will integrate educational programs to teach sustainable living practices to residents and visitors.',
'team' => 'The Neighbr team includes urban planners, architects, sustainability experts, and community organizers. Our diverse team brings together years of experience in designing and building eco-friendly spaces. We are united by a shared passion for environmental sustainability and a desire to create a positive impact on the planet and its inhabitants.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'The funds raised will be used to acquire land, conduct environmental impact assessments, and begin the design and construction of the first eco village. We will also use the funds to launch educational initiatives that teach residents and the broader community about sustainable living, renewable energy systems, and eco-friendly construction techniques.'

        ];
        $campaignData[] =  [
           'title' => 'Pixel Games - Revolutionizing the Gaming World with AI-driven Experiences',
'user_id' => $campaigner->id,
'progress' => 30,
'goal' => 500000.00,
'solution' => 'Pixel Games is building the future of gaming by integrating artificial intelligence to create dynamic, ever-evolving game worlds. Our AI-powered games adapt to the player’s actions, offering unique, personalized experiences every time. Players will enjoy non-linear storylines, unpredictable gameplay, and ever-changing environments, ensuring that no two sessions are ever the same.',
'description' => 'Pixel Games is pushing the boundaries of interactive entertainment by developing AI-driven games that learn from players’ actions and evolve accordingly. The games will feature procedurally generated worlds, NPCs with advanced AI personalities, and environments that react to player behavior. Our goal is to create truly immersive experiences that go beyond static, pre-programmed content, giving players a new way to engage with their favorite games.',
'start_date' => '2025-09-01',
'end_date' => '2026-09-01',
'competitive_landscape' => 'The gaming industry is shifting towards AI-driven experiences, with companies like Ubisoft and EA making strides in this direction. However, Pixel Games stands out by offering a fully AI-driven game engine that can adapt in real-time to every player’s choices. Our approach is more advanced than current offerings, creating a truly dynamic gaming world that evolves organically.',
'team' => 'Our team is composed of talented developers, designers, and AI experts, each with a deep passion for both gaming and artificial intelligence. With years of experience in the gaming industry and cutting-edge AI research, the team is ready to take gaming to new heights. We are committed to building innovative, fun, and challenging gaming experiences.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'The funds will be used to further develop our AI game engine, build out our game prototypes, and hire additional developers and designers. Additionally, part of the funds will be allocated to marketing and building a community around our games to ensure a successful launch and future growth.'

        ];       $campaignData[] =  [
           'title' => 'Replastic - Revolutionizing Waste Management with Sustainable Plastic Solutions',
'user_id' => $campaigner->id,
'progress' => 45,
'goal' => 750000.00,
'solution' => 'Replastic is committed to reducing plastic waste by converting non-recyclable plastics into reusable raw materials. Our patented process enables the transformation of waste plastics into high-quality products for industries like construction, automotive, and consumer goods. By doing so, we aim to close the loop on plastic waste and create a circular economy for plastic products.',
'description' => 'Replastic is tackling one of the world’s most pressing environmental issues: plastic waste. Our solution uses cutting-edge technology to process waste plastics into valuable raw materials that can be reused in manufacturing. The goal is not only to reduce the environmental footprint of plastic waste but also to provide industries with a sustainable alternative to virgin plastic, reducing the need for petroleum-based products.',
'start_date' => '2025-06-01',
'end_date' => '2026-06-01',
'competitive_landscape' => 'While several companies are working on recycling plastics, Replastic stands out due to its unique ability to process non-recyclable plastics into high-quality, usable materials. Competitors focus mainly on recycling easily recyclable plastics, but our technology extends to a wider range of plastic waste, enabling us to reduce waste that other processes cannot address.',
'team' => 'Our team includes experts in chemical engineering, environmental science, and waste management. With years of experience in the recycling and sustainability sectors, we are well-equipped to scale our operations and create significant impact. Our team is passionate about making the world a cleaner, greener place by using innovative technologies to solve environmental challenges.',
'campaign_type' => 'angel_investment',
'use_of_funds' => 'The funds will be used to further develop our plastic processing technology, scale our production facilities, and hire additional team members to expand our research and development efforts. Additionally, part of the funds will be used to build partnerships with key industries, ensuring that our sustainable materials can be integrated into mainstream manufacturing.'

        ];       $campaignData[] =  [
        'title' => 'Rizz Wireless - Connecting the World with Affordable, Reliable Mobile Services',
'user_id' => $campaigner->id,
'progress' => 60,
'goal' => 500000.00,
'solution' => 'Rizz Wireless aims to revolutionize the mobile industry by offering affordable and reliable mobile services, focusing on providing high-quality connectivity to underserved regions. Our platform uses cutting-edge technology to provide fast, reliable mobile data, voice services, and customer care at competitive prices, ensuring that customers get the best value for their money.',
'description' => 'Rizz Wireless is addressing the need for affordable and dependable mobile services in a world where many people still lack reliable access to telecommunications. Our unique pricing models and innovative network technology allow us to deliver services at lower costs while maintaining high performance and coverage, especially in rural and underserved areas. We aim to expand access to affordable mobile services, bridging the digital divide.',
'start_date' => '2025-07-01',
'end_date' => '2026-07-01',
'competitive_landscape' => 'The mobile industry is highly competitive with large players such as Verizon, AT&T, and T-Mobile dominating the market. However, Rizz Wireless differentiates itself by focusing on affordability and expanding services into areas where the big carriers have limited coverage. Our competitive advantage lies in offering customers a low-cost alternative without compromising on service quality.',
'team' => 'The Rizz Wireless team consists of telecommunications experts, engineers, and business professionals with years of experience in the mobile industry. We have a strong leadership team with backgrounds in mobile network infrastructure, customer service, and business strategy. We are dedicated to providing exceptional customer support and innovative mobile solutions to meet the needs of underserved communities.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'Funds raised will be used to expand our mobile network infrastructure, develop new technology to enhance service delivery, and improve customer support systems. Additionally, part of the funds will be allocated to marketing and outreach efforts to increase brand awareness and reach a wider customer base in underserved regions. The goal is to provide affordable and reliable mobile services to millions more customers.'

        ];
        $campaignData[] =  [
           'title' => 'Sigma X - Revolutionizing Data Management for the Modern Enterprise',
'user_id' => $campaigner->id,
'progress' => 45,
'goal' => 750000.00,
'solution' => 'Sigma X offers cutting-edge data management solutions that streamline data collection, processing, and analysis for businesses of all sizes. By utilizing AI and machine learning algorithms, our platform enables organizations to make data-driven decisions faster and more efficiently. We focus on simplifying the data management process, allowing companies to focus on innovation while Sigma X handles the complexity of their data.',
'description' => 'Sigma X is a data management company designed to help businesses unlock the full potential of their data. By providing a robust, scalable, and secure platform, we help organizations store, process, and analyze large amounts of data efficiently. Our solution reduces manual efforts, minimizes errors, and improves decision-making, ultimately helping businesses optimize operations, increase profitability, and drive growth.',
'start_date' => '2025-08-01',
'end_date' => '2026-08-01',
'competitive_landscape' => 'The data management industry is highly competitive, with major players such as IBM, Oracle, and Microsoft offering enterprise-level solutions. However, Sigma X stands apart by offering a more user-friendly interface, greater flexibility in data integration, and a pricing model designed for businesses of all sizes. We also leverage the latest advancements in AI and machine learning to offer predictive analytics capabilities that set us apart from traditional data management platforms.',
'team' => 'Sigma X’s team consists of data scientists, software engineers, and business experts who are passionate about transforming the way companies manage and utilize their data. Our leadership team has experience from top companies in the tech and data analytics fields, and we are driven by a shared mission to help businesses maximize the value of their data assets.',
'campaign_type' => 'angel_investment',
'use_of_funds' => 'Funds raised will be used to further develop our data management platform, enhance AI-driven capabilities, and scale infrastructure to handle larger volumes of data. We will also invest in marketing and sales efforts to increase brand awareness and expand our customer base, targeting small to medium enterprises as well as larger corporations in need of scalable data management solutions.'

        ];
        $campaignData[] =  [
           'title' => 'Syntra Research - Innovating Music Production through Cutting-Edge Technology',
'user_id' => $campaigner->id,
'progress' => 32,
'goal' => 500000.00,
'solution' => 'Syntra Research is revolutionizing music production by integrating advanced technology and AI tools into the creative process. Our platform provides musicians, producers, and studios with innovative tools to streamline music composition, mixing, and mastering. Through the use of deep learning algorithms, we offer real-time suggestions for melody, harmony, and arrangement, significantly reducing the time spent on tedious tasks and allowing creators to focus more on their artistic vision.',
'description' => 'Syntra Research is a music production company focused on bringing the future of sound to artists. We offer a suite of AI-powered tools designed to simplify and enhance the music production process. From automated mastering to intelligent mixing recommendations, our platform empowers both novice and professional musicians to create high-quality music with ease. By using machine learning to understand music patterns, Syntra Research helps users explore new creative possibilities while maintaining artistic integrity.',
'start_date' => '2025-09-01',
'end_date' => '2026-09-01',
'competitive_landscape' => 'The music production technology space is rapidly growing, with established players like iZotope, Avid, and Ableton offering software solutions. However, Syntra Research stands out by offering a platform that is specifically designed to integrate AI technology with the artistic workflow. Our solution is user-friendly, affordable, and adaptable, targeting both indie musicians and professional studios. We believe that AI-powered music production is the next frontier, and we are poised to lead this transformation.',
'team' => 'Syntra Research’s team consists of AI experts, sound engineers, and experienced music producers. Our team combines deep knowledge in both technology and music, which allows us to create a platform that understands the needs of artists while leveraging cutting-edge technology. Our founders have experience in the music production and tech industries, having previously worked with top music labels and technology companies.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'The funds will be used to enhance our AI algorithms, expand our platform’s capabilities, and build a larger user community. We also plan to hire additional engineers to further improve the functionality and performance of our platform. Marketing efforts will focus on building partnerships with music schools, independent artists, and production houses to raise awareness and onboard early adopters.'

        ];
        $campaignData[] =  [
          'title' => 'TibaRay - Pioneering Cancer Treatment through Advanced Radiation Technology',
'user_id' => $campaigner->id,
'progress' => 50,
'goal' => 2000000.00,
'solution' => 'TibaRay aims to revolutionize cancer treatment with our innovative approach to radiation therapy. Our proprietary technology uses targeted radiation beams with high precision to destroy cancer cells while minimizing damage to surrounding healthy tissue. This approach improves treatment outcomes and reduces side effects, offering patients a more effective and less invasive alternative to traditional cancer treatments. Our solution focuses on using cutting-edge imaging and machine learning algorithms to provide real-time treatment guidance and adjust doses dynamically for optimal results.',
'description' => 'TibaRay is dedicated to transforming cancer treatment through advanced radiation technology. Our platform employs state-of-the-art technology to deliver focused radiation therapy with high accuracy, providing hope for patients battling cancer. Unlike traditional treatments, TibaRay’s technology ensures that the radiation is delivered with pinpoint precision, maximizing the effectiveness of the treatment while reducing the impact on surrounding healthy tissues. We are working to make cancer treatment more efficient, personalized, and accessible for everyone.',
'start_date' => '2025-06-01',
'end_date' => '2026-06-01',
'competitive_landscape' => 'The cancer radiation treatment industry is highly competitive, with key players such as Varian, Elekta, and Accuray leading the market. However, TibaRay’s innovative approach sets us apart by focusing on precision radiation targeting, personalized treatment planning, and real-time dose optimization. Our technology aims to improve patient outcomes while minimizing the risks associated with radiation therapy. As the demand for more effective and less invasive cancer treatments grows, TibaRay is well-positioned to become a leader in this space.',
'team' => 'TibaRay’s team consists of radiation oncologists, biomedical engineers, and data scientists who work together to create the most effective cancer treatment solutions. Our engineers and scientists collaborate closely with medical professionals to develop and refine our technology, ensuring it meets the highest standards of patient care. The team also includes professionals with experience in the healthcare industry, who bring invaluable insights into the practical applications of our technology in real-world clinical settings.',
'campaign_type' => 'angel_investment',
'use_of_funds' => 'The funds raised will be allocated towards advancing our clinical trials, securing necessary regulatory approvals, and scaling our technology for broader healthcare adoption. A portion will also be directed towards research and development to further enhance the efficacy of our radiation treatment systems. We will use the remaining funds for marketing, partnerships with hospitals and medical centers, and expanding our operations to reach more patients in need of cutting-edge cancer treatments.'

        ];
        $campaignData[] =  [
          'title' => 'UnknownCyber - Leading the Fight Against Cyber Threats',
'user_id' => $campaigner->id,
'progress' => 30,
'goal' => 1500000.00,
'solution' => 'UnknownCyber provides next-generation cyber threat detection solutions powered by machine learning and artificial intelligence. Our platform continuously analyzes network traffic, user behavior, and system vulnerabilities to detect anomalies that could indicate potential cyber threats. Unlike traditional methods, our solution adapts in real-time to evolving attack vectors and provides actionable insights to prevent security breaches before they occur. With automated alerts, risk assessments, and proactive mitigation strategies, businesses can stay ahead of cybercriminals and safeguard their assets effectively.',
'description' => 'UnknownCyber specializes in developing cutting-edge cyber threat detection software designed to protect businesses and individuals from the ever-growing risk of cyberattacks. As cyber threats continue to evolve, traditional security measures often fall short. Our platform utilizes advanced AI algorithms to identify and neutralize threats by recognizing patterns that indicate malicious activity. Whether it’s a ransomware attack, data breach, or phishing attempt, UnknownCyber provides comprehensive protection, ensuring your systems stay secure and your data remains safe.',
'start_date' => '2025-05-01',
'end_date' => '2026-05-01',
'competitive_landscape' => 'The cybersecurity industry is rapidly expanding, with key players such as CrowdStrike, Palo Alto Networks, and Darktrace dominating the market. However, UnknownCyber differentiates itself with its innovative use of machine learning to detect emerging threats and its proactive approach to security. While many cybersecurity firms focus on post-breach analysis, UnknownCyber takes a preventative stance, identifying potential threats before they can impact the business. With increasing global concern over cyber threats, our solutions are uniquely positioned to offer superior protection in an evolving threat landscape.',
'team' => 'The UnknownCyber team is composed of seasoned cybersecurity experts, data scientists, and engineers who specialize in AI-driven security solutions. Our team includes former cybersecurity professionals from leading firms, as well as innovators in the field of machine learning. Together, we are committed to delivering cutting-edge solutions that help organizations stay one step ahead of cybercriminals. Our team’s combined expertise ensures that we not only build advanced technology but also create real-world applications that can prevent the most sophisticated cyberattacks.',
'campaign_type' => 'angel_investment',
'use_of_funds' => 'The funds raised will be used to accelerate product development, enhance our machine learning algorithms, and expand our platform’s capabilities. Additionally, we will allocate resources towards expanding our team, marketing our platform to a wider audience, and securing strategic partnerships with large enterprises. The capital will also support ongoing research into emerging cyber threats, enabling us to stay ahead of potential new attack vectors and provide businesses with the most comprehensive threat detection solutions available.'

        ];
        $campaignData[] =  [
          'title' => 'Vega - Revolutionizing Space Exploration',
'user_id' => $campaigner->id,
'progress' => 45,
'goal' => 20000000.00,
'solution' => 'Vega is focused on making space exploration accessible and affordable for commercial, scientific, and governmental purposes. Our innovative technology involves developing reusable rocket systems that reduce the cost and environmental impact of launching payloads into space. By leveraging advancements in propulsion, materials science, and AI-based optimization, Vega aims to create a sustainable and cost-efficient path to space, enabling new opportunities in satellite deployment, scientific research, and even space tourism.',
'description' => 'Vega is a next-generation space technology company that is breaking barriers in the space industry. Our mission is to make space exploration not just a possibility but a reality for a broad range of industries. We are building reusable rockets capable of deploying satellites, cargo, and passengers to low Earth orbit (LEO) and beyond. With a focus on sustainability, efficiency, and cost reduction, Vega plans to revolutionize how space missions are conducted, opening the door for future innovations in space-based infrastructure, research, and even human settlement on other planets.',
'start_date' => '2025-06-01',
'end_date' => '2027-06-01',
'competitive_landscape' => 'The space industry is highly competitive, with major players such as SpaceX, Blue Origin, and Rocket Lab leading the way in satellite launches and space exploration. However, Vega sets itself apart with its approach to ultra-efficient reusability and lower launch costs. While competitors focus on large-scale operations, Vega aims to offer flexible and smaller-scale solutions for businesses, scientific institutions, and government agencies, ensuring that smaller payloads and experimental missions have affordable access to space. Vega also plans to build partnerships with both commercial companies and space agencies.',
'team' => 'The Vega team is made up of top-tier engineers, rocket scientists, and aerospace professionals from leading space companies and academic institutions. Our leadership team has decades of combined experience in aerospace engineering, satellite communications, and space mission design. Together, we bring a unique blend of expertise in engineering, project management, and business development to build a new era of space technology. Vega’s collaborative culture fosters innovation, allowing us to continuously push the boundaries of what’s possible in space exploration.',
'campaign_type' => 'angel_investment',
'use_of_funds' => 'The funds raised will be used for the continued development of our rocket technology, including further refining our propulsion systems, materials, and avionics. Additionally, we will expand our manufacturing capabilities to support increased production of rockets and satellite components. Marketing and strategic partnerships will also play a key role in our growth strategy, enabling us to bring our technology to market faster and build relationships with commercial and government customers. A portion of the funds will also be allocated to research and development for long-term projects such as human spaceflight and interplanetary missions.'

        ];
        $campaignData[] =  [
            'title' => 'Bakery Process Solutions - Transforming the Bakery Industry',
'user_id' => $campaigner->id,
'progress' => 30,
'goal' => 5000000.00,
'solution' => 'Bakery Process Solutions is revolutionizing the bakery industry with cutting-edge automation technology designed to streamline production processes. Our focus is on optimizing efficiency, consistency, and scalability through state-of-the-art machinery that integrates seamlessly into existing bakery operations. Our automated systems include dough mixers, ovens, and packaging solutions that work together to reduce waste, increase throughput, and maintain high-quality standards across every batch. By reducing labor costs and improving operational efficiency, we aim to help bakeries of all sizes scale their businesses sustainably and profitably.',
'description' => 'Bakery Process Solutions is dedicated to providing bakeries with the tools and technology to meet the growing demand for high-quality, affordable baked goods. Our company specializes in designing and manufacturing automated production systems tailored to the unique needs of the baking industry. Whether it’s a small family-owned bakery or a large commercial bakery, our solutions are built to improve productivity, reduce costs, and ensure consistent product quality. From dough preparation to packaging, we provide end-to-end automation that makes bakeries more efficient and competitive in a rapidly evolving market.',
'start_date' => '2025-04-15',
'end_date' => '2027-04-15',
'competitive_landscape' => 'The bakery equipment market is filled with traditional machinery manufacturers, but few companies specialize in full automation systems designed specifically for bakeries. Competitors such as Rheon, Schokinag, and AMF Bakery Systems have large-scale offerings but lack the tailored automation solutions that Bakery Process Solutions provides. Our niche is creating customizable, scalable systems that are easy to integrate into existing bakery lines, ensuring that smaller to mid-sized bakeries can also benefit from automation without the hefty price tag. With the bakery industry looking to modernize, there is a significant opportunity for growth in this sector.',
'team' => 'Our team consists of engineers, food scientists, and process automation experts who have worked in both the food manufacturing and robotics industries. The leadership team brings extensive experience in mechanical engineering, production management, and supply chain optimization. Together, we combine deep knowledge of bakery production processes with expertise in automation technology to create innovative solutions that drive business growth. Bakery Process Solutions is built on a foundation of collaboration and problem-solving, with every team member dedicated to delivering high-quality, cost-effective systems to our customers.',
'campaign_type' => 'crowdfunding',
'use_of_funds' => 'The funds raised will primarily be used to expand our research and development efforts, allowing us to enhance the capabilities of our bakery automation systems. We will also allocate funds to scaling our production capacity, ensuring we can meet increasing demand. Marketing and distribution strategies will be a significant focus, as we plan to grow our presence in international markets and establish strategic partnerships with large bakery chains. Additionally, a portion of the funds will be used for customer support and training programs to ensure that our clients can maximize the potential of our systems.'

        ];
        }
        

        Campaign::insert($campaignData);
    }
}
