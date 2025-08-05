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
                <div class="card-body">
                    <div class="overflow-x-auto table-responsive">
                        <table id="table" class="table table-bordered table-hover table-striped">
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
                                        <td>{{  $index + 1 }}</td>
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
                    </div>

                    <div class="row text-center text-md-start align-items-center mt-3" id="datatable-footer-custom">
                        <div class="col-12 col-md-4 mb-2 mb-md-0 d-flex justify-content-center justify-content-md-start"
                            id="custom-info"></div>
                        <div class="col-12 col-md-4 mb-2 mb-md-0 d-flex justify-content-center" id="custom-paginate"></div>
                        <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-end align-items-center gap-2"
                            id="custom-buttons">
                            <div id="btn_excel_wrapper"></div>
                            <div class="mx-1"></div>
                            <a href="{{ route('dashboard.speakers.create') }}" class="btn btn-primary mb-2 mb-md-0">
                                <i class="fas fa-plus"></i> Add Speaker
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function () {
            const table = $("#table").DataTable({
                responsive: false,
                lengthChange: false,
                autoWidth: false,
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                buttons: [
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-download"></i>&nbsp; Export to Excel',
                        className: 'btn btn-success',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 9]
                        }
                    }
                ]
            });

            table.buttons().container().appendTo('#btn_excel_wrapper');
            const wrapper = $('#table').parents('.dataTables_wrapper');
            wrapper.find('.dataTables_info').appendTo('#custom-info');
            wrapper.find('.dataTables_paginate').appendTo('#custom-paginate');
        }); 
    </script>
@endsection