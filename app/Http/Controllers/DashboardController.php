<?php

namespace App\Http\Controllers;
use App\Models\InvestorProfile;
use App\Models\Perk;
use App\Models\Campaign;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $user = auth()->user();

        $campaign = null;
    $investorProfile = null;

    if ($user->role === 'campaigner') {
        $campaign = Campaign::where('user_id', $user->id)->first();  
    }

    if ($user->role === 'investor') {
        $investorProfile = InvestorProfile::where('user_id', $user->id)->first();
    }

    return view('/userDashboard/dashboard', compact('user', 'campaign', 'investorProfile'));

        //$campaign = Campaign::where('user_id', auth()->id())->first();
//
        //
//
        //return view('userDashboard.dashboard', compact('campaign'));
    }//




    public function create()
    {
       return view('create');
    }
   
   
   
   
   
       public function editCampaign(Campaign $campaign)
       {
           
           
           return view('userDashboard.editCampaign', compact('campaign'));
       }
   
   
       /////////////////////////////////////////////////////////
       ////////////// CRUD CAMPAIGN
       ////////////////////////////////////////////////////////
   
   
   
   
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
               'goal' => 'nullable|numeric|min:0',
               'competitive_landscape' => 'nullable|string',
               'team' => 'nullable|string',
               'use_of_funds' => 'nullable|string',
               'campaign_type' => 'required|in:Crowdfunding,Angel Investment',
               'category' => 'required|in:Funding,Marketing,Research,Development,Education,Technology,Healthcare,Non-profit,Art & Culture,Environment,
               Social Impact,Innovation,Startups,Sports,Fashion,Food & Beverage,Travel,Entertainment,Real Estate,Financial Services',
           ]);
           
           $folders = [
               'image1' => 'images/banner',
               'image2' => 'images/competitive_landscape',
               'image3' => 'images/solution',
               'image4' => 'images/team'
           ];
   
           $imagePaths = [];
           foreach ($folders as $key => $folder) {
               if ($request->hasFile($key)) {
                   $imageName = time() . '_' . $key . '.' . $request->$key->extension();
                   $request->$key->move(public_path($folder), $imageName);
                   $imagePaths[$key] = "$folder/$imageName";
               } else {
                   $imagePaths[$key] = null;
               }
           }
          
         
          $campaign = Campaign::create([
               'user_id' => auth()->id(),
               'title' => $request->title,
               'description' => $request->description,
               'progress' => $request->progress,
               'solution' => $request->solution,
               'start_date' => $request->start_date,
               'end_date' => $request->end_date,
               'goal' => $request->goal,
               'competitive_landscape' => $request->competitive_landscape,
               'team' => $request->team,
               'use_of_funds' => $request->use_of_funds,
               'campaign_type' => $request->campaign_type,
               'category' => $request->category,
               'image1' => $imagePaths['image1'],
               'image2' => $imagePaths['image2'],
               'image3' => $imagePaths['image3'],
               'image4' => $imagePaths['image4'],
           ]);
   
           foreach ($imagePaths as $path) {
               if ($path) {
                   $campaign->campaignImages()->create(['image' => $path]);
               }
           }
   
   
   
   
           return redirect()->route('dashboard')->with('success', 'Campaign created successfully!');
       }
   
   
       public function updateCampaign(Request $request, Campaign $campaign)
       {
   
       
        
   
    $request->validate([
      
     'title' => 'required|string|max:255',
     'description' => 'nullable|string',
     'progress' => 'nullable|integer|min:0',
     'solution' => 'nullable|string',
     'start_date' => 'nullable|date',
     'end_date' => 'nullable|date|after_or_equal:start_date',
     'goal' => 'nullable|numeric|min:0',
     'competitive_landscape' => 'nullable|string',
     'team' => 'nullable|string',
     'use_of_funds' => 'nullable|string',
     'campaign_type' => 'required|in:Crowdfunding,Angel Investment',
     'category' => 'required|in:Funding,Marketing,Research, Development, Education,Technology, Healthcare, Non-profit, Art & Culture, Environment,
         Social Impact, Innovation, Startups, Sports, Fashion,
         Food & Beverage, Travel, Entertainment, Real Estate, Financial Services',
     ]);
     
     $folders = [
         'image1' => 'images/banner',
         'image2' => 'images/competitive_landscape',
         'image3' => 'images/solution',
         'image4' => 'images/team'
     ];
   
     $imagePaths = [];
     foreach ($folders as $key => $folder) {
         if ($request->hasFile($key)) {
             $imageName = time() . '_' . $key . '.' . $request->$key->extension();
             $request->$key->move(public_path($folder), $imageName);
             $imagePaths[$key] = "$folder/$imageName";
         } else {
             $imagePaths[$key] = null;
         }
     }
    
   
     $campaign->update([
         'user_id' => $campaign->user_id ?: auth()->id(),
         'title' => $request->title,
         'description' => $request->description,
         'progress' => $request->progress,
         'solution' => $request->solution,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date,
         'goal' => $request->goal,
         'competitive_landscape' => $request->competitive_landscape,
         'team' => $request->team,
         'use_of_funds' => $request->use_of_funds,
         'campaign_type' => $request->campaign_type,
         'category' => $request->category,
         'image1' => $imagePaths['image1'],
         'image2' => $imagePaths['image2'],
               'image3' => $imagePaths['image3'],
               'image4' => $imagePaths['image4'],
           ]);
   
           foreach ($imagePaths as $path) {
               if ($path) {
                   $campaign->campaignImages()->create(['image' => $path]);
               }
           }
   
         
   
           return redirect()->route('dashboard')->with('success', 'Campaign created successfully!');
       }
   
   
       public function destroyCampaign(Campaign $campaign)
       {
          
           $campaign->perks()->delete();
           $campaign->delete(); 
   
           return redirect()->route('dashboard')->with('success', 'Campaign deleted successfully!');
       }
   

       public function editInvestorProfile( InvestorProfile $investorProfile)
       {
           
           
           return view('userDashboard.editProfile', compact('investorProfile'));
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
           'preferred_investment_stage' => 'required|in:Early Stage,Growth Stage,Late Stage', 
           'investment_interest' => 'nullable|string|max:255', 
           ]);
           
         
           InvestorProfile::create([
               'user_id' => auth()->id(),
               'risk_profile' => $request->risk_profile,
               'min_investment' => $request->min_investment,
               'max_investment' => $request->max_investment,
               'investment_preference' => $request->investment_preference,
               'investment_approach' => $request->investment_approach,
               'preferred_investment_stage' => $request->preferred_investment_stage,
               'investment_interest' => $request->investment_interest,
              
           ]);
           
           return redirect()->route('dashboard')->with('success', 'Investor Profile created successfully!');
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
               'preferred_investment_stage' => 'required|in:Early Stage,Growth Stage,Late Stage', 
               'investment_interest' => 'nullable|string|max:255', 
           ]);
           
       
         
           $investorProfile->update([
               'user_id' => auth()->id(),
               'risk_profile' => $request->risk_profile,
               'min_investment' => $request->min_investment,
               'max_investment' => $request->max_investment,
               'investment_preference' => $request->investment_preference,
               'investment_approach' => $request->investment_approach,
               'preferred_investment_stage' => $request->preferred_investment_stage,
               'investment_interest' => $request->investment_interest,
           ]);
           
           return redirect()->route('dashboard')->with('success', 'Profile created successfully!');
       }
   
   
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       /////////////////////////////////////////////////////////
       ////////////// CRUD PERK
       ////////////////////////////////////////////////////////
   
       public function createPerk(Campaign $campaign)
       {
          
          
          
          
           return view('createPerk', compact('campaign'));
       }
      
   
   
       public function editPerk(Perk $perk)
       {
           
           
           return view('userDashboard.editPerk', compact('perk'));
       }
   
   
   
       public function storePerk(Request $request, Campaign $campaign)
       {
         
           
           
   
           $request->validate([
                
               'title' => 'required|string|max:255',
               'description' => 'nullable|string',
               'amount_required' => 'nullable|numeric|min:0',
          
       
           ]);
   
           $campaign = Campaign::where('user_id', auth()->id())->first();
           
           $imageName = null;
           if ($request->hasFile('image')) {
               $imageName = time() . '.' . $request->image->extension();
               $request->image->move(public_path('images/perks'), $imageName);
           }
         
          $perk = Perk::create([
               'campaign_id' => $campaign->id,
               'title' => $request->title,
               'description' => $request->description,
               'amount_required' => $request->amount_required,
               'image' => '/images/perks/' . $imageName
           ]);
   
        
           
           return redirect()->route('dashboard', $campaign->id)->with('success', 'Perk created successfully!');
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
               'image' => '/images/perks/' . $imageName 
           ]);
   
         
           
           return redirect()->route('dashboard', $perk->id)->with('success', 'Perk created successfully!');
       }
   
   
       public function destroyPerk(Campaign $campaign)
       {
           $campaign->delete(); 
   
           return redirect()->route('dashboard')->with('success', 'Campaign deleted successfully!');
       }
   
















}
