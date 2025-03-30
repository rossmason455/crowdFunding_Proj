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
    'image1',
    'image2',
    'image3',
    'image4',
    'campaign',
    'perks'
])

<div class="container mt-4">
    <div class="card shadow-lg">
        <!-- Image -->
        <img src="{{ asset($image1) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">

        <div class="card-body">
    
        
            <h1 class="card-title text-primary">{{ $title }}</h1>
          

       
            
            <h2 class="h5 mt-3">Description</h2>
            <p class="card-text">{{ $description }}</p>

           

            
            <h2 class="h5 mt-3">Solution</h2>
            <p class="card-text">{{ $solution }}</p>

            <img src="{{ asset($image2) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">
            <h2 class="h5 mt-3">Start Date</h2>
            <p class="card-text">{{ $start_date }}</p>

            
            <h2 class="h5 mt-3">End Date</h2>
            <p class="card-text">{{ $end_date }}</p>

    
            
            <h2 class="h5 mt-3">Goal</h2>
            <p class="card-text">$ {{ $goal}}</p>

  
            
         
          
            <h2 class="h5 mt-3">Competitive Landscape</h2>
            <p class="card-text">{{ $competitive_landscape }}</p>

            <img src="{{ asset($image3) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">
            
           
             <h2 class="h5 mt-3">Team</h2>
            <p class="card-text">{{ $team }}</p>

            <img src="{{ asset($image4) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">
            
             <h2 class="h5 mt-3">Use of Funds</h2>
            <p class="card-text">{{ $use_of_funds }}</p>

            <h2 class="h5 mt-3">Campaign Type</h2>
            <p class="card-text">{{ $campaign_type }}</p>


            <h2 class="h5 mt-3">Progress</h2>
            <div class="progress">
              



  <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"> {{ $progress }}%</div>
</div>


            <h2 class="h5 mt-3">Perks</h2>
@foreach($perks as $perk)
    <div class="perk">
    <img src="{{ asset($perk->image) }}" alt="{{ $perk->title }}" class="img-fluid" style="height: 150px">
        <h3>{{ $perk->title }}</h3>
        <p>{{ $perk->description }}</p>
       
    </div>
@endforeach
       
        </div>
    </div>
</div>
