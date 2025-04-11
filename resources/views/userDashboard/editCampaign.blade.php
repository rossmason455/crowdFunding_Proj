@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
              
                </div>
                <div class="card-body">
                    <h3 class="fw-semibold mb-3 form-heading">Add new campaign

                    </h3>
                    <x-campaign-form :action="route('userDashboard.updateCampaign', $campaign->id)" :method="'PUT'" :campaign="$campaign" buttonText="Update Campaign"/>
                </div>
            </div>
        </div>
    </div>

@endsection