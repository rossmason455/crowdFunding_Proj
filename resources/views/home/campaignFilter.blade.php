@extends('layouts.app')

@section('content')




<div class="container">




<h3 class="font-weight-semibold h3 mb-4 text-center">Browse Campaigns on VentureNest</h3>


<form method="GET" action="{{ route('home.campaignFilter') }}" class="mb-4">






    <div class="row">
    
<div class="col-md-3">
    </div>
        <div class="col-md-3">
            <label for="campaign_type" class="form-label">Campaign Type</label>
            <select name="campaign_type" id="campaign_type" class="form-control">
                <option value="">-- Select Campaign Type --</option>
                <option value="Crowdfunding" {{ request('campaign_type') == 'Crowdfunding' ? 'selected' : '' }}>Crowdfunding</option>
                <option value="Angel Investment" {{ request('campaign_type') == 'Angel Investment' ? 'selected' : '' }}>Angel Investment</option>
            </select>
        </div>



        <div class="col-md-3">
    <label for="category" class="form-label">Category</label>
    <select name="category" id="category" class="form-control">
        <option value="">-- Select Category --</option>
        @foreach(['Funding', 'Marketing', 'Research', 'Development', 'Education', 
                 'Technology', 'Healthcare', 'Non-profit', 'Art & Culture', 'Environment', 
                 'Social Impact', 'Innovation', 'Startups', 'Sports', 'Fashion', 
                 'Food & Beverage', 'Travel', 'Entertainment', 'Real Estate', 'Financial Services'] as $category)
            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                {{ $category }}
            </option>
        @endforeach
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
            <a href="{{ route('home.show', $campaign) }}">
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
</div>