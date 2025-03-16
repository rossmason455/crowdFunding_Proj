@extends('layouts.app')

@section('content')
<div>

  

        <div class="py-5"
            style="background-image: url('{{ asset('images/animal-background.jpg') }}'); background-size: cover; height: 60vh;">
            <div class="container">
                <div class="card shadow-lg">
                    <div class="card-body">
                    @if (auth()->user()->role === 'campaigner' && $campaign)
                        <x-campaign-details 
                            :image="$campaign->campaignImages->first()->image ?? ''"
                            :title="$campaign->title" 
                            :description="$campaign->description"
                            :solution="$campaign->solution" 
                            :start_date="$campaign->start_date"
                            :end_date="$campaign->end_date" 
                            :goal="$campaign->goal" 
                            :progress="$campaign->progress"
                            :competitive_landscape="$campaign->competitive_landscape" 
                            :team="$campaign->team"
                            :use_of_funds="$campaign->use_of_funds" 
                            :campaign_type="$campaign->campaign_type" />
                        
                        <a href="{{ route('home.edit', $campaign->id) }}" class="btn btn-primary">Edit campaign</a>

                        <form action="{{ route('home.destroy', $campaign->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this campaign?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete Campaign</button>
                        </form>

                        @elseif (auth()->user()->role === 'investor' && $investorProfile)
                        <!-- Display Investor Profile for Investors -->
                        <h3>Investor Profile</h3>
                        <p><strong>Risk Profile:</strong> {{ $investorProfile->risk_profile }}</p>
                        <p><strong>Minimum Investment:</strong> ${{ $investorProfile->min_investment }}</p>
                        <p><strong>Maximum Investment:</strong> ${{ $investorProfile->max_investment }}</p>
                        <p><strong>Investment Preference:</strong> {{ $investorProfile->investment_preference }}</p>
                        <p><strong>Investment Approach:</strong> {{ $investorProfile->investment_approach }}</p>
                        <p><strong>Preferred Investment Stage:</strong> {{ $investorProfile->preferred_investment_stage }}</p>
                        <p><strong>Investment Interest:</strong> {{ $investorProfile->investment_interest }}</p>

                    @else
                        <p>You don't have an active campaign please create one </p>
                        <a href="{{ route('create') }}" class="btn btn-primary">Create Campaign</a>
                    @endif

                    </div>
                </div>
            </div>
        </div>
       
</div>
@endsection

