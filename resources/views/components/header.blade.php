<header id="header" class="header d-flex align-items-center sticky-top shadow-sm">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="/#" class="logo d-flex align-items-center me-auto me-xl-0">-
            <img src="{{ asset('img/ung-icon1.png') }}" alt="">
            <h1 class="sitename" style="color: #0c5f9a;">FT-UNG</h1>
        </a>

        @auth
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'superadmin')
                <nav id="navmenu" class="navmenu">
                    <ul class="gap-1">
                        <li><a href="/#home" class="active">Home</a></li>
                        <li><a href="/#speakers">Speakers</a></li>
                        <li><a href="/#event-schedule">Event Schedule</a></li>
                        @if(isset($landing->poster_image))<li><a href="/#event-info">About</a></li>@endif
                        <li><a href="{{ route("form") }}" target="_blank">Registration Form</a></li>
                        <li><a class="btn-custom1 mx-2" href="{{ url("/dashboard") }}">Dashboard</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            @elseif (Auth::user()->role === 'user')
                <nav id="navmenu" class="navmenu">
                    <ul class="gap-1">
                        <li><a href="/#home" class="active">Home</a></li>
                        <li><a href="/#speakers">Speakers</a></li>
                        <li><a href="/#event-schedule">Event Schedule</a></li>
                        @if(isset($landing->poster_image))<li><a href="/#event-info">About</a></li>@endif
                        <li><a href="{{ route("form") }}" target="_blank">Registration Form</a></li>
                        <li><a class="btn-custom1 mx-2" href="{{ url("/logout") }}">Logout</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            @endif
        @else
            <nav id="navmenu" class="navmenu">
                <ul class="gap-1">
                    <li><a href="/#home" class="active">Home</a></li>
                    <li><a href="/#speakers">Speakers</a></li>
                    <li><a href="/#event-schedule">Event Schedule</a></li>
                    @if(isset($landing->poster_image))<li><a href="/#event-info">About</a></li>@endif
                    <li><a href="{{ route("form") }}" target="_blank">Registration Form</a></li>
                    <li><a class="btn-custom1 mx-2" href="{{ route("login") }}">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        @endauth

    </div>
</header>