@props([
    'risk_profile',
   'min_investment',
   'max_investment',
   'investment_preference',
   'investment_approach',
   'name'
])

<div class="card profile-card shadow-sm rounded-lg overflow-hidden">

    <div class="card-body">
    <h3 class="card-name">{{ $name }}</h3>       
        <h3 class="card-risk">Risk Profile: {{ $risk_profile }}</h3>
        <p class="card-min">Min Investment: {{ $min_investment }}</p>
        <p class="card-max">Max Investment: {{ $max_investment }}</p>
        <p class="card-pref">Investment Preference: {{ $investment_preference }}</p>
        <p class="card-approach">Investment Approach: {{ $investment_approach }}</p>
    </div>
</div>