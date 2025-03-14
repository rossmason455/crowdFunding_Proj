@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h2 class="mb-0">Update Campaign</h2>
                </div>
                <div class="card-body">
                    <h3 class="fw-semibold mb-3">Add new campaign</h3>
                    <x-campaign-form :action="route('home.update', $campaign->id)" :method="'PUT'" :campaign="$campaign" />
                </div>
            </div>
        </div>
    </div>

@endsection