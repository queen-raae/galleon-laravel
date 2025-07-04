<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;


// This is sudo code for a database table named 'providers' with dummy data 

Route::get('/providers', function () {
    return view('providers', [
        'providers' => [
            [
                'owner' => 'Luis',
                'name' => 'whee-airtable',
                'provider' => 'airtable',
                'configured-creds' => 'keys and stuff'

            ],
            [
                'owner' => 'Ola',
                'name' => 'ola-airtable',
                'provider' => 'airtable',
                'configured-creds' => 'keys and stuff'

            ],
            [
                'owner' => 'Ola',
                'name' => 'ola interview google-sheet',
                'provider' => 'google drive',
                'configured-creds' => 'keys and stuff'

            ],
        ]
    ]);
});

// This is sudo code for a database table named 'gateways' with dummy data 

Route::get('/gateways', function () {
    return view('gateways', [
        'gateways' => [
            [
                'owner' => 'Luis',
                'id' => '1',
                'name' => 'airtable WorkOS',
                'provider-1' => 'airtable',
                'provider-2' => 'WorkOS',
            ],
            [
                'owner' => 'Ola',
                'id' => '2',
                'name' => 'airtable WorkOS',
                'provider-1' => 'airtable',
                'provider-2' => 'WorkOS',
            ],
            [
                'owner' => 'Ola',
                'id' => '3',
                'name' => 'google drive WorkOS',
                'provider-1' => 'google drive',
                'provider-2' => 'WorkOS',
            ],
        ]
    ]);
});















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
