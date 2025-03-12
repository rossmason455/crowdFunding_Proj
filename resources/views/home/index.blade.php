@extends('layouts.app')

<h3 class="font-weight-semibold h3 mb-4">List of Campaigns:</h3>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
    @foreach($campaigns as $campaign)
        <div class="col">
            <x-campaign-card :title="$campaign->title"
                             :description="$campaign->description"
                             :goal="$campaign->goal"
                             :campaign_type="$campaign->campaign_type"
                             :image="$campaign->campaignImages->first()->image ?? ''"/>
        </div>
    @endforeach
</div>

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
   