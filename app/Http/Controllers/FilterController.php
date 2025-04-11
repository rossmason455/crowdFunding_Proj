<?php

namespace App\Http\Controllers;
use App\Models\InvestorProfile;
use App\Models\Perk;
use App\Models\Campaign;
use App\Models\Transaction;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function profileFilter(Request $request)
    {

        $query = InvestorProfile::with('user');

        if ($request->filled('risk_profile')) {
            $query->where('risk_profile', $request->risk_profile);
        }

        if ($request->filled('min_investment')) {
            $query->where('min_investment', '>=', $request->min_investment);
        }

        if ($request->filled('max_investment')) {
            $query->where('max_investment', '<=', $request->max_investment);
        }

        if ($request->filled('investment_preference')) {
            $query->where('investment_preference', 'like', '%' . $request->investment_preference . '%');
        }




        $profiles = $query->paginate(10);



        return view('filter.profileFilter', compact('profiles'));
    }


    public function campaignFilter(Request $request)
    {

        $query = Campaign::with('campaignImages');

        if ($request->filled('campaign_type')) {
            $query->where('campaign_type', $request->campaign_type);
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }





        $campaigns = $query->paginate(10);



        return view('filter.campaignFilter', compact('campaigns'));
    }


    public function showProfile(InvestorProfile $investorProfile)
    {


        return view('filter.showProfile')->with('investorProfile', $investorProfile);
    }



}
