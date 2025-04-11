<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userDashboard/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::get('home', [HomeController::class, 'index'])->name('home.index'); 

    
    Route::get('filter/profileFilter', [FilterController::class, 'profileFilter'])->name('filter.profileFilter'); 

    Route::get('filter/campaignFilter', [FilterController::class, 'campaignFilter'])->name('filter.campaignFilter'); 







Route::get('createPerk', [DashboardController::class, 'createPerk'])->name('createPerk');



Route::get('contribute/{campaign}', [HomeController::class, 'contribute'])->name('contribute');



Route::post('/userDashboard/storePerk', [DashboardController::class, 'storePerk'])->name('userDashboard.storePerk');

Route::get('/userDashboard/{perk}/editPerk', [DashboardController::class, 'editPerk'])->name('userDashboard.editPerk'); 

Route::put('/userDashboard/{perk}', [DashboardController::class, 'updatePerk'])->name('userDashboard.updatePerk');



Route::get('/filter/showProfile/{investorProfile}', [FilterController::class, 'showProfile'])->name('filter.showProfile');

Route::post('/userDashboard/storeInvestorProfile', [DashboardController::class, 'storeInvestorProfile'])->name('userDashboard.storeInvestorProfile'); 

Route::put('/userDashboard/{investorProfile}', [DashboardController::class, 'updateInvestorProfile'])->name('userDashboard.updateInvestorProfile');

Route::get('/userDashboard/{investorProfile}/editProfile', [DashboardController::class, 'editInvestorProfile'])->name('userDashboard.editProfile');







Route::post('/home/storeContribution', [HomeController::class, 'storeContribution'])->name('home.storeContribution'); 

Route::get('/home/{campaign}', [HomeController::class, 'showCampaign'])->name('home.showCampaign');

Route::get('create', [DashboardController::class, 'create'])->name('create');

Route::post('/userDashboard/storeCampaign', [DashboardController::class, 'storeCampaign'])->name('userDashboard.storeCampaign'); 

Route::get('/userDashboard/{campaign}/edit', [DashboardController::class, 'editCampaign'])->name('userDashboard.editCampaign');

Route::put('/userDashboard/{campaign}', [DashboardController::class, 'updateCampaign'])->name('userDashboard.updateCampaign');
                                                                

Route::delete('/userDashboard/{campaign}', [DashboardController::class, 'destroyCampaign'])->name('userDashboard.destroyCampaign');






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
