<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Lumia Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('templates/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('templates/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
        <div id="home">
            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background py-5">

                <img src="{{ asset('templates/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

                <div class="container text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <p>Universitas Negeri Gorontalo - Indonesia</p>
                            <h2 style="font-size: 48px !important;">Seminar Internasional 2025</h2>
                            <a href="{{ url("index") }}" class="btn-custom1 mt-4">Registration Form</a>
                        </div>
                    </div>
                </div>

            </section><!-- /Hero Section -->

            <div class="bg-1">
                <section class="section container px-3 px-md-0">
                    <div class="section-title my-2" data-aos="fade-up">
                        <small>WELCOME TO</small>
                        <h2>Seminar Internasional 2025</h2>
                    </div>

                    <div data-aos="fade-up">
                        <p>
                            The organizing Committee of the 8th International Conference on Education Innovation (ICEI)
                            2024 is an interdisciplinary platform for teachers, researchers, practitioners, and
                            academicians to present and discuss the latest research findings, concerns as well as
                            practical challenges encountered and solutions adopted in the fields of green education
                            innovation in managing sustainable environment.
                        </p>

                        <p><strong>TOPICS</strong></p>
                        <p>
                            <span style="font-weight: 400;">The topic of the 8th International Conference on Education
                                Innovation (ICEI) 2024 is </span>
                            <strong><em>“Green Education Innovation By Equipping Individuals With The Power Of
                                    Artificial Intelligence To Achieve Sustainable Development Goals”</em></strong>
                        </p>

                        <p><strong>SUBJECT AREA</strong></p>
                        <ol>
                            <li>Life long learning and distance education to SDG’s</li>
                            <li>Green innovation for sustainable development</li>
                            <li>Design, implementation and evaluation of innovative technology education</li>
                            <li>Equal access to quality primary education</li>
                            <li>Entrepeneurs education for sustanaible development goals</li>
                            <li>Vocational education and training</li>
                            <li>The role of entrepreneur education for sustainable development</li>
                            <li>Technology and science education on SDG’s</li>
                            <li>Sustainable teacher training and SDG knowledge</li>
                            <li>Inclusive and equitable quality education</li>
                            <li>Blended learning and teaching for SDG’s</li>
                            <li>Problem-based and project-based learning for sustainable development</li>
                            <li>Guidance and counseling in sustainability of education system</li>
                            <li>Psychological impact for SDGs</li>
                        </ol>

                        <button class="btn-custom1 mt-4">Lorem, ipsum.</button>

                    </div>
                </section>
            </div>
        </div>

        <section class="section container px-3 px-md-0" id="speakers">
            <div class="" data-aos="fade-up">
                <div class="section-title text-center mb-2">
                    <h2>Speakers</h2>
                </div>

                <div data-aos="fade-up">
                    <div class="text-left mb-3">
                        <h3>Keynote Speakers:</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" alt="Speaker 1" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Speaker 2" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" alt="Speaker 1" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Speaker 2" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up mb-5">
                    <div class="text-left mb-3">
                        <h3>Invited Speakers:</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" alt="Speaker 1" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Speaker 2" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" alt="Speaker 1" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                            <div
                                class="icon-box d-flex flex-column justify-content-center align-items-center text-center">
                                <img width="128" height="128" class="mb-4 rounded-circle shadow-4-strong"
                                    src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Speaker 2" />
                                <h4>Corporis voluptates officia eiusmod</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="event-schedule">
            <section id="event-schedule" class="section container px-3 px-md-0">

                <!-- Section Title -->
                <div class="section-title" data-aos="fade-up">
                    <h2>Information of Event Schedules</h2>
                </div><!-- End Section Title -->

                <div class="mb-4" data-aos="fade-up">
                    <div class="d-md-flex d-inline justify-content-between align-items-start px-2">
                        <p class="me-3" style="flex: 1;">
                            In the upcoming event, the 8th International Conference on Education Innovation (ICEI) 2024
                            is organized by Universitas Negeri Surabaya, will be held on 10 August, 2024 in Surabaya,
                            Indonesia. The conferences will be conducted via Zoom Meeting and the offline mode will be
                            held at Auditorium Universitas Negeri Surabaya Floor 9, Kampus Lidah Wetan, Surabaya.
                        </p>

                        <div
                            class="conference-day px-4 py-4 rounded-4 text-white fw-bold shadow text-center d-flex align-items-center justify-content-center gap-3 bg-primary mt-4 mt-md-0 m-auto mx-5 mx-md-0">

                            <div class="icon fs-3 text-end">
                                <i class="bi bi-calendar"></i>
                            </div>

                            <div class="text-start">
                                <p class="mb-0" style="font-size: x-large;">14 July, 2025</p>
                                <p class="text-uppercase mb-0" style="font-size: small;">Conference Day</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a class="btn-custom1 mt-5 mt-md-4 mx-md-0 mx-auto" target="_blank" data-aos="zoom-in"
                            data-aos-delay="500">Registration Now</a>
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