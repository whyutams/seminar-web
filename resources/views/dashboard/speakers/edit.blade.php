@extends('layouts.dashboard')

@section('title', 'Edit Speaker')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3">Edit Speaker</h1>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>There were some problems with your input:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.speakers.index') }}">Speakers</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Speaker</h3>
                </div>

                <form action="{{ route('dashboard.speakers.update', $speaker->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $speaker->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                required>{{ old('description', $speaker->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ old('address', $speaker->address) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="type">Type <span class="text-danger">*</span></label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="keynote_speaker" {{ old('type', $speaker->type) == 'keynote_speaker' ? 'selected' : '' }}>Keynote Speaker</option>
                                <option value="invited_speaker" {{ old('type', $speaker->type) == 'invited_speaker' ? 'selected' : '' }}>Invited Speaker</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                            @if ($speaker->photo)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $speaker->photo) }}" alt="Speaker Photo" height="100">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex justify-content-between gap-2 px-3 pb-3">
                        <a href="{{ route('dashboard.speakers.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Update Speaker
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection