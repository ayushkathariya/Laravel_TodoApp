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
            <div class="alert alert-light d-flex justify-content-between align-items-center" role="alert">
                {{-- <form action="{{ route('admin.todo-update', $todo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" value="{{ $todo->title }}" class="form-control"
                            id="exampleFormControlInput1">
                    </div>
                    <div>
                        <label class="form-label" for="flexRadioDefault1">
                            Completed
                        </label>
                        <input name="is_completed" class="ml-1 form-check-input" type="radio" id="flexRadioDefault1"
                            {{ old('is_completed', $todo->is_completed ?? 0) == 1 ? 'checked' : '' }}>
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form> --}}
                <form action="{{ route('admin.todo-update', $todo->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title', $todo->title) }}" class="form-control"
                            id="title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="form-check">
                            <input name="is_completed" class="form-check-input" type="radio" id="completed" value="1"
                                {{ old('is_completed', $todo->is_completed) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="completed">
                                Completed
                            </label>
                        </div>
                        <div class="form-check">
                            <input name="is_completed" class="form-check-input" type="radio" id="not_completed"
                                value="0" {{ old('is_completed', $todo->is_completed) == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="not_completed">
                                Not Completed
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>

    </div>
@endsection
