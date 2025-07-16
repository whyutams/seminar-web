@extends("layouts.dashboard")

@section("title", "Edit Registration")

@section("content")
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3">Edit Registration</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.registrations.index') }}">Registrations</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-sm-12">
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
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Registration</h3>
                </div>

                <form action="{{ route('dashboard.registrations.update', $regist->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="full_name">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name', $regist->full_name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="department">Department / Faculty <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="department" name="department" value="{{ old('department', $regist->department) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="institution">Institution <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="institution" name="institution" value="{{ old('institution', $regist->institution) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="country">Country <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $regist->country) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $regist->phone) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $regist->email) }}" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between gap-2 px-3 pb-3">
                        <a href="{{ route('dashboard.registrations.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Update Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
