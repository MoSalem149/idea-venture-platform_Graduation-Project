@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>All Categories</h2>
                    </div>

                    @if (session('message'))
                        <div class="alert alert-success mt-3">
                            <h4 class="text-center">{{ session('message') }}</h4>
                        </div>
                    @endif

                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($ideatypes as $ideatype)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$ideatype->proj_type}}</td>
                                        <td>
                                            <a href="{{ route('Ideatype.edit', $ideatype) }}" class="btn btn-dark btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('Ideatype.destroy', $ideatype) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="text-center mt-4">
                            <a href="{{ route('Ideatype.create') }}" class="btn btn-success">Add New Category</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
