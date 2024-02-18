@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Employee</h1>
                <form action="{{ route('employees.update', $employee->id) }}" method="POST"
                    class="d-flex flex-column gap-4 mt-4">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}"
                            required minlength="5" maxlength="20">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" id="age" name="age"
                            value="{{ $employee->age }}" required min="21">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ $employee->address }}" required minlength="10" maxlength="40">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            value="{{ $employee->phone_number }}" required pattern="^08[0-9]{7,10}$">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
