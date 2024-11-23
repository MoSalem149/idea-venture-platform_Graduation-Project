@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Add New Category</h2>
                    </div>

                    <div class="card-body text-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('Ideatype.store') }}" method="POST">
                            @csrf



                            <input type="text" name="proj_type" class="form-control form-control-lg mb-3"
                                placeholder="Category Name">
                            <button type="submit" class="btn btn-primary btn-lg ">Create Category</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
