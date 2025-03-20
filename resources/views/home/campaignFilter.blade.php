@extends('layouts.app')

@section('content')

<h3 class="font-weight-semibold h3 mb-4">List of Campaigns:</h3>
<form method="GET" action="{{ route('home.campaignFilter') }}" class="mb-4">
    <div class="row">

        <div class="col-md-2">
            <label for="campaign_type" class="form-label">Campaign Type</label>
            <select name="campaign_type" id="campaign_type" class="form-control">
                <option value="">-- Select Risk Level --</option>
                <option value="Crowdfunding" {{ request('campaign_type') == 'Crowdfunding' ? 'selected' : '' }}>Crowdfunding</option>
                <option value="Angel Investment" {{ request('campaign_type') == 'Angel Investment' ? 'selected' : '' }}>Angel Investment</option>
            </select>
        </div>

        <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="{{ route('home.campaignFilter') }}" class="btn btn-secondary ms-2">Reset</a>
        </div>
 
    
    
    </div>
</form>


<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
    @forelse($campaigns as $campaign)
        <div class="col">
            < href="{{ route('home.show', $campaign) }}">
            <x-campaign-card :title="$campaign->title"
                             :description="$campaign->description"
                             :goal="$campaign->goal"
                             :campaign_type="$campaign->campaign_type"
                             :image="$campaign->campaignImages->first()->image ?? ''"/>
                             
            </a>
        </div>
    @empty
        <p>No investor profiles match your criteria.</p>
    @endforelse
</div>
@endsection