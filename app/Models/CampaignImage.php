<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignImage extends Model
{
    protected $fillable = [
        'image',
        'campaign_id',
    ];


    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }



}
