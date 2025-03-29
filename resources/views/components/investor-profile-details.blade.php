@props([
   'risk_profile',
   'min_investment',
   'max_investment',
   'investment_preference',
   'investment_approach',
   'preferred_investment_stage',
   'investment_interest',
   'investor_profile'
])

<div class="container mt-4">
    <div class="card shadow-lg">
   

        <div class="card-body">
    
        
            <h1 class="card-title text-primary">Investor Profile</h1>
          
            <h2 class="h5 mt-3">Risk Profile</h2>
            <p class="card-text">{{ $risk_profile }}</p>

       
            
            <h2 class="h5 mt-3">Minimum Investment</h2>
            <p class="card-text">$ {{ $min_investment }}</p>


            
            <h2 class="h5 mt-3">Maximum Investment</h2>
            <p class="card-text">$ {{ $max_investment }}</p>

            
            <h2 class="h5 mt-3">Investment Preference</h2>
            <p class="card-text">{{ $investment_preference }}</p>

            
            <h2 class="h5 mt-3">Investment Approach</h2>
            <p class="card-text">{{ $investment_approach }}</p>

    
            
            <h2 class="h5 mt-3">Preferred Investment Stage</h2>
            <p class="card-text">{{ $preferred_investment_stage}}</p>

  
            
            <h2 class="h5 mt-3">Investment Interest</h2>
            <p class="card-text">{{ $investment_interest }}</p>

         
        </div>
    </div>
</div>
