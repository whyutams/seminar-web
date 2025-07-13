@php
    $user = Auth::user();
@endphp

@extends("layouts.dashboard");

@section("title", content: "Dashboard - Admin")

@section("content")
    <section class="section container px-3 px-md-0">
        <div class="section-title my-2" data-aos="fade-up">
            <small>WELCOME TO</small>
            <h2>Dashboard</h2>
        </div>

        <div data-aos="fade-up">
            <h3>Welcome, {{ $user->name }} ({{ $user->role }})</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi culpa id minima magni tempore nam enim reprehenderit dolore consequatur architecto.</p> 
            
            <button class="btn-custom1 mt-4 mx">Lorem, ipsum.</button>

        </div>
    </section>
@endsection