@extends("layouts.dashboard")

@section("title", "Dashboard - Landing")

@section("content")
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3">Landing</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Landing</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive">
                    <div class="card-body">

                        <div class="form-group mb-5">
                            <label for="hero_images">Hero Images</label>

                            <style>
                                .hero-image-container {
                                    position: relative;
                                    height: 600px;
                                    overflow: hidden;
                                    border-radius: 8px;
                                }

                                .hero-image {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                    object-position: center;
                                    border-radius: 8px;
                                }

                                .delete-overlay {
                                    position: absolute;
                                    inset: 0;
                                    background-color: rgba(0, 0, 0, 0.5);
                                    opacity: 0;
                                    transition: opacity 0.3s ease-in-out;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    border-radius: 8px;
                                }

                                .hero-image-container:hover .delete-overlay {
                                    opacity: 1;
                                }

                                @media (max-width: 768px) {
                                    .hero-image-container {
                                        height: 220px;
                                    }

                                    .carousel-control-prev,
                                    .carousel-control-next {
                                        width: 10%;
                                    }
                                }
                            </style>


                            @if ($heroes->count())
                                <div id="heroCarousel" class="carousel slide mb-3 mx-md-5 mx-0 px-md-0 px-5 mt-1"
                                    data-bs-ride="carousel">

                                    @if ($heroes->count() > 1)
                                        <ol class="carousel-indicators">
                                            @foreach ($heroes as $index => $hero)
                                                <li type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{$index}}"
                                                    class="@if($index === 0) active @endif"
                                                    aria-current="@if($index === 0) true @else false @endif"></li>
                                            @endforeach
                                        </ol>
                                    @endif

                                    <div class="carousel-inner">
                                        @foreach ($heroes as $index => $hero)
                                            <div class="carousel-item @if($index === 0) active @endif">
                                                <div class="hero-image-container">
                                                    <img src="{{ asset('storage/' . $hero->image) }}" class="hero-image">

                                                    <div class="delete-overlay">
                                                        <form action="{{ route('dashboard.hero.destroy', $hero->id) }}"
                                                            method="POST"
                                                            onsubmit="confirm('Are you sure want to delete this image?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash p-2"
                                                                    style="font-size: 16px;"></i></button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>

                                    @if ($heroes->count() > 1)
                                        <div class="mx-5 px-5">
                                            <button class="carousel-control-prev  mx-5 mx-md-0" type="button"
                                                data-bs-target="#heroCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            </button>
                                            <button class="carousel-control-next mx-5 mx-md-0" type="button"
                                                data-bs-target="#heroCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    @endif
                                </div>

                                <p class="mx-auto text-center">Result: {{ $heroes->count() }} @if($heroes->count() > 1) Images
                                @else Image @endif</p>
                            @else
                                <p class="text-muted">No results.</p>
                            @endif

                            <form action="{{ route('dashboard.hero.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mt-5">
                                    <input type="file" class="form-control" name="image" required accept="image/*">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-upload"></i> Upload
                                    </button>
                                </div>
                                @error('image')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('dashboard.landing.update', $landing->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body table-responsive">
                        <div class="card-body">

                            <div class="form-group mb-4">
                                <label for="schedule_description">Main Description<span class="text-danger">*</span></label>
                                <textarea id="summernote"
                                    name="main_description">{{ old('main_description', $landing->main_description) }}</textarea>
                            </div>

                            <hr>

                            <div class="form-group mb-4">
                                <label for="schedule_description">Schedule Description<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="schedule_description" name="schedule_description"
                                    rows="3"
                                    required>{{ old('schedule_description', $landing->schedule_description) }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="schedule_date">Schedule Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="schedule_date" name="schedule_date"
                                    value="{{ old('schedule_date', $landing->schedule_date) }}" required>
                            </div>
                        </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body table-responsive">
                            <div class="form-group mb-4">
                                <label for="poster_image">Poster Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="poster_image" accept="image/*">

                                @if ($landing->poster_image)
                                    <div class="mt-3">
                                        <img class="" src="{{ asset('storage/' . $landing->poster_image) }}" alt=""
                                            height="150">
                                    </div>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <label for="poster_description">Poster Description<span class="text-danger">*</span></label>
                                <textarea id="summernote2" name="poster_description">{{ old('poster_description', $landing->poster_description) }}</textarea>
                            </div>
<!-- 
                            <div class="form-group mb-4">
                                <label for="schedule_date">Schedule Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="schedule_date" name="schedule_date"
                                    value="{{ old('schedule_date', $landing->schedule_date) }}" required>
                            </div> -->


                        </div>

                        <div class="d-md-flex d-inline justify-content-between gap-2 px-3 pb-3">
                            <div class="last_update text-center text-md-start">
                                <p>Last updated by <strong>{{ $landing->creator?->name }}</strong></p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-secondary mx-2" href="{{ url("/") }}">
                                    <i class="bi bi-box-arrow-up-right"></i> Go to Landing page
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Update
                                </button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </section>

@endsection