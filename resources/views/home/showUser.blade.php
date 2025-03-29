@extends('layouts.app')

@section('content')
<div>

  

        <div class="py-5"
            style="background-image: url('{{ asset('images/animal-background.jpg') }}'); background-size: cover; height: 60vh;">
            <div class="container">
                <div class="card shadow-lg">
                    <div class="card-body">
                  
                        


                       
                        <x-user-details
                         
                            
                            :name="$user->name" 
                            :email="$user->email"
                            :role="$user->role" 
                   
                            />


                    </div>
                </div>
            </div>
        </div>
       
</div>
@endsection