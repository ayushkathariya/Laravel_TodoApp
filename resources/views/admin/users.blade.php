@extends('admin.layouts.app')

@section('content')
    {{-- Header --}}

    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="px-3">

        <div class="gap-4 d-flex flex-column">
            @if ($users)
                @foreach ($users as $user)
                    <div class="alert alert-light d-flex justify-content-between align-items-center" role="alert">
                        <div>
                            <p class="fw-bold">Name</p>
                            <p>{{ $user->name }}</p>
                        </div>
                        <div>
                            <p class="fw-bold">Email</p>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div>
                            <a href="{{ route('admin.user-detail', $user->id) }}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
@endsection
