<?php

namespace App\Http\Controllers;

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

        return view("dashboard.landing.edit", compact('landing'));
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
            'hero_image' => 'nullable|image',
        ]);

        if ($request->hasFile('hero_image')) {
            if ($landing->hero_image) {
                Storage::disk('public')->delete($landing->hero_image);
            }

            $validated['hero_image'] = $request->file('hero_image')->store('landings', 'public');
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
