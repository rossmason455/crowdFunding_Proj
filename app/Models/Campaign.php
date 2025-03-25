<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    // The Campaigns model represents the 'animals' table in the database and defines the fillable attributes for mass assignment.

    protected $fillable = [
        'title',
        'description',
        'progress',
        'goal',
        'solution',
        'start_date',
        'end_date',
        'competitive_landscape',
        'team',
        'use_of_funds',
        'campaign_type',
        'user_id',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function campaignImages(){
        return $this->hasMany(CampaignImage::class);
    }



    public function perks(){
        return $this->hasMany(Perk::class);
    }


    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

}

