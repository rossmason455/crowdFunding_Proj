<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    // The Campaigns model represents the 'animals' table in the database and defines the fillable attributes for mass assignment.

    protected $fillable = [
        'title',
        'description',
        'progress',
        'solution',
        'start_date',
        'end_date',
        'competitive_landscape',
        'team',
        'use_of_funds',
        'user_id',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function campaignImages(){
        return $this->hasMany(CampaignImages::class);
    }



    public function perks(){
        return $this->hasMany(Perks::class);
    }


    public function transactions(){
        return $this->hasMany(Transactions::class);
    }

}

