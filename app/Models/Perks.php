<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perks extends Model
{
    protected $fillable = [
        'title',
        'description',
        'amount_required',
        'image',
        'campaign_id',
    ];



    public function campaign(){
        return $this->belongsTo(Campaigns::class);
    }





}
