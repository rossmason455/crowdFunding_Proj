@extends('layouts.app')

@section('content')
<div>

        <x-slot name="header">
            <h2 class="fw-semibold fs-4 text-dark">
                {{ $campaign->title }} Details
            </h2>
        </x-slot>

        <div class="py-5"
            style="background-image: url('{{ asset('images/animal-background.jpg') }}'); background-size: cover; height: 60vh;">
            <div class="container">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <x-campaign-details :image1="$campaign->campaignImages->first()->image ?? ''"
                           
                    
                            :title="$campaign->title" :description="$campaign->description"
                            :solution="$campaign->solution"   
                            :image2="$campaign->campaignImages->skip(2)->first()->image ?? ''" :start_date="$campaign->start_date"
                            :end_date="$campaign->end_date" :goal="$campaign->goal" :progress="$campaign->progress"
                          
                            :competitive_landscape="$campaign->competitive_landscape"   :image3="$campaign->campaignImages->skip(1)->first()->image ?? ''"  :team="$campaign->team" :image4="$campaign->campaignImages->skip(3)->first()->image ?? ''"
                            :use_of_funds="$campaign->use_of_funds" :campaign_type="$campaign->campaign_type"
                           
                            :perks="$campaign->perks" />

                            @if ($campaign->campaign_type === 'Crowdfunding')
                            <a href="{{ route('contribute', $campaign->id) }}" class="btn btn-primary">
                            Contribute
                            @else
                            <a href="{{ route('contribute', $campaign->id) }}" class="btn btn-primary">
                            Request Contact Details

                            @endif
                            </a>


                    </div>
                </div>
            </div>
        </div>
       
</div>
@endsection