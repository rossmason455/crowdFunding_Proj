<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use App\Models\InvestorProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $user = auth()->user();

        $campaign = null;
    $riskProfile = null;

    if ($user->role === 'campaigner') {
        $campaign = Campaign::where('user_id', $user->id)->first();  
    }

    if ($user->role === 'investor') {
        $riskProfile = InvestorProfile::where('user_id', $user->id)->first();
    }

    return view('/home/dashboard', compact('user', 'campaign', 'riskProfile'));

        //$campaign = Campaign::where('user_id', auth()->id())->first();
//
        //
//
        //return view('home.dashboard', compact('campaign'));
    }//
}
