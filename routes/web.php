<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\AdminController;

// Public routes
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Voter Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Authentication
Route::get('/admin/login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin']);
Route::post('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout');

// Public results (no auth required)
Route::get('/results', [VotingController::class, 'showResults'])->name('results');
Route::get('/results/{session}', [VotingController::class, 'showElectionResults'])->name('election.results');

// Voter routes (protected)
Route::middleware(['web', \App\Http\Middleware\VoterAuth::class])->group(function () {
    Route::get('/election', [VotingController::class, 'showElection'])->name('election');
    Route::post('/vote', [VotingController::class, 'submitVote'])->name('vote.submit');
});

// Admin routes (protected)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/results', [AdminController::class, 'showResults'])->name('results');
    Route::get('/create-session', [AdminController::class, 'createVotingSession'])->name('create.session');
    Route::post('/create-session', [AdminController::class, 'storeVotingSession']);
});
