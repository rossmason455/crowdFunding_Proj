<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use App\Models\InvestorProfile;
use App\Models\Perk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function mainPanel(){

        $user = auth()->user();

        $campaign = null;
    $riskProfile = null;

    if ($user->role === 'campaigner') {
        $campaign = Campaign::where('user_id', $user->id)->first();  
    }

    if ($user->role === 'investor') {
        $riskProfile = InvestorProfile::where('user_id', $user->id)->first();
    }

    return view('/dashboard/mainPanel', compact('user', 'campaign', 'riskProfile'));

    
    }




    /////////////////////////////////////////////////////////
    ////////////// CRUD CAMPAIGN
    ////////////////////////////////////////////////////////

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



          /////////////////////////////////////////////////////////
    ////////////// CRUD CAMPAIGN
    ////////////////////////////////////////////////////////



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


    /////////////////////////////////////////////////////////
    ////////////// CRUD PROFLIE
    ////////////////////////////////////////////////////////




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






     /////////////////////////////////////////////////////////
    ////////////// CRUD PERK
    ////////////////////////////////////////////////////////


    public function storePerk(Request $request, Campaign $campaign)
    {
        //ensures the request has the required fields
        $request->validate([
             
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'amount_required' => 'nullable|decimal|min:0',
    
        ]);
        
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/perks'), $imageName);
        }
      
       $perk = Perk::create([
            'title' => $request->title,
            'description' => $request->description,
            'amount_required' => $request->amount_required,
            'image' => $imageName 
        ]);

     

        
        return redirect()->route('dashboard.mainPanel', $campaign->id)->with('success', 'Perk created successfully!');
    }


    public function updatePerk(Request $request, Perk $perk)
    {
        //ensures the request has the required fields
        $request->validate([
             
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'amount_required' => 'nullable|decimal|min:0',
        ]);
        
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/banner'), $imageName);
        }
      
        $perk->update([
            'title' => $request->title,
            'description' => $request->description,
            'amount_required' => $request->amount_required,
            'image' => $imageName 
        ]);

      
        
        return redirect()->route('dashboard.mainPanel', $perk->campaign_id)->with('success', 'Perk updated successfully!');
    }


    public function destroyPerk(Campaign $campaign)
    {
        $campaign->delete(); 

        return redirect()->route('home.index')->with('success', 'Campaign deleted successfully!');
    }













}
