<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntprofileController;
use App\Http\Controllers\EntreprenuerprofileController;
use App\Http\Controllers\ProjectinfoController;
use App\Http\Controllers\ProjectsettingsController;
use App\Http\Controllers\IdeatypeController;
use  App\Http\Controllers\ProjectdetailsController;
use  App\Http\Controllers\backendController;
use  App\Http\Controllers\aboutController;
use  App\Http\Controllers\planController;
use  App\Http\Controllers\dashbController;
use  App\Http\Controllers\contactController;
use  App\Http\Controllers\termsandcondController;
use  App\Http\Controllers\privacyController;
use  App\Http\Controllers\investorprofileController;
use  App\Http\Controllers\entreportfolioController;
use  App\Http\Controllers\entrehomeController;
use  App\Http\Controllers\dashboController;
use  App\Http\Controllers\startupsController;



















Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout' , [backendController::class , 'logout'])->name('logout');
Route::get('/about' , [aboutController::class , 'index'])->name('about');
Route::get('/plan' , [planController::class , 'index'])->name('plan');
Route::get('/dashb' , [dashbController::class , 'index'])->name('dashb');
Route::get('/contact' , [contactController::class , 'index'])->name('contact');
Route::get('/termsandcondition' , [termsandcondController::class , 'index'])->name('termsandcondition');
Route::get('/privacy' , [privacyController::class , 'index'])->name('privacy');







Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();

        if ($user->user_type === 'entrepreneur') {
            return redirect()->route('entrepreneur.dashboard');
        } elseif ($user->user_type === 'investor') {
            return redirect()->route('investor.dashboard');
        } elseif ($user->user_type === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Default fallback, adjust as needed
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('entrepreneur')->group(function () {
        Route::get('/entrepreneur', function () {
            return view('entrepreneur.dashboard');
        })->name('entrepreneur.dashboard');
    });

    Route::middleware('investor')->group(function () {
        Route::get('/investor', function () {
            return view('investor.dashboard');
        })->name('investor.dashboard');
    });

    Route::middleware('admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });


    // after login routes

Route::get('/entprofile', [EntprofileController::class, 'index'])->name('entprofile');
Route::get('/entreprofile', [EntreprenuerprofileController::class, 'index'])->name('entreprofile');
Route::get('/projectinfo', [ProjectinfoController::class, 'index'])->name('projectinfo');
Route::get('/projectsettings', [ProjectsettingsController::class, 'index'])->name('projectsettings');
Route::get('/portfolio', [investorprofileController::class, 'index'])->name('portfolio');
Route::get('/entreportfolio', [entreportfolioController::class, 'index'])->name('entreportfolio');
Route::get('/entrehome', [entrehomeController::class, 'index'])->name('entrehome');
Route::get('/dashbo', [dashboController::class, 'index'])->name('dashbo');
Route::get('/startups', [startupsController::class, 'index'])->name('startups');






Route::middleware(['auth'])->group(function () {
    Route::resource('Ideatype', IdeatypeController::class);

    Route::resource('Projectdetails', ProjectdetailsController::class);
});


// Route::post('/projectdetails', [ProjectdetailsController::class, 'store'])->name('projectdetails.store');
// Route::get('/projectdetails/{id}', [ProjectdetailsController::class, 'show'])->name('projectdetails.show');




Route::get('projectsettings', [ProjectdetailsController::class, 'create'])->name('projectsettings');
// In your routes file (web.php)
Route::get('/investor', [IdeatypeController::class, 'index'])->name('investor.dashboard');








});