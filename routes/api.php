<?php

use App\Models\Gateway;
use App\Models\GalleonAction;
use App\Http\Resources\BookmarkResource; // what, structured response
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/reactions', function () {
    
    GalleonAction::firstOrCreate([
        'art_id' => request('art_id')
        
    ]);
    return response()->json(GalleonAction::all(), 201);
    // return "yo";
});


// Route::get('/bookmarks', function () {
//     return response()->json(GalleonAction::all(), 201);
// });


// Route::get('/hello', function () {
//     return view('gateways.boof');
  
// });


// Route::post('/hello', function () {
    
//     GalleonAction::firstOrCreate([
//         'art_id' => request('art_id')
        
//     ]);
//     // return response()->json(GalleonAction::all(), 201);
//     return "yo";
// });

// Route::post('/rec', function () {
//     GalleonAction::firstOrCreate([
//         'art_id' => request('art_id')
//     ]);
//     return response()->json(GalleonAction::all(), 201);
// });



// Route::get('/boof', function () {
//     return view('gateways.boof');
// });

// Route::post('/boof/{art_id}', function (Request $request, string $art_id) {
//     GalleonAction::firstOrCreate([
//         'art_id' => $art_id,
        
//     ]);
//     // return response()->json(GalleonAction::all(), 201);
//     return "yo";
// });

// Route::post('/bookmarks/{art_id}', function (Request $request, string $art_id) {
//     // request    

//     // $request->bearerToken();
//  
// Validate token and get user info
//     // $shipmate = $request->bearerToken();

// If user already reacted to this path, toggle it off (unlike)

//
// Save reaction to database (user_id, path, reaction, timestamp)
// store the new GalleonAction
//     GalleonAction::firstOrCreate([
//         'art_id' => request('art_id'),
//         // 'shipmate_id' => $shipmate
//     ]);
    
//     // returner en json respons with all bookmarks ↙️ 🥳
//     return response()->json(GalleonAction::all(), 201);
    
// });

// Route::delete('/bookmarks', function ( $art_id) {
    
//     GalleonAction::findOrFail($art_id)->delete;

//     return redirect('/bookmarks');
// });

// // viii
// // ii











// Route::get('/likes', function () {
//   return response()->json(Gateway::all(), 201);
// });

// Route::post('/likes', function (Request $request, $id) {
//     // make new gateway
//     $liked = $request->boolean('like_button_toggled');

//     // store the new gateway
//     Gateway::create([
//         'name' => request('name'),
//         'like_button_toggled' => $liked
//     ]);
    

//     return BookmarkResource::collection(Gateway::all());
    
// });

// Route::delete('/likes', function (Request $request, $name) {
    
//     Gateway::findOrFail($name)->delete();

//     return redirect('/likes');
//   });



// //   'art_id' not 'name' 
// //   'bookmark_button_toggled' not 'like_button_toggled' 

