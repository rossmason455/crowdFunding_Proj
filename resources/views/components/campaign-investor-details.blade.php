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





<div class="campaign-details container mt-4 d-flex">

    <div class="">


    <div class="card shadow-lg mb-4">
        
    <div class="card-body">
    


    <img src="{{ asset($image1) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">

    <h1 class="card-title text-primary">{{ $title }}</h1>
          
        
          <h2 class="top-section-heading">Progress</h2>
          <div class="progress">
            





          <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"> {{ $progress }}%</div>
          </div>


          <div class="d-flex justify-content-between">
          <div class="d-flex"> <div class=" d-flex top-section"><h2 class="m-0 p-0 top-section-heading">Goal</h2>
          <p class="card-text ps-2"> ${{ $goal}}</p></div>
          </div>



           <div class="d-flex align-items-center">
           <div class=" d-flex top-section">
           <h2 class="m-0 p-0 top-section-heading">End Date</h2>
           <p class="card-text ps-2">{{ $end_date }}</p></div>    
           </div> 
          </div>
  

</div>

</div>
    
    <div class="card shadow-lg ">
        <!-- Image -->
       



      

  
        <div class="card-body">
    


           

           

            <div class="point-section">
            <h2 class="section-heading">Description</h2>
            <p class="card-text">{{ $description }}</p>
            </div>
           
            
            <div class="point-section">
            <h2 class="section-heading">Solution</h2>
            <p class="card-text">{{ $solution }}</p>
            </div>
            <img src="{{ asset($image2) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">
           
    
            
            
  
            
         
            <div class="point-section">
            <h2 class="section-heading">Competitive Landscape</h2>
            <p class="card-text">{{ $competitive_landscape }}</p>

            </div>
            <img src="{{ asset($image3) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">
            
            <div class="point-section">
             <h2 class="section-heading">Team</h2>
            <p class="card-text">{{ $team }}</p>
            </div>

            <img src="{{ asset($image4) }}" alt="{{ $title }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;">
            
            <div class="point-section">
             <h2 class="section-heading">Use of Funds</h2>
            <p class="card-text">{{ $use_of_funds }}</p>
            </div>
           
            <div class="point-section">
            <h2 class="section-heading">Campaign Type</h2>
            <p class="card-text">{{ $campaign_type }}</p>
            </div>

           

          


       
        </div>
    </div>


    </div>
   






</div>

