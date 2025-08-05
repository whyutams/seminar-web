@extends("layouts.dashboard")

@section("title", "Add User")

@section("content")
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3">Add User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/users') }}">Users</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                    <h3 class="card-title">User Form</h3>
                </div>

                <form action="{{ route('dashboard.users.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                                value="{{ old('name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="department">Department / Faculty <span class="text-danger">*</span></label>
                            <select id="department-dropdown" name="department"
                                class="form-control @error('department') is-invalid @enderror" disabled required>
                                <option selected disabled value="">-- Select Department / Faculty --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="institution">Institution <span class="text-danger">*</span></label>
                            <select id="institution-dropdown" name="institution"
                                class="form-control @error('institution') is-invalid @enderror" disabled required>
                                <option selected disabled value="">-- Select Institution --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="country">Country <span class="text-danger">*</span></label>
                            <select id="country-dropdown" name="country"
                                class="form-control @error('country') is-invalid @enderror" disabled required>
                                <option selected disabled value="">-- Select country --</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number <span class="text-danger">*</span></label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phone"
                                value="{{ old('phone') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="role">Role <span class="text-danger">*</span></label>
                            <select class="form-control" name="role" id="role" required>
                                <option value="">-- Select Role --</option>
                                <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>User</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter password" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm password" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between gap-2 px-3 pb-3">
                        <a href="{{ route('dashboard.users.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-plus"></i> Add User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('{{ asset('json/universitas.json') }}')
                .then(res => res.json())
                .then(data => {
                    const select = document.getElementById('institution-dropdown');
                    const oldValue = "{{ old('universitas') }}";

                    data.forEach((u, i) => {
                        const option = document.createElement('option');
                        option.value = u.name;
                        option.textContent = u.name;

                        if (u.name == oldValue) option.selected = true;

                        select.appendChild(option);

                        if (i + 1 == data.length) select.disabled = false;
                    });
                });

            fetch('{{ asset('json/country.json') }}')
                .then(res => res.json())
                .then(data => {
                    const select = document.getElementById('country-dropdown');
                    const oldValue = "{{ old('country') }}";

                    data.forEach((c, i) => {
                        const option = document.createElement('option');
                        option.value = c;
                        option.textContent = c;

                        if (c == oldValue) option.selected = true;

                        select.appendChild(option);

                        if (i + 1 == data.length) select.disabled = false; else if (c == data[0]) option.selected = true;
                    });
                });

            fetch('{{ asset('json/bidang.json') }}')
                .then(res => res.json())
                .then(data => {
                    const select = document.getElementById('department-dropdown');
                    const oldValue = "{{ old('department') }}";

                    data.forEach((c, i) => {
                        const option = document.createElement('option');
                        option.value = c;
                        option.textContent = c;

                        if (c == oldValue) option.selected = true;

                        select.appendChild(option);

                        if (i + 1 == data.length) select.disabled = false;
                    });
                });
        });
    </script>
@endsection