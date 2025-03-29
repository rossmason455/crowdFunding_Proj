@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h2 class="mb-0">Update Profile</h2>
                </div>
                <div class="card-body">
                    <h3 class="fw-semibold mb-3">Add new campaign</h3>
                    <x-investor-profile-form :action="route('home.updateInvestorProfile', $investorProfile->id)" :method="'PUT'" :campaign="$investorProfile" buttonText="Update Profile"/>
                </div>
            </div>
        </div>
    </div>

@endsection