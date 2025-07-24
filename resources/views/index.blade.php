<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Seminar Nasional 2025</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('img/ung-icon1.png') }}" rel="icon">
    <link href="{{ asset('img/ung-icon1.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('templates/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('templates/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include("components/header")

    <main class="main">
        <style>
            #heroCarousel .hero-image-container {
                position: relative;
                height: 600px;
                overflow: hidden;
            }

            #heroCarousel::before {
                content: "";
                background: color-mix(in srgb, var(--background-color), transparent 40%);
                position: absolute;
                inset: 0;
                z-index: 1;
            }

            #heroCarousel img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
            }

            #heroCarousel .content {
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
            }

            #heroCarousel .content .row {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                transform: translate(-50%, -50%);
            }

            #heroCarousel .content .row p {
                margin: 10px 0 0 0;
                font-size: 24px;
                color: var(--heading-color);
            }

            #heroCarousel .content .row h2 {
                margin: 0;
                font-size: 48px;
                font-weight: 700;
            }
        </style>

        <div id="home">
            <div id="heroCarousel" class="carousel slide dark-background" data-bs-ride="carousel">

                <div class="content container text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <p class="text-white">Universitas Negeri Gorontalo - Indonesia</p>
                            <h2 class="text-white" style="font-size: 48px !important;">Seminar Nasional 2025</h2>
                            <a href="{{ route("form") }}" class="btn-custom1 mt-4">Registration Form</a>
                        </div>
                    </div>
                </div>
                @if ($heroes->count() > 1)
                    <div class="carousel-indicators">
                        @foreach ($heroes as $index => $hero)
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{$index}}"
                                class="@if($index === 0) active @endif"
                                aria-current="@if($index === 0) true @else false @endif"></button>
                        @endforeach
                    </div>
                @endif

                <div class="carousel-inner">
                    @if($heroes->count() > 1)
                        @foreach ($heroes as $index => $hero)
                            <div class="carousel-item @if($index === 0) active @endif">
                                <div class="hero-image-container">
                                    <img src="{{ asset('storage/' . $hero->image) }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="carousel-item active">
                            <div class="hero-image-container">
                                <img src="{{ asset('img/ung-rektorat.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    @endif
                </div>

                @if ($heroes->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>

            <div class="bg-1">
                <section class="section container px-3 px-md-0">
                    <div class="section-title my-2" data-aos="fade-up">
                        <small>WELCOME TO</small>
                        <h2>Seminar Nasional 2025</h2>
                    </div>

                    <div data-aos="fade-up">
                        {!! $landing->main_description !!}
                    </div>
                </section>
            </div>
        </div>


        @if ($keynote_speakers->count() > 0 || $invited_speakers->count() > 0)
            <section class="section container px-3 px-md-0" id="speakers">
                <div class="" data-aos="fade-up">
                    <div class="section-title text-center mb-2">
                        <h2>Speakers</h2>
                    </div>

                    @if ($keynote_speakers->count())
                        <div data-aos="fade-up">
                            <div class="text-left mb-3">
                                <h3>Keynote Speakers:</h3>
                            </div>
                            <div class="row">
                                @foreach ($keynote_speakers as $speaker)
                                    <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                                        <div
                                            class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                            <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                                src="{{ asset('storage/' . $speaker->photo) }}" alt="{{ $speaker->name }}" />
                                            <h4>{{ $speaker->name }}</h4>
                                            <p>{{ $speaker->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif


                    @if ($invited_speakers->count())
                        <div data-aos="fade-up mb-5">
                            <div class="text-left mb-3">
                                <h3>Invited Speakers:</h3>
                            </div>
                            <div class="row">
                                @foreach ($invited_speakers as $speaker)
                                    <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                                        <div
                                            class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                            <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                                src="{{ asset('storage/' . $speaker->photo) }}" alt="{{ $speaker->name }}" />
                                            <h4>{{ $speaker->name }}</h4>
                                            <p>{{ $speaker->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>
            </section>
        @endif

        <div class="event-schedule">
            <section id="event-schedule" class="section container px-3 px-md-0">

                <!-- Section Title -->
                <div class="section-title" data-aos="fade-up">
                    <h2>Information of Event Schedules</h2>
                </div><!-- End Section Title -->

                <div class="mb-4" data-aos="fade-up">
                    <div class="d-md-flex d-inline justify-content-between align-items-start px-2">
                        <p class="me-3" style="flex: 1;">
                            {{ $landing->schedule_description }}
                        </p>

                        <div
                            class="conference-day px-4 py-4 rounded-4 text-white fw-bold shadow text-center d-flex align-items-center justify-content-center gap-3 bg-primary mt-4 mt-md-0 m-auto mx-5 mx-md-0">

                            <div class="icon fs-3 text-end">
                                <i class="bi bi-calendar"></i>
                            </div>

                            <div class="text-start">
                                <p class="mb-0" style="font-size: x-large;">
                                    {{(DateTime::createFromFormat('Y-m-d', $landing->schedule_date))->format('d F, Y')}}
                                </p>
                                <p class="text-uppercase mb-0" style="font-size: small;">Conference Day</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a href="{{ route("form") }}" class="btn-custom1 mt-5 mt-md-4 mx-md-0 mx-auto" target="_blank"
                            data-aos="zoom-in" data-aos-delay="500">Registration Now</a>
                    </div>

                </div>

            </section>
        </div>


    </main>

    @include("components/footer")

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('templates/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('templates/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('templates/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{ asset('templates/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('templates/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('templates/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('templates/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('templates/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('templates/js/main.js') }}"></script>

</body>

</html>