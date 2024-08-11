@extends('admin.layouts.app')

@section('content')
    {{-- Header --}}

    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Todos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Todos</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="px-3">

        <div class="d-flex flex-column gap-4">
            <div class="alert alert-light d-flex justify-content-between align-items-center" role="alert">
                <div>
                    <p class="fw-bold">Title</p>
                    <p>Go To Gym</p>
                </div>
                <div>
                    <p class="fw-bold">User</p>
                    <p>Ayush Kathariya</p>
                </div>
                <div>
                    <a href="{{ route('admin.todo-detail', 1) }}" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>

    </div>
@endsection
