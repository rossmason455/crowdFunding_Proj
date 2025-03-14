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
        ;
        
        return view('home.edit', compact('campaign'));
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
