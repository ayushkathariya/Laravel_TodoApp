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
        <div class="gap-4 d-flex flex-column">
            @if ($todos)
                @foreach ($todos as $todo)
                    <div class="alert alert-light d-flex justify-content-between align-items-center" role="alert">
                        <div>
                            <p class="fw-bold">Title</p>
                            <p>{{ $todo->title }}</p>
                        </div>
                        <div>
                            <p class="fw-bold">User</p>
                            <p>{{ $todo->user->name }}</p>
                        </div>
                        <div class="d-flex">
                            <a href="{{ route('admin.todo-detail', $todo->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.todo-destroy', $todo->id) }}" method="POST" class="ml-1">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                @endforeach
                <div class="mt-3 d-flex justify-content-center align-items-center">
                    {{ $todos->links('pagination::bootstrap-4') }}
                </div>
            @endif
        </div>
    </div>
@endsection
