<?php

use App\Models\Gateway;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['throttle:pub_like_api'])->group(function () 
{

    //     How do I see this route? The file is routes/ api.php
    Route::get('/likes', function () { // this
        return response()->json(Gateway::all(), 201); // this
    }); 
});


// How does "it" get from AppServiceProvider and here?
// - pub_like_api
// - middleware