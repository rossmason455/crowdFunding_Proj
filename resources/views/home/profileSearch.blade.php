@extends('layouts.app')

@section('content')

<h3 class="font-weight-semibold h3 mb-4">List of Campaigns:</h3>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
    @foreach($profiles as $profile)
        <div class="col">

        <a href="{{ route('home.show', $profile) }}">
            <x-investor-profile-card 
             :image="$profile->user->first()->image ?? ''"
            :risk_profile="$profile->risk_profile"
                             :min_investment="$profile->min_investment"
                             :max_investment="$profile->goal"
                             :investment_prefrence="$profile->campaign_type"
                             :investment_approach="$profile->investment_approach"/>
                             </a>
        </div>
    @endforeach
</div>
@endsection