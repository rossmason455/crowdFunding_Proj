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
                        <x-campaign-details :image="$campaign->campaignImages->first()->image ?? ''"
                            :title="$campaign->title" :description="$campaign->description"
                            :solution="$campaign->solution" :start_date="$campaign->start_date"
                            :end_date="$campaign->end_date" :goal="$campaign->goal" :progress="$campaign->progress"
                            :competitive_landscape="$campaign->competitive_landscape" :team="$campaign->team"
                            :use_of_funds="$campaign->use_of_funds" :campaign_type="$campaign->campaign_type"
                           
                            :perks="$campaign->perks" />

                            <a href="{{ route('home.edit', $campaign->id) }}" class="btn btn-primary">
                            Edit campaign
                            </a>



                            <form action="{{ route('home.destroyCampaign', $campaign->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this campaign?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete Campaign</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
       
</div>
@endsection