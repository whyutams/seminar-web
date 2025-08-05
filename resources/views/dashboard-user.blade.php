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

    <main class="main py-4 overflow-hidden" style="background: #eee;">
        <section class="section container bg-white rounded shadow my-4 p-4"> 
            <div class="px-4">
                <div class="d-flex justify-content-between">
                    <h3 class="my-auto">Welcome, {{ Auth::user()->name }} !</h3>
                    <div class="d-flex justify-content-center align-items-center text-center"><i
                            class="bi bi-person-fill" style="font-size: 40px; color: var(--accent-color);"></i></div>
                </div>
                <p>Silahkan Bergabung di Group WA untuk mendapatkan informasi terbaru.</p>
                <a href="#" class="btn btn-success"><i class="bi bi-whatsapp"></i>&nbsp;Join Group</a><br><br>
                <p>Untuk Upload Artikel Silahkan Klik Ke OJS</p>
                <a href="#" class="btn btn-danger"></i>&nbsp;Ke OJS</a><br><br>
                <p>Silahkan Download Template Artikel dan PPT dibawah ini</p>
                <a href="#" class="btn btn-primary"><i class="bi bi-download"></i>&nbsp; Download Template Prosiding</a>
                <a href="#" class="btn btn-warning ms-2"><i class="bi bi-download"></i>&nbsp; Download Template PPT</a>
            </div>

            <div class="rundown mt-5">
                <h4 class="text-center fw-bold">Event Rundown</h4>
                <div class="container px-md-5">
                    <table class="table table-responsive">
                        <tr>
                            <td style="background-color: #3396D9; color: white; width: 250px; height: 100px;">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <h5 class="text-white fw-bold text-center m-0">04 August 2025</h5>
                                </div>
                            </td>
                            <td class="text-center align-middle" style="width: 150px; color: var(--accent-color);">
                                <i class="bi bi-pencil-square" style="font-size: 40px;"></i>
                            </td>
                            <td class="align-middle">
                                Registrations
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #2a7bb3; color: white; width: 250px; height: 100px;">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <h5 class="text-white fw-bold text-center m-0">05 August 2025</h5>
                                </div>
                            </td>
                            <td class="text-center align-middle" style="width: 150px; color: var(--accent-color);">
                                <i class="bi bi-pencil-square" style="font-size: 40px;"></i>
                            </td>
                            <td class="align-middle">
                                Registrations
                            </td>
                        </tr>
                        <tr>
                            <td style="background-color: #3396D9; color: white; width: 250px; height: 100px;">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <h5 class="text-white fw-bold text-center m-0">06 August 2025</h5>
                                </div>
                            </td>
                            <td class="text-center align-middle" style="width: 150px; color: var(--accent-color);">
                                <i class="bi bi-calendar-event-fill" style="font-size: 40px;"></i>
                            </td>
                            <td class="align-middle">
                                Conference Day
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


        </section>

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