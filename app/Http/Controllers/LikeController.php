<?php

namespace App\Http\Controllers;

use App\Models\Gateway;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gateways.index', [ // an array of Galleon gateways
            'gateways' => Gateway::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gateways.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Server side validation 
        request()->validate([
            'name' => '',
            'like_button_toggled' => '',
        ]); 
        $liked = $request->boolean('like_button_toggled');
        // $archived = $request->boolean('archived');
        

        Gateway::create([
            'name' => request('name'),
            'like_button_toggled' => $liked,
        ]);

        return redirect('/gateways');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gateway $gateway, $id)
    {
        $gateway = Gateway::find($id);

        if ($gateway) {
            return view('gateways.show', ['gateway' => $gateway]);
        }
        return redirect('/gateways');
    }

    /**
     * Show the form for a user to be able to delete her like on a tenant's framer post
     */
    public function edit(Gateway $gateway, $id)
    {
        
        $galleon = Gateway::find($id);
    
        if ($galleon) {        
            return view('gateways.edit', ['gateway' => $galleon]);
        }
    
        return redirect('/gateways');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gateway $gateway)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gateway $gateway, $id)
    {
        // authorize (on hold)

        // delete the like on the fake Framer post
        Gateway::findOrFail($id)->delete();
        
        // redirect 
        return redirect('/gateways');
    }
}
