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
        //
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
    public function show(Gateway $gateway)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gateway $gateway)
    {
        //
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
    public function destroy(Gateway $gateway)
    {
        //
    }
}
