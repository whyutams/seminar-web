@extends("layouts.dashboard")

@section("title", "Dashboard - Registrations")

@section("content")
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3">Registrations</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Registrations</li>
                    </ol>
                </div>
                <div class="col-sm-12">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Full Name</th>
                                <th>Department</th>
                                <th>Institution</th>
                                <th>Country</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Registered At</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($registrations as $index => $r)
                                <tr>
                                    <td>{{ $registrations->firstItem() + $index }}</td>
                                    <td>{{ $r->full_name }}</td>
                                    <td>{{ $r->department }}</td>
                                    <td>{{ $r->institution }}</td>
                                    <td>{{ $r->country }}</td>
                                    <td>{{ $r->email }}</td>
                                    <td>{{ $r->phone }}</td>
                                    <td>{{ $r->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.registrations.edit', $r->id) }}"
                                            class="btn btn-sm btn-warning mb-1 mb-md-0">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('dashboard.registrations.destroy', $r->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Are you sure you want to delete this user?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No registrations found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
                        <div>
                            <small>
                                Showing {{ $registrations->firstItem() }} to {{ $registrations->lastItem() }} of
                                {{ $registrations->total() }} entries
                            </small>
                        </div>

                        <div>
                            {{ $registrations->links() }}
                        </div>

                        <div>
                            <button class="btn btn-success" onclick="downloadAndClose()">
                                <i class="fas fa-download"></i> Download Excel
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        function downloadAndClose() {
            const w = window.open("{{ route('dashboard.registrations.export') }}", "_blank");
            setTimeout(() => {
                w.close();
            }, 3000);
        }
    </script>
@endsection