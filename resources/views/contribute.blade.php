@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h2 class="mb-0">Contribution</h2>
                </div>
                <div class="card-body">
                 
                    <h3 class="fw-semibold mb-3">Contribute</h3>
                    <x-contribute-form :action="route('home.storeContribution')" :method="'POST'" />

                   
                  
                </div>
            </div>
        </div>
    </div>
@endsection