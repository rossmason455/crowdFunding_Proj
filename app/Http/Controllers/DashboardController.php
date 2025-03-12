<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $campaigns = Campaign::where('user_id', auth()->id())->get();

        return view('dashboard', compact('campaigns'));
    }
}
