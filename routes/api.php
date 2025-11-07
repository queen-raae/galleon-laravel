<?php

use App\Models\Gateway;
// use App\Models\User;
use App\Http\Resources\BookmarkResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
  return "Hello World!";
});

Route::get('/likes', function () {
  return response()->json(Gateway::all(), 201);
});

Route::post('/likes', function (Request $request) {
    // make new gateway
    $liked = $request->boolean('like_button_toggled');

    // store the new gateway
    Gateway::create([
        'name' => request('name'),
        'like_button_toggled' => $liked
    ]);
    

    return BookmarkResource::collection(Gateway::all());
    // returner en json respons som sier at dette gikk bra ↙️ 🥳
    //   return response()->json(['message' => 'Like created successfully'], 201);
});

Route::delete('/likes', function (Request $request, $name) {
    
    Gateway::findOrFail($name)->delete();

    return redirect('/likes');
  });





