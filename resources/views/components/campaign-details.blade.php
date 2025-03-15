@props([
    'title',
    'description',
    'solution',
    'start_date',
    'end_date',
    'goal',
    'progress',
    'competitive_landscape',
    'team',
    'use_of_funds',
    'campaign_type',
    'image',
    'campaign'
])

<div class="container mt-4">
    <div class="card shadow-lg">
        <!-- Image -->
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">

        <div class="card-body">
    
        
            <h1 class="card-title text-primary">{{ $title }}</h1>
          

       
            
            <h2 class="h5 mt-3">Description</h2>
            <p class="card-text">{{ $description }}</p>


            
            <h2 class="h5 mt-3">Solution</h2>
            <p class="card-text">{{ $solution }}</p>

            
            <h2 class="h5 mt-3">Start Date</h2>
            <p class="card-text">{{ $start_date }}</p>

            
            <h2 class="h5 mt-3">End Date</h2>
            <p class="card-text">{{ $end_date }}</p>

    
            
            <h2 class="h5 mt-3">Goal</h2>
            <p class="card-text">{{ $goal}}</p>

  
            
            <h2 class="h5 mt-3">Progress</h2>
            <p class="card-text">{{ $progress }}</p>

         
            
            <h2 class="h5 mt-3">Competitive Landscape</h2>
            <p class="card-text">{{ $competitive_landscape }}</p>

         
            
             <h2 class="h5 mt-3">Team</h2>
            <p class="card-text">{{ $team }}</p>

            
            
             <h2 class="h5 mt-3">Use of Funds</h2>
            <p class="card-text">{{ $use_of_funds }}</p>

            <h2 class="h5 mt-3">Campaign Type</h2>
            <p class="card-text">{{ $campaign_type }}</p>
        </div>
    </div>
</div>
