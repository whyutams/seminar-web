<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Landing;
use Illuminate\Http\Request;
use Storage;

class DashboardLandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landing = Landing::with('creator')->first();
        $heroes = Hero::with('creator')->get();

        return view("dashboard.landing.edit", compact('landing', 'heroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landing $landing)
    {        
        $validated = $request->validate([
            'main_description' => 'required',
            'schedule_description' => 'required|string',
            'schedule_date' => 'required|string',
            'poster_description' => 'nullable|string',
            'poster_image' => 'nullable|image',
        ]);

        if ($request->hasFile('poster_image')) {
            if ($landing->poster_image) {
                Storage::disk('public')->delete($landing->poster_image);
            }

            $validated['poster_image'] = $request->file('poster_image')->store('landings', 'public');
        } 

        $landing->update($validated);

        return redirect()->route('dashboard.landing.index')->with('success', 'Landing page has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landing $landing)
    {
        //
    }
}
