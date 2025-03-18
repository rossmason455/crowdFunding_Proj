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


Route::get('/test-view', function () {
    return view('home.test');
});




Route::get('/home/test', [HomeController::class, 'test'])->name('home.test');

Route::post('/home', [HomeController::class, 'storeCampaign'])->name('home.storeCampaign'); 

Route::post('/home', [HomeController::class, 'storeInvestorProfile'])->name('home.storeInvestorProfile'); 

Route::get('/home/{campaign}/edit', [HomeController::class, 'edit'])->name('home.edit');

Route::put('/home/{campaign}', [HomeController::class, 'updateCampaign'])->name('home.updateCampaign');
                                                                


Route::delete('/home/{campaign}', [HomeController::class, 'destroyCampaign'])->name('home.destroyCampaign');

//Route::post('/home', [HomeController::class, 'store'])->name('home.store'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
