<?php

use Illuminate\Support\Facades\Route;
use App\Models\Gateway;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;
use Illuminate\Http\Request;
use App\Http\Controllers\LikeController;
use App\Models\User;
// use Illuminate\Support\Arr;
// use App\Models\Job;

Route::get('/api/likes', function () {
    // authenticate (on hold)
    // rate limiting
    // return JSON
    return response()->json(Gateway::all(), 201);
});


// Create a Galleon Gateway
Route::get('/gateways/create', [LikeController::class, 'create']);

// Store a Galleon Gateway in the database
Route::post('/gateways', [LikeController::class, 'store']);

Route::get('/gateways', [LikeController::class, 'index']);

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware([
    'auth',
    ValidateSessionWithWorkOS::class,
])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/gateways/api-test', function () {
    return view('gateways.api');
});

Route::get('/gateways/{id}', [LikeController::class, 'show']);

Route::get('/gateways/{id}/non-like', [LikeController::class, 'edit']);

Route::delete('/gateways/{id}', [LikeController::class, 'destroy']);


