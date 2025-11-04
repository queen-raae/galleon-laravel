<?php

use App\Models\Gateway;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['throttle:pub_like_api'])->group(function () 
{
    Route::get('/likes', function () {
        return response()->json(Gateway::all(), 201);
    }); 
});


// How does "it" get from AppServiceProvider and here?
// - pub_like_api
// - middleware