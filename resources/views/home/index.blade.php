@extends('layouts.app')

@section('content')


 
<section class="relative flex items-center justify-center" style="background-image: url(images/banner/rizz.jpg); height: 1000px;  background-position: center center; background-repeat: no-repeat; width: 100%; background-size: cover;">
  <div class="absolute inset-0 bg-black"></div>
  <div class="text-center z-10 text-white">
    <h1 class="text-5xl font-bold mb-4">Empower Your Ideas with VentureNest</h1>
    <p class="text-lg mb-12">Join thousands of entrepreneurs and investors making ideas a reality.</p>
    </div>

    <div> <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a></div>
</section>


<section>
<div class="container">
<h3 class="font-weight-semibold h3 mb-4 text-center">Featured Campaigns on VentureNest</h3>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
    @foreach($campaigns as $campaign)
        <div class="col">

        <a class="text-decoration-none" href="{{ route('home.show', $campaign) }}">
            <x-campaign-card :title="$campaign->title"
                             :description="$campaign->description"
                             :goal="$campaign->goal"
                             :campaign_type="$campaign->campaign_type"
                             :image="$campaign->campaignImages->first()->image ?? ''"/>
                             </a>
        </div>
    @endforeach
</div>
</div>
@endsection
</section>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
   