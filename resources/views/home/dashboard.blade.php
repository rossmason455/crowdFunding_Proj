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
                             :image="$campaign->campaignImages[0]->image ?? ''"
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
                            :campaign_type="$campaign->campaign_type" 
                            :perks="$campaign->perks"/>
                        
                        <a href="{{ route('home.edit', $campaign->id) }}" class="btn btn-primary">Edit campaign</a>

                     



                        <a href="{{ route('createPerk', $campaign->id) }}" class="btn btn-primary">Add Perk</a>





                        <form action="{{ route('home.destroyCampaign', $campaign->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this campaign?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete Campaign</button>
                        </form>

                        


                        @elseif (auth()->user()->role === 'investor' && $investorProfile)
                        <x-investor-profile-details
                         
                        
                            :risk_profile="$investorProfile->risk_profile" 
                            :min_investment="$investorProfile->min_investment"
                            :max_investment="$investorProfile->max_investment" 
                            :investment_preference="$investorProfile->investment_preference"
                            :investment_approach="$investorProfile->investment_approach" 
                            :preferred_investment_stage="$investorProfile->preferred_investment_stage" 
                            :investment_interest="$investorProfile->investment_interest"
                            :competitive_landscape="$investorProfile->competitive_landscape" 
                            />

                            <a href="{{ route('home.editProfile', $investorProfile->id) }}" class="btn btn-primary">Edit Profile</a>

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

