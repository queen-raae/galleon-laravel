<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;
// use arr
use Illuminate\Support\Arr;
// use app\Models\User; almost exept I used User, for no reason and small a on App instead of capital
use App\Models\Job;
// use fn?

Route::get('mygateways', function () {
    return view('mygateways', [
        'gateways' => Job::all()
    ]);
});

Route::get('/gateway', function () {
    return view('gateway');
});

Route::get('/newgateway', function () {
    return view('newgateway');
});

// I'm building a Minimal Viable Datamodel with as few distractions as possible

// This is an array instead of a database table named 'providers' with dummy data 

Route::get('/gateway', function () {
    return view('gateway', [
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

// This is an array instead of a database table named 'gateways' with dummy data 

// Route::get('/mygateways', function () {
//     return view('mygateways', [
//         'gateways' => [
//             [
//                 'owner' => 'Luis',
//                 'id' => '1',
//                 'name' => 'airtable WorkOS'
                
//             ],
//             [
//                 'owner' => 'Ola',
//                 'id' => '2',
//                 'name' => 'airtable WorkOS',
//             ],
//             [
//                 'owner' => 'Ola',
//                 'id' => '3',
//                 'name' => 'google drive WorkOS'
                
//             ]
//         ]
//     ]);
// });


Route::get('/yourgateways', function () {
    return view('yourgateways', [
        'gateways' => [
            [ 
                'name' => 'airtable WorkOS'   
            ],
            [
                'name' => 'google drive WorkOS'   
            ]
        ]
    ]);
});

// For each of these gateways we'll see what is now in /gateway.blade.php 

Route::get('/gateways/{id}', function ($id) {
    $gateways = [
        [
            'owner' => 'Luis',
            'id' => '1',
            'name' => 'airtable WorkOS'
            
        ],
        [
            'owner' => 'Ola',
            'id' => '2',
            'name' => 'airtable WorkOS',
        ],
        [
            'owner' => 'Ola',
            'id' => '3',
            'name' => 'google drive WorkOS'
            
        ]
    ];

    $gateway = Arr::first($gateways, fn($gateway) => $gateway['id'] == $id);
    dd($gateway);
    // 16:33
    // return view('gateway', ['gateway' => $gateway]);
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
