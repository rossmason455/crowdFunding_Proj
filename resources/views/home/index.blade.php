@extends('layouts.app')

@section('content')


 
<section class="landing-section" style="background-image: url(images/banner/rizz.jpg); height: 1000px;  background-position: center center; background-repeat: no-repeat; width: 100%; background-size: cover;">

  <div class="landing-section-text justify-content-end text-center z-10 text-white">
    <h1 class="text-5xl font-bold">Empower Your Ideas with VentureNest</h1>
    <p class="text-lg">Join thousands of entrepreneurs and investors making ideas a reality.</p>
   
    </div>

    <div class="landing-section-button"> <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a></div>
 
</section>


<section class="campaign-section">
<div class="container">
<h3 class="main-section-heading font-weight-semibold text-center">Featured Campaigns on VentureNest</h3>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
    @foreach($campaigns as $campaign)
        <div class="col">

        <a class="text-decoration-none" href="{{ route('home.show', $campaign) }}">
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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
   