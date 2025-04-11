

@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
               
                <div class="card-body">
                    @if (auth()->user()->role === 'campaigner')
                    <h3 class="fw-semibold mb-3 form-heading">Add new campaign</h3>
                    <x-campaign-form :action="route('userDashboard.storeCampaign')" :method="'POST'" />

                    @else
                    <h3 class="fw-semibold mb-3">Enter Investor Profile details</h3>
                    <x-investor-profile-form :action="route('userDashboard.storeInvestorProfile')" :method="'POST'" />
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection




