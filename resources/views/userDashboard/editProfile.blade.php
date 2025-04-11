@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
              
                <div class="card-body">
                    <h3 class="fw-semibold mb-3 form-heading">Update Profile</h3>
                    <x-investor-profile-form :action="route('userDashboard.updateInvestorProfile', $investorProfile->id)" :method="'PUT'" :campaign="$investorProfile" buttonText="Update Profile"/>
                </div>
            </div>
        </div>
    </div>

@endsection