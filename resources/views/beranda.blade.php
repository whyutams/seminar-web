@extends("index");
@section("hero")

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <img src="{{ asset('templates/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2>Welcome to Our Lumia</h2>
                <p>We are team of talented designers making websites with Bootstrap</p>
                <a href="{{ url("index") }}" class="btn-get-started">Get Started</a>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->
@endsection()