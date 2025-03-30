@props([
    'title',
    'description',
    'image',
    'goal',
    'campaign_type'
])

<div class="card shadow-sm rounded-lg overflow-hidden">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="card-img-top">
    <div class="card-body">
        <h3 class="card-title text-decoration-none">{{ $title }}</h3>
        <p class="card-desc">{{ $description }}</p>
        <p class="card-goal">{{ $goal }}</p>
        <p class="card-campaign_type">{{ $campaign_type }}</p>
    </div>
</div>