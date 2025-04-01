@props([
    'risk_profile',
   'min_investment',
   'max_investment',
   'investment_prefrence',
   'investment_approach',
   'name'
])

<div class="card shadow-sm rounded-lg overflow-hidden">

    <div class="card-body">
    <h3 class="card-risk">{{ $name }}</h3>       
        <h3 class="card-risk">{{ $risk_profile }}</h3>
        <p class="card-min">{{ $min_investment }}</p>
        <p class="card-max">{{ $max_investment }}</p>
        <p class="card-pref">{{ $investment_prefrence }}</p>
        <p class="card-approach">{{ $investment_approach }}</p>
    </div>
</div>