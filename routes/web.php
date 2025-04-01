<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::get('home', [HomeController::class, 'index'])->name('home.index'); 

    
    Route::get('home/profileFilter', [HomeController::class, 'profileFilter'])->name('home.profileFilter'); 

    Route::get('home/campaignFilter', [HomeController::class, 'campaignFilter'])->name('home.campaignFilter'); 

Route::get('/home/{campaign}', [HomeController::class, 'show'])->name('home.show');


Route::get('create', [HomeController::class, 'create'])->name('create');


Route::get('createPerk', [HomeController::class, 'createPerk'])->name('createPerk');



Route::get('contribute/{campaign}', [HomeController::class, 'contribute'])->name('contribute');


Route::post('/home/storeCampaign', [HomeController::class, 'storeCampaign'])->name('home.storeCampaign'); 

Route::post('/home/storePerk', [HomeController::class, 'storePerk'])->name('home.storePerk'); 




Route::get('/home/{perk}/editPerk', [HomeController::class, 'editPerk'])->name('home.editPerk'); 

Route::post('/home/storeInvestorProfile', [HomeController::class, 'storeInvestorProfile'])->name('home.storeInvestorProfile'); 

Route::put('/home/{investorProfile}', [HomeController::class, 'updateInvestorProfile'])->name('home.updateInvestorProfile');

Route::get('/home/{investorProfile}/editProfile', [HomeController::class, 'editProfile'])->name('home.editProfile');

Route::get('/home/showProfile/{investorProfile}', [HomeController::class, 'showProfile'])->name('home.showProfile');

Route::get('/home/{campaign}/edit', [HomeController::class, 'edit'])->name('home.edit');

Route::put('/home/{perk}', [HomeController::class, 'updatePerk'])->name('home.updatePerk');

Route::post('/home/storeContribution', [HomeController::class, 'storeContribution'])->name('home.storeContribution'); 

Route::put('/home/{campaign}', [HomeController::class, 'updateCampaign'])->name('home.updateCampaign');
                                                                


Route::delete('/home/{campaign}', [HomeController::class, 'destroyCampaign'])->name('home.destroyCampaign');


Route::get('/home/showUser', [HomeController::class, 'showUser'])->name('home.showUser');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
