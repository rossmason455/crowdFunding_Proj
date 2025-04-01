@extends('layouts.app')

@section('content')


<div class="container">


<h3 class="font-weight-semibold h3 mb-4 text-center">Browse Investors on VentureNest</h3>
<form method="GET" action="{{ route('home.profileFilter') }}" class="mb-4">
    <div class="row">

    

        <div class="col-md-3">
            <label for="risk_profile" class="form-label">Risk Profile</label>
            <select name="risk_profile" id="risk_profile" class="form-control">
                <option value="">-- Select Risk Level --</option>
                <option value="low" {{ request('risk_profile') == 'low' ? 'selected' : '' }}>Low</option>
                <option value="moderate" {{ request('risk_profile') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                <option value="high" {{ request('risk_profile') == 'high' ? 'selected' : '' }}>High</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="min_investment" class="form-label">Minimum Investment</label>
            <input type="number" name="min_investment" id="min_investment" class="form-control" 
                value="{{ request('min_investment') }}">
        </div>

   
        <div class="col-md-3">
            <label for="max_investment" class="form-label">Maximum Investment</label>
            <input type="number" name="max_investment" id="max_investment" class="form-control" 
                value="{{ request('max_investment') }}">
        </div>

        <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="{{ route('home.profileFilter') }}" class="btn btn-secondary ms-2">Reset</a>
        </div>
 
    
    
    </div>
</form>


<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
    @forelse($profiles as $profile)
        <div class="col ">
            <a class="text-decoration-none" href="{{ route('home.showProfile', $profile) }} ">
                <x-investor-profile-card 
                    :name="$profile->user->name"
                    :image="$profile->user->image"
                    :risk_profile="$profile->risk_profile"
                    :min_investment="$profile->min_investment"
                    :max_investment="$profile->max_investment"
                    :investment_preference="$profile->investment_preference"
                    :investment_approach="$profile->investment_approach"/>
            </a>
        </div>
    @empty
        <p>No investor profiles match your criteria.</p>
    @endforelse
</div>
@endsection
</div>