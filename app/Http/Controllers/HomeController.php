<?php

namespace App\Http\Controllers;
use App\Models\InvestorProfile;
use App\Models\Campaign;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
  
        $campaigns = Campaign::with('campaignImages')->get();

       
        return view('home.index', compact('campaigns'));
    }



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


       
        return view('home.profileFilter', compact('profiles'));
    }



    public function show(Campaign $campaign)
    {
        $campaign = Campaign::with('perks')->findOrFail($campaign->id);

        return view('home.show', compact('campaign'));
    }

    
    
 public function create()
 {
    return view('create');
 }





    public function edit(Campaign $campaign)
    {
        
        
        return view('home.edit', compact('campaign'));
    }


    public function storeCampaign(Request $request)
    {
        //ensures the request has the required fields
        $request->validate([
             
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'progress' => 'nullable|integer|min:0',
            'solution' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'competitive_landscape' => 'nullable|string',
            'team' => 'nullable|string',
            'use_of_funds' => 'nullable|string',
            'campaign_type' => 'required|in:Crowdfunding,Angel Investment',
        ]);
        
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/banner'), $imageName);
        }
      
       $campaign = Campaign::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'progress' => $request->progress,
            'solution' => $request->solution,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'competitive_landscape' => $request->competitive_landscape,
            'team' => $request->team,
            'use_of_funds' => $request->use_of_funds,
            'campaign_type' => $request->campaign_type,
            'image' => $imageName 
        ]);

        if ($imageName) {
            $campaign->campaignImages()->create([
                'image' => 'images/banner/' . $imageName, 
            ]);
        }

        
        return redirect()->route('home.index')->with('success', 'Campaign created successfully!');
    }


    public function updateCampaign(Request $request, Campaign $campaign)
    {
        //ensures the request has the required fields
        $request->validate([
             
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'progress' => 'nullable|integer|min:0',
            'solution' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'competitive_landscape' => 'nullable|string',
            'team' => 'nullable|string',
            'use_of_funds' => 'nullable|string',
            'campaign_type' => 'required|in:Crowdfunding,Angel Investment',
        ]);
        
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/banner'), $imageName);
        }
      
        $campaign->update([
            'user_id' => $campaign->user_id ?: auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'progress' => $request->progress,
            'solution' => $request->solution,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'competitive_landscape' => $request->competitive_landscape,
            'team' => $request->team,
            'use_of_funds' => $request->use_of_funds,
            'campaign_type' => $request->campaign_type,
            'image' => $imageName 
        ]);

        if ($imageName) {
            $campaign->campaignImages()->create([
                'image' => 'images/banner/' . $imageName, 
            ]);
        }
        
        return redirect()->route('home.index')->with('success', 'Campaign created successfully!');
    }


    public function destroyCampaign(Campaign $campaign)
    {
        $campaign->delete(); 

        return redirect()->route('home.index')->with('success', 'Campaign deleted successfully!');
    }


    public function storeInvestorProfile(Request $request)
    {
        //ensures the request has the required fields
        $request->validate([
             
        'risk_profile' => 'required|in:low,moderate,high', 
        'min_investment' => 'required|numeric|min:0', 
        'max_investment' => 'required|numeric|min:0|gt:min_investment', 
        'investment_preference' => 'nullable|string|max:255', 
        'investment_approach' => 'nullable|string|max:255', 
        'preferred_investment_stage' => 'required|in:early_stage,growth_stage,late_stage', 
        'investment_interest' => 'nullable|string|max:255', 
        ]);
        
      
        InvestorProfile::create([
            'user_id' => auth()->id(),
            'min_investment' => $request->min_investment,
            'max_investment' => $request->max_investment,
            'investment_preference' => $request->investment_preference,
            'investment_approach' => $request->investment_approach,
            'preferred_investment_stage' => $request->preferred_investment_stage,
            'investment_interest' => $request->investment_interest,
           
        ]);
        
        return redirect()->route('home.index')->with('success', 'Investor Profile created successfully!');
    }


    public function updateInvestorProfile(Request $request, InvestorProfile $investorProfile)
    {
        //ensures the request has the required fields
        $request->validate([
             
            'risk_profile' => 'required|in:low,moderate,high', 
            'min_investment' => 'required|numeric|min:0', 
            'max_investment' => 'required|numeric|min:0|gt:min_investment', 
            'investment_preference' => 'nullable|string|max:255', 
            'investment_approach' => 'nullable|string|max:255', 
            'preferred_investment_stage' => 'required|in:early_stage,growth_stage,late_stage', 
            'investment_interest' => 'nullable|string|max:255', 
        ]);
        
    
      
        $investorProfile->update([
            'user_id' => auth()->id(),
            'min_investment' => $request->min_investment,
            'max_investment' => $request->max_investment,
            'investment_preference' => $request->investment_preference,
            'investment_approach' => $request->investment_approach,
            'preferred_investment_stage' => $request->preferred_investment_stage,
            'investment_interest' => $request->investment_interest,
        ]);
        
        return redirect()->route('home.index')->with('success', 'Campaign created successfully!');
    }












//
    //public function show(Campaign $campiagn)
    //{
//
//
    //    return view('campaigns.show')->with('campaign', $campiagn);
    //}
//
//



}
