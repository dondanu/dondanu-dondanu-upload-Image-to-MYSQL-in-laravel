@extends('employees.layout')
@section('content')
<!-- Add a background image to the whole page (browser background) -->
<style>
    body {
        background: url('{{ asset('images/d1.jpg') }}') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Roboto', sans-serif;
        color: #fff;
    }

    .card {
        margin: 20px auto;
        color: #fff;
        border-radius: 20px;
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        max-width: 600px;
        overflow: hidden;
        background: rgba(0, 0, 0, 0.6);
    }

    .card-header {
        font-family: 'Poppins', sans-serif;
        font-size: 26px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        background: linear-gradient(135deg, rgba(45, 199, 226, 0.9), rgba(40, 167, 69, 0.9));
        color: #fff;
        padding: 15px 20px;
        border-radius: 20px 20px 0 0;
    }

    .card-body {
        background: url('{{ asset('images/d1.jpg') }}') no-repeat center center;
        background-size: cover;
        padding: 20px 30px;
    }

    form {
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.3);
    }

    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .form-group label {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: bold;
        width: 150px;
        margin-right: 10px;
    }

    .form-control {
        background: rgba(184, 217, 255, 0.45);
        color: #fff;
        border: 2px solid rgba(255, 255, 255, 0.93);
        border-radius: 5px;
        padding: 10px;
        flex: 1;
        font-family: 'Roboto', sans-serif;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0px 0px 8px rgba(40, 167, 69, 0.8);
        background: rgba(124, 49, 185, 0.3);
        outline: none;
    }

    .btn {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-success {
        background-color: #28a745;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }
</style>

<div class="card">
    <div class="card-header">
        Create New Employee
    </div>
    <div class="card-body">
        <form action="{{ url('employee') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter address">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter 10-digit number">
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input class="form-control" name="photo" type="file" id="photo">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter gender">
            </div>

            <div class="form-group">
                <label for="index">Index</label>
                <input type="text" name="index" id="index" class="form-control" placeholder="Enter index number">
            </div>

            <div style="text-align: center;">
                <input type="submit" value="Submit" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>

<script>
    document.querySelector("form").addEventListener("submit", function(event) {
        let name = document.getElementById("name").value.trim();
        let address = document.getElementById("address").value.trim();
        let mobile = document.getElementById("mobile").value.trim();
        let gender = document.getElementById("gender").value.trim();
        let index = document.getElementById("index").value.trim();

        if (!name || !address || !mobile || !gender || !index) {
            alert("All fields are required!");
            event.preventDefault();
        } else if (!/^\d{10}$/.test(mobile)) {
            alert("Mobile number must be 10 digits!");
            event.preventDefault();
        }
    });
</script>
@stop
