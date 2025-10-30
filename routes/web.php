<?php

use Illuminate\Support\Facades\Route;
use App\Models\Gateway;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;
use Illuminate\Http\Request;
use App\Http\Controllers\LikeController;
// use Illuminate\Support\Arr;
// use App\Models\Job;

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

Route::get('/gateways/{id}', [LikeController::class, 'show']);

Route::get('/gateways/{id}/non-like', function ($id) {
    $galleon = Gateway::find($id);
    
    if ($galleon) {        
        return view('gateways.edit', ['gateway' => $galleon]);
    }

    return redirect('/gateways');
});

Route::delete('/gateways/{id}', function ($id) {
    // authorize (on hold)

    // delete the like 
    Gateway::findOrFail($id)->delete();
    
    // redirect 
    return redirect('/gateways');
});
