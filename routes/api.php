<?php

use App\Models\Gateway;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
  return "Hello World!";
});

Route::get('/likes', function () {
  return response()->json(Gateway::all(), 201);
});

Route::post('/likes', function (Request $request) {
    // Lag ny gateway
    // store
    // returner en json respons som sier at dette gikk bra
  return response()->json(['message' => 'Like created successfully'], 201);
});






