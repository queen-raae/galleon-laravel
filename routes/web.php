<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\Gateway;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/mygateways', function () {
    return view('mygateways', [ // an array of gateways
        'gateways' => Gateway::all()
    ]);
});


Route::get('/gateway', function () {
    return view('gateway');
});

Route::get('/newgateway', function () {
    return view('newgateway');
});

// I'm building a Minimal Viable Datamodel with as few distractions as possible



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

// Ahoy Show below, in ep (16) 01:56
Route::get('/mygateways/{id}', function ($id) {
    $gateway = Gateway::find($id);

    return view('gateway', ['gateway' => $gateway]);
});
