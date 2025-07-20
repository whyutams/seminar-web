<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Exports\RegistrationsExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::latest()->paginate(10);
        $registrations_count = Registration::count();

        return view('dashboard.registrations.index', compact('registrations', 'registrations_count'));
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
     * @param  \App\Models\Registration  $regist
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $regist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $regist
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $regist)
    {
        return view('dashboard.registrations.edit', compact('regist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $regist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $regist)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $regist->update($request->all());

        return redirect()->route('dashboard.registrations.index')->with('success', 'Registration updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $regist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $regist)
    {
        $regist->delete();

        return redirect()->route('dashboard.registrations.index')
            ->with('success', 'Registration deleted successfully.');
    }

    public function export()
    {
        return Excel::download(new RegistrationsExport, 'registrations.xlsx');
    }

}
