@extends('employees.layout')

@section('content')
<!-- Background Image -->
<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('/images/v.jpg') no-repeat center center fixed; background-size: cover; z-index: -1;"></div>

<!-- Main Content Wrapper -->
<div style="height: 100%; margin-top: 40px; display: flex; justify-content: center; align-items: center; font-family: Arial, sans-serif;">
    <div style="width: 90%; max-width: 1100px; background: rgba(255, 255, 255, 0.9); border-radius: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3); overflow: hidden; position: relative; z-index: 2; padding: 30px;">
        
        <!-- Header Section with Gradient Background -->
        <div style="background: linear-gradient(135deg, rgba(45, 199, 226, 0.9), rgba(40, 167, 69, 0.9)); padding: 20px; color: #fff; text-align: center; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-bottom: 20px;">
            Students Details
        </div>

        <!-- Home Button -->
        <div style="text-align: right; margin-bottom: 20px;">
            <a href="{{ url('/') }}" style="background-color: #28a745; color: white; padding: 10px 20px; font-size: 16px; text-decoration: none; border-radius: 5px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
                Home
            </a>
        </div>

        <!-- Employee Cards Section -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
            @foreach($employees as $employee)
                <div style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 15px; box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1); width: 250px; text-align: center; transition: transform 0.3s;">
                    <h2 style="font-size: 22px; color: #333; margin-bottom: 10px;">{{ $employee->name }}</h2>

                    @if(file_exists(public_path($employee->qr_code)))
                        <img 
                            src="{{ asset($employee->qr_code) }}" 
                            alt="QR குறியீடு" 
                            width="150" 
                            height="150" 
                            style="border-radius: 10px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);"
                        />
                    @else
                        <p style="margin-top: 20px; color: red;">QR குறியீடு கிடைக்கவில்லை</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Add some hover effect for cards -->
<style>
    .employee-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.15);
    }
</style>

@endsection
