<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="/#" class="logo d-flex align-items-center me-auto me-xl-0">-
            <img src="{{ asset('templates/img/logo.png') }}" alt="">
            <h1 class="sitename">Seminar</h1>
        </a>

        @auth
            @if (Auth::user()->role === 'admin')
                <nav id="navmenu" class="navmenu">
                    <ul class="gap-1">
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a class="btn-custom1 mx-2" href="{{ route("logout") }}">Logout</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            @elseif (Auth::user()->role === 'user')
                <nav id="navmenu" class="navmenu">
                    <ul class="gap-1">
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a class="btn-custom1 mx-2" href="{{ route("logout") }}">Logout</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            @endif
        @else
            <nav id="navmenu" class="navmenu">
                <ul class="gap-1">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#speakers">Speakers</a></li>
                    <li><a href="#event-schedule">Event Schedule</a></li>
                    <li><a href="{{ route("form") }}" target="_blank">Registration Form</a></li>
                    <li><a class="btn-custom1 mx-2" href="{{ route("login") }}">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        @endauth

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header>