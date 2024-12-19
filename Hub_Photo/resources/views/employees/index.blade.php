@extends('employees.layout')
@section('content')
<div style="
    position: absolute; 
    top: 0; 
    left: 0; 
    width: 100%; 
    height: 100%; 
    background: url('/images/v.jpg') no-repeat center center fixed; 
    background-size: cover; /* Ensure the image covers the entire viewport */
    z-index: -1;">
</div>

<div style="
    height: 100%; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    font-family: Arial, sans-serif;">

    <div style="
        width: 90%; 
        max-width: 1100px; 
        background: rgba(255, 255, 255, 0.8); 
        border-radius: 20px; 
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2); 
        overflow: hidden; 
        position: relative; 
        z-index: 2;">

        <div style="
            background: linear-gradient(135deg, rgba(45, 199, 226, 0.9), rgba(40, 167, 69, 0.9)); 
            padding: 20px; 
            color: #fff; 
            text-align: center; 
            font-family: 'Poppins', sans-serif; 
            font-size: 28px; 
            font-weight: bold; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            Welcome Guys
        </div>

        <div style="padding: 30px; font-family: 'Roboto', sans-serif; font-size: 16px;">
            <a href="{{ url('/employee/create') }}" 
               class="btn btn-success btn-sm" 
               title="Add New Contact" 
               style="
                   display: inline-block; 
                   background-color: #28a745; 
                   color: #fff; 
                   padding: 10px 15px; 
                   border-radius: 5px; 
                   text-decoration: none; 
                   font-weight: bold; 
                   margin-bottom: 20px; 
                   transition: background-color 0.3s ease;">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>

            <div class="table-responsive" style="
                border: 1px solid rgba(0, 0, 0, 0.1); 
                border-radius: 10px; 
                overflow: hidden; 
                background: url('{{ asset('images/g.jpg') }}') no-repeat center center; 
                background-size: cover; 
                padding: 15px;">
                
                <table class="table" style="
                    width: 100%; 
                    border-collapse: collapse; 
                    text-align: left;">
                    <thead style="
                        background: rgba(45, 199, 226, 0.8); 
                        color: #fff; 
                        font-weight: bold;">
                        <tr>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">#</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Name</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Address</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Telephone</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Gender</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Index</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $item)
                        <tr style="background: rgba(255, 255, 255, 0.6);">
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">{{ $loop->iteration }}</td>
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">{{ $item->name }}</td>
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">{{ $item->address }}</td>
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">{{ $item->mobile }}</td>
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">{{ $item->gender }}</td>
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">{{ $item->index }}</td>
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">
                                <img src="{{ asset($item->photo) }}" width="50" height="50" style="border-radius: 50%; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);" />
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
