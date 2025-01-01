@extends('employees.layout')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Edit Records</h2>
    <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 bg-light rounded">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name" class="text-info">Name:</label>
            <input type="text" name="name" value="{{ $employee->name }}" class="form-control border-primary" placeholder="Enter name">
        </div>

        <div class="form-group mb-3">
            <label for="address" class="text-success">Address:</label>
            <input type="text" name="address" value="{{ $employee->address }}" class="form-control border-success" placeholder="Enter address">
        </div>

        <div class="form-group mb-3">
            <label for="mobile" class="text-warning">Telephone:</label>
            <input type="text" name="mobile" value="{{ $employee->mobile }}" class="form-control border-warning" placeholder="Enter telephone number">
        </div>

        <div class="form-group mb-3">
            <label for="gender" class="text-danger">Gender:</label>
            <input type="text" name="gender" value="{{ $employee->gender }}" class="form-control border-danger" placeholder="Enter gender">
        </div>

        <div class="form-group mb-3">
            <label for="index" class="text-primary">Index:</label>
            <input type="text" name="index" value="{{ $employee->index }}" class="form-control border-primary" placeholder="Enter index">
        </div>

        <div class="form-group mb-3">
            <label for="photo" class="text-secondary">Photo:</label>
            <input type="file" name="photo" class="form-control-file border-secondary">
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg px-4 py-2">Update</button>
        </div>
    </form>
</div>
@endsection
