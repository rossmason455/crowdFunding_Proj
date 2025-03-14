<?php

namespace App\Http\Controllers;
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



    public function show(Campaign $campaign)
    {


      return view('home.show')->with('campaign', $campaign);
    }

    
    
    public function create()
    {

        
       


        return view('home.create');



    }


    public function edit(Campaign $campaign)
    {
        
        
        return view('home.edit', compact('campaign'));
    }


    public function store(Request $request)
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
      
        Campaign::create([
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
            'image' => $imageName ? 'images/banner/' . $imageName : null, 
        ]);
        
        return redirect()->route('home.index')->with('success', 'Campaign created successfully!');
    }


    public function update(Request $request, Campaign $campaign)
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
            'image' => $imageName ? 'images/banner/' . $imageName : null, 
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
