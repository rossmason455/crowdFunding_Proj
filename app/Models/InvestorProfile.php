<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorProfile extends Model
{
    protected $fillable = [
        'risk_profile',
        'min_investment',
        'max_investment',
        'investment_preference',
        'investment_approach',
        'preferred_investment_stage',
        'investment_interest',
        'user_id',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }





}
