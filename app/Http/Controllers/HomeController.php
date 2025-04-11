<?php

namespace App\Http\Controllers;
use App\Models\InvestorProfile;
use App\Models\Perk;
use App\Models\Campaign;
use App\Models\Transaction;
use App\Models\User;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Exception\ApiErrorException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
  
        $campaigns = Campaign::with('campaignImages')->get();

       
        return view('home.index', compact('campaigns'));
    }



   


    public function showCampaign(Campaign $campaign)
    {
        $campaign = Campaign::with('perks')->findOrFail($campaign->id);
        
       


        return view('home.showCampaign', compact('campaign'));
    }

    
    


    /////////////////////////////////////////////////////////
    ////////////// CRUD PROFLIE
    ////////////////////////////////////////////////////////

   

   

   




  

    public function contribute(Campaign $campaign){

           


        return view('contribute', compact('campaign'));
    }




    public function showUser()
    {
       
       
        return view('home.showUser',['user' => auth()->user()]);

   
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
