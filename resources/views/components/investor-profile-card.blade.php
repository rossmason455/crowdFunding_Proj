@props([
    'risk_profile',
   'min_investment',
   'max_investment',
   'investment_prefrence',
   'investment_approach',
   'image'
])

<div class="card shadow-sm rounded-lg overflow-hidden">

    <div class="card-body">
    <img src="{{ asset($image) }}" alt="{{ $risk_profile }}" class="card-img-top">
        <h3 class="card-risk">{{ $risk_profile }}</h3>
        <p class="card-min">{{ $min_investment }}</p>
        <p class="card-max">{{ $max_investment }}</p>
        <p class="card-pref">{{ $investment_prefrence }}</p>
        <p class="card-approach">{{ $investment_approach }}</p>
    </div>
</div>