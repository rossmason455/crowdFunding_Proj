<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/mainPanel', [DashboardController::class, 'mainPanel'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard/mainPanel');

    Route::get('home', [HomeController::class, 'index'])->name('home.index'); 

    Route::get('home/profileFilter', [HomeController::class, 'profileFilter'])->name('home.profileFilter'); 

    Route::get('home/campaignFilter', [HomeController::class, 'campaignFilter'])->name('home.campaignFilter'); 


Route::get('/home/{campaign}', [HomeController::class, 'show'])->name('home.show');


Route::get('create', [DashboardController::class, 'create'])->name('create');


Route::get('createPerk', [HomeController::class, 'createPerk'])->name('createPerk');





Route::post('/dashboard/storePerk', [DashboardController::class, 'storePerk'])->name('dashboard.storePerk'); 



Route::post('/dashboard', [DashboardController::class, 'storeCampaign'])->name('dashboard.storeCampaign'); 

Route::get('/dashboard/{campaign}/edit', [DashboardController::class, 'editCampaign'])->name('dashboard.editCampaign');

Route::put('/dashboard/{campaign}', [DashboardController::class, 'update'])->name('dashboard.updateCampaign');
                                                                                    

Route::delete('/dashboard/{campaign}', [DashboardController::class, 'destroy'])->name('dashboard.destroyCampaign');


Route::post('/dashboard', [DashboardController::class, 'storeInvestorProfile'])->name('dashboard.storeInvestorProfile'); 

Route::get('/dashboard/{investorProfile}/edit', [DashboardController::class, 'editInvestorProfile'])->name('dashboard.editInvestorProfile');

Route::put('/dashboard/{investorProfile}', [DashboardController::class, 'updateInvestorProfile'])->name('dashboard.updateInvestorProfile');


//Route::post('/home', [HomeController::class, 'store'])->name('home.store'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
