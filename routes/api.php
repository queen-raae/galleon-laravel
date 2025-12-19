<?php

use App\Models\Gateway;
use App\Models\GalleonAction;
use App\Http\Resources\BookmarkResource; // what, structured response
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::post('/name', function (Request $request) {
    $name = $request->input('name');
    return response()->json(['name' => $name]);
});

Route::post('/reactions', function (Request $request) {
    // 1. Grab the token
    // Get the Authorization header
    $authHeader = $request->header('Authorization');
    // Split the Authorization header into parts
    $parts = $authHeader ? explode(" ", $authHeader) : [];
    // Get the token from the second part of the Authorization header
    $token = isset($parts[1]) ? trim($parts[1]) : null;

    // If the token is not found, return an error
    if (!$token) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // 2. Verify the token
    // Get the profile from the Outseta API
    $profileResponse = Http::withToken($token)->get('https://snippets.outseta.com/api/v1/profile?fields=*');
    // If the profile is not found or unathorized, return an error
    if ($profileResponse->failed()) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // Get the profile json response
    $profile = $profileResponse->json();
    // Get the shipmate_id from the profile
    $shipmate_id = $profile['Uid'];
    // If the shipmate_id is not found, return an error
    if (!$shipmate_id) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // 3. Get the data from the request
    $data = $request->all();
    $art_id = $data['art_id'];
    $action_type = $data['action_type'];

    // 3. Save the data to the database
    $saved = GalleonAction::firstOrCreate([
        'art_id' => $art_id,
        'action_type' => $action_type,
        'shipmate_id' => $shipmate_id,
    ]);


   return response()->json($saved, 201);
});

route::get('/profile', function ()
{

    return Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6ImVNQnNkMGRqYTY2aHFZbEpocFFOMUItZ1FqcyIsImtpZCI6ImVNQnNkMGRqYTY2aHFZbEpocFFOMUItZ1FqcyJ9.eyJuYmYiOjE3NjYwNDQ2MTYsImV4cCI6MTc2NjY0OTQxNiwiaXNzIjoiaHR0cHM6Ly9zbmlwcGV0cy5vdXRzZXRhLmNvbSIsImNsaWVudF9pZCI6InNuaXBwZXRzLm91dHNldGEuY29tLnJlc291cmNlLW93bmVyIiwic2NvcGUiOlsib3BlbmlkIiwib3V0c2V0YSIsInByb2ZpbGUiXSwic3ViIjoiWm1OWG5PbjkiLCJhdXRoX3RpbWUiOjE3NjYwNDQ2MTYsImlkcCI6Imlkc3J2IiwiZW1haWwiOiJ0ZXN0QGxpbGx5bGFicy5ubyIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJmYW1pbHlfbmFtZSI6IlJhYWUiLCJnaXZlbl9uYW1lIjoiUXVlZW4iLCJuYW1lIjoiUXVlZW4gUmFhZSIsIm5hbWVpZCI6IlptTlhuT245Iiwib3V0c2V0YTphY2NvdW50VWlkIjoiajliYlJhbjkiLCJvdXRzZXRhOmlzUHJpbWFyeSI6IjEiLCJvdXRzZXRhOnN1YnNjcmlwdGlvblVpZCI6Ink5cUQ3a0tRIiwib3V0c2V0YTpwbGFuVWlkIjoieG1lYnFCUVYiLCJvdXRzZXRhOmFkZE9uVWlkcyI6W10sImFtciI6WyJwYXNzd29yZCJdLCJvdXRzZXRhOmlzcyI6IiIsImF1ZCI6InNuaXBwZXRzLm91dHNldGEuY29tIiwiaWF0IjoxNzY2MDQ0NjE2fQ.QmDXO0RZ1HGUu_O2Of2psj-KRoo45V3nKUmiR1F3UQbJJqPAqD9IZpOa8SXQf1L_vafJvbvhAoCNNoPYmd7SJkLJRYUY5sJVtWuyTyiAlTH5MfNmYnV94RYn2fF_uumhWpbdBzpiRHBe4cDq1AhHeUT7trDX9XGPohGuumDHiZwbGUJMwoWK2EySMniUvm1dcuS5Z75Gi1SBkhvWU1zpn8sMqKjQ-ZizNsozgKa3TGzereHilRIHRMTRCsyO93FUfG1FBDFXbM6Qwfa7OoJEYF_dYQWDDj8YBwAMxP51s-5UPMoBzKeo7RUxfbKEj1SnITyRg_hHL9Hg38Ppb3Gt-g')->get('https://snippets.outseta.com/api/v1/profile?fields=*')->json();
});

// use params in HTTPie, but why?
// route::get('/ook', function ()
// {
//     // $baseUrl = 'https://api.callingallpapers.com/v1/';
//     // Http::withHeaders
//     // return Http::get($this->$baseUrl . 'cfp')->json();
//     // return "yo";
//     return Http::withToken('🔑')->get('🌐');
//     return Http::withToken('')->get('')->json();

//     return Http::get('https://api.callingallpapers.com/v1/cfp', )->json();


// });


// // use params in HTTPie, but why?
// route::get('/ook', function ()
// {
//     // $baseUrl = 'https://api.callingallpapers.com/v1/';

//     // return Http::get($this->$baseUrl . 'cfp')->json();
//     // return "yo";

//     return Http::get('https://api.callingallpapers.com/v1/cfp')->json();


// });

// route::get('/paper', function ()
// {
//     return Http::get('https://api.callingallpapers.com/v1/cfp')->json();
// });


// Route::get('/bookmarks', function () {
//     return response()->json(GalleonAction::all(), 201);
// });


// Route::post('/reactions', function () {
//     // how if
//     //$act->save;
//     GalleonAction::firstOrCreate([
//         'art_id' => request('art_id')

//     ]);
//     return response()->json(GalleonAction::all(), 201);
//     // return "yo";
// });

// route::patch('/reactions/{id}', function ($id)
// {
//     $act = GalleonAction::findOrFail($id);

//     $act->action_type = request('action_type');
//     $act->save();
// the Wes Bos method og you do you
// the Wes Raae method of Don't Change A Thing
//     return response()->json(GalleonAction::find($id), 201);
// });

route::get('/bleh', function ()
{
    // Grab the auth header
    $authHeader = request->headers('authorization');
    // Grab the token from the auth header by splitting
    // on space and taking the second value.
    $token = authHeader?->split(" ")[1]?->trim();

    // $fetchResponse = await fetch(
    //     // Adding fields=* gives you custom properties as well
    //     "https://<your_domain>.outseta.com/api/v1/profile?fields=*",
    //     {
    //       headers: {
    //         Authorization: `Bearer ${token}`,
    //       },
    //     }
    //   );

    //   if (!fetchResponse.ok) throw new Error("Profile response not ok");

    //   const profile = await fetchResponse.json();

      console.log("VERIFIED");

      // The token is verified and you may use the information in its payload
      // and/or the information provided by the profile endpoint
      // to identify the person behind the request.
    //   const payload = decodeJwt(token);
});

route::patch('/reactions/{id}', function ($id)
{
    $act = GalleonAction::findOrFail($id);

    $act->action_type = request('action_type');
    $act->save();

    return response()->json(GalleonAction::find($id), 201);
});