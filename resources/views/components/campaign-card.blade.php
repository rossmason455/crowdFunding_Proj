@props([
    'title',
    'description',
    'image',
    'goal',
    'campaign_type',    
    'category'
])

<div class="card campaign-card shadow-sm rounded-lg overflow-hidden h-100 d-flex flex-column">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="card-img-top">
    <div class="card-body">
        <h3 class="card-title ">{{ $title }}</h3>
    
        <p class="card-desc">{{ $description }}</p>
        <p class="card-goal">Goal: ${{ $goal }}</p>
        <p class="card-category">{{ $category}}</p>
    </div>
</div>