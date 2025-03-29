@extends('layouts.app')

@section('content')
<div>

  

        <div class="py-5"
            style="background-image: url('{{ asset('images/animal-background.jpg') }}'); background-size: cover; height: 60vh;">
            <div class="container">
                <div class="card shadow-lg">
                    <div class="card-body">
                  
                        


                       
                        <x-investor-profile-details
                         
                        
                            :risk_profile="$investorProfile->risk_profile" 
                            :min_investment="$investorProfile->min_investment"
                            :max_investment="$investorProfile->max_investment" 
                            :investment_prefrence="$investorProfile->investment_prefrence"
                            :investment_approach="$investorProfile->investment_approach" 
                            :preferred_investment_stage="$investorProfile->preferred_investment_stage" 
                            :investment_interest="$investorProfile->investment_interest"
                            :competitive_landscape="$investorProfile->competitive_landscape" 
                            />


                    </div>
                </div>
            </div>
        </div>
       
</div>
@endsection