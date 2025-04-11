@extends('layouts.app')

@section('content')


<section class="landing-section relative text-white" style="background-image: url(images/banner/rizz.jpg); height: 1000px; background-position: center center; background-repeat: no-repeat; width: 100%; background-size: cover; display: flex; flex-direction: column; justify-content: flex-end; padding: 2rem;">

  <!-- Dark overlay -->
  <div class= "dark-overlay"></div>

  <!-- Content above overlay -->
  <div style="display: flex; justify-content: space-between; align-items: flex-end; width: 100%; position: relative; z-index: 2;">
    
    <!-- Bottom-left text -->
    <div class="landing-section-text max-w-xl">
      <h1 class="text-5xl font-bold">Empower Your Ideas with VentureNest</h1>
      <p class="text-lg mt-2">Join thousands of entrepreneurs and investors making ideas a reality.</p>
    </div>

    <!-- Bottom-right button -->
    <div class="landing-section-button">
      <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
    </div>

  </div>

</section>


<section class="campaign-section">
<div class="container">
<h3 class="main-section-heading font-weight-semibold text-center">Featured Campaigns on VentureNest</h3>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
    @foreach($campaigns as $campaign)
        <div class="col">

        <a class="text-decoration-none" href="{{ route('home.showCampaign', $campaign) }}">
            <x-campaign-card :title="$campaign->title"
                             :description="$campaign->description"
                             :goal="$campaign->goal"
                             :category="$campaign->category"
                             :image="$campaign->campaignImages->first()->image ?? ''"/>
                             </a>
        </div>
    @endforeach
</div>
</div>
@endsection
</section>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
   