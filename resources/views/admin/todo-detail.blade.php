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
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" value="Go To Gym" class="form-control"
                            id="exampleFormControlInput1">
                    </div>
                    <div>
                        <label class="form-label" for="flexRadioDefault1">
                            Completed
                        </label>
                        <input name="is_completed" class="form-check-input ml-1" type="radio" id="flexRadioDefault1">
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
