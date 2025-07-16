@extends('layouts.dashboard')

@section('title', 'Dashboard - Speakers')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-3">Speakers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Speakers</li>
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
                                <th>Type</th>
                                <th>Address</th>
                                <th>Added By</th>
                                <th>Created At</th>
                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($speakers as $index => $speaker)
                                <tr>
                                    <td>{{ $speakers->firstItem() + $index }}</td>
                                    <td>{{ $speaker->name }}</td>
                                    <td>
                                        <span class="badge bg-info text-capitalize">
                                            {{ str_replace('_', ' ', $speaker->type) }}
                                        </span>
                                    </td>
                                    <td>{{ $speaker->address }}</td>
                                    <td>{{ $speaker->creator?->name ?? '-' }}</td>
                                    <td>{{ $speaker->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.speakers.edit', $speaker->id) }}"
                                            class="btn btn-sm btn-warning mb-1 mb-md-0">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('dashboard.speakers.destroy', $speaker->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Are you sure you want to delete this speaker?')">
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
                                    <td colspan="7" class="text-center">No speakers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
                        <div>
                            <small>
                                Showing {{ $speakers->firstItem() }} to {{ $speakers->lastItem() }} of
                                {{ $speakers->total() }} entries
                            </small>
                        </div>
                        <div>{{ $speakers->links() }}</div>
                        <div>
                            <a href="{{ route('dashboard.speakers.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add Speaker
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection