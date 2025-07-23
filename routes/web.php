<?php

use Illuminate\Support\Facades\Route;
use App\Models\Gateway;
use Inertia\Inertia;
use Laravel\WorkOS\Http\Middleware\ValidateSessionWithWorkOS;
// use Illuminate\Support\Arr;
// use App\Models\Job;

// Create a Galleon Gateway, in ep (16)
Route::get('/gateways/create', function () {
    // request()->validate([
    //     'name' => ['required', 'min:3'],
    // ]);  // later
    return view('gateways.create');
});

// Store a Galleon Gateway in the database 
Route::post('/gateways', function () {
    // Server side validation 
    request()->validate([
        'name' => ['required', 'min:3'],
    ]); // later

    Gateway::create([
        'name' => request('name'),
        
    ]);

    return redirect('/gateways');
});

Route::get('/gateways/edit', function () {
    // This is where a user should edit her Galleon gateway, for example add providers
    // The edit.blade.php will go in the gateways folder
    dd('Edit Your named Galleon Gateway');
});

// Route::get('/gateways/index', function () {
//     // should we use this as index instead of '/gateways'?
//     return view('gateways.index', [
//         'gateways' => Gateway::all()
//     ]);
// });

Route::get('/gateways', function () {
    return view('gateways.index', [ // an array of Galleon gateways
        'gateways' => Gateway::all()
    ]);
});

// Route::get('/gateways', function () {
//     $gateways = Gateway::with('employer')->latest()->simplePagination(3);
//     // If we want pagination
//     return view('gateways.index', [ // an array of Galleon gateways
//         'gateways' => $gateways
//     ]);
// });

// We use Route::get('/gateways/{id}' instead of this
// Route::get('/gateways/show', function () {
//     // it worked even with this dd() inside it! 🥳
//     // dd('Click to Edit Your Gateway');
// });


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


// Ahoy! Show below, in ep (16) 01:56
// Wildcard routes should come after specific routes like jobs/create to avoid conflicts
Route::get('/gateways/{id}', function ($id) {
    $gateway = Gateway::find($id);

    return view('gateways.show', ['gateway' => $gateway]);
});
