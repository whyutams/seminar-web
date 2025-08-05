@extends("layouts.dashboard")

@section("title", "Dashboard - Users")

@section("content")
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Institution</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Added By</th>
                                <th>Created At</th>
                                <th width="15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $u)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->country ?? '-'}}</td>
                                    <td>{{ $u->institution ?? '-' }}</td>
                                    <td>{{ $u->department ?? '-' }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->phone ?? '-'}}</td>
                                    <td><span class="badge bg-info">{{ ucfirst($u->role) }}</span></td>
                                    <td>{{ $u->creator?->name ?? '-' }}</td>
                                    <td>{{ $u->created_at->format('d M Y') }}</td>
                                    <td>
                                        @if ($u->role !== 'superadmin')
                                            <a href="{{ route('dashboard.users.edit', $u->id) }}"
                                                class="btn btn-sm btn-warning mb-1 mb-md-0">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            @if($u->id !== auth()->id())
                                                <form action="{{ route('dashboard.users.destroy', $u->id) }}" method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Are you sure you want to delete this user?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            @endif
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No data available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
                        <div>
                            <small>
                                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }}
                                entries
                            </small>
                        </div>

                        <div>
                            {{ $users->links() }}
                        </div>

                        <div class="d-flex">
                            <button class="btn btn-success" onclick="downloadAndClose()" {{ $role_user_count > 0 ? '' : 'disabled' }}>
                                <i class="fas fa-download"></i> Download Excel
                            </button>
                            <div class="mx-1"></div>
                            <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add User
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        // function downloadAndClose() {
        //     const w = window.open("{{ route('dashboard.users.export') }}", "_blank");
        //     setTimeout(() => {
        //         w.close();
        //     }, 3000);
        // }
    </script>

@endsection