@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Employee List</h1>
                <a href="{{ route('employees.create') }}" class="btn btn-primary my-3">Add New Employee</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->phone_number }}</td>
                                <td class="d-flex gap-3">
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
