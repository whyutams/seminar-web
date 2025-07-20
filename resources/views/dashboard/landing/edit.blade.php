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

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive">
                    <form action="{{ route('dashboard.landing.update', $landing->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">

                            <div class="form-group mb-4">
                                <label for="schedule_description">Main Description<span class="text-danger">*</span></label>
                                <textarea id="summernote" name="main_description">
                                                                                            {{ $landing->main_description }}
                                                                                          </textarea>
                            </div>

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

                            <div class="form-group mb-4">
                                <label for="hero_image">Hero Image</label>
                                <input type="file" class="form-control-file" id="hero_image" name="hero_image">
                                <div class="mt-2">
                                    <img src="{{ $landing->hero_image == null ? asset('img/ung-rektorat.jpg') : asset('storage/' . $landing->hero_image)}}"
                                        alt="Hero Image" height="100">
                                </div>
                            </div>
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
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection