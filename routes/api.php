<?php

use App\Models\Gateway;
use App\Models\GalleonAction;
use App\Http\Resources\BookmarkResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/bookmarks', function () {
    return response()->json(GalleonAction::all(), 201);
});

Route::post('/bookmarks', function () {

    // store the new GalleonAction
    GalleonAction::firstOrCreate([
        'art_id' => request('art_id'),
    ]);
    // returner en json respons with all bookmarks ↙️ 🥳
    return response()->json(GalleonAction::all(), 201);
});

Route::delete('/bookmarks', function ($art_id) {
    
    GalleonAction::findOrFail($art_id)->delete;

    return redirect('/bookmarks');
});












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
    
});

Route::delete('/likes', function (Request $request, $name) {
    
    Gateway::findOrFail($name)->delete();

    return redirect('/likes');
  });



//   'art_id' not 'name' 
//   'bookmark_button_toggled' not 'like_button_toggled' 

