@extends('employees.layout')

@section('content')
<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('/images/v.jpg') no-repeat center center fixed; background-size: cover; z-index: -1;">
</div>

<div style="height: 100%; display: flex; margin-top: 40px; justify-content: center; align-items: center; font-family: Arial, sans-serif;">
    <div style="width: 90%; max-width: 1100px; background: rgba(255, 255, 255, 0.8); border-radius: 20px; box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2); overflow: hidden; position: relative; z-index: 2;">
        
        <div style="background: linear-gradient(135deg, rgba(45, 199, 226, 0.9), rgba(40, 167, 69, 0.9)); padding: 20px; color: #fff; text-align: center; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            Student Records
        </div>

        <div style="padding: 30px; font-family: 'Roboto', sans-serif; font-size: 16px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Contact" style="background-color: #28a745; color: #fff; padding: 10px 15px; border-radius: 5px; text-decoration: none; font-weight: bold; transition: background-color 0.3s ease;">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>

                <a href="{{ route('employees.export') }}" class="btn btn-success btn-sm" title="Export Employees" style="background-color: #17a2b8; color: #fff; padding: 10px 15px; border-radius: 5px; text-decoration: none; font-weight: bold; transition: background-color 0.3s ease;">
                    <i class="fa fa-download" aria-hidden="true"></i> Export Records
                </a>

                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-sm" title="Go to Dashboard" style="background-color: #007bff; color: #fff; padding: 10px 15px; border-radius: 5px; text-decoration: none; font-weight: bold; transition: background-color 0.3s ease;">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                </a>

                <form action="{{ route('logout') }}" method="POST" style="display: inline-block;">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" style="padding: 10px 20px; font-weight: bold;">
                        Logout
                    </button>
                </form>
            </div>

            <div class="table-responsive" style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden; background: url('{{ asset('images/g.jpg') }}') no-repeat center center; background-size: cover; padding: 15px;">
                <table class="table" style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead style="background: rgba(45, 199, 226, 0.8); color: #fff; font-weight: bold;">
                        <tr>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">#</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Name</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Address</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Telephone</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Gender</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Index</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Photo</th>
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">QR Code</th> <!-- QR Code column -->
                            <th style="padding: 10px; border: 1px solid rgba(255, 255, 255, 0.2);">Actions</th> <!-- Actions column for Edit/Delete -->
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
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">
                                <!-- Display QR Code -->
                                @if(file_exists(public_path($item->qr_code)))
                                    <img 
                                        src="{{ asset($item->qr_code) }}" 
                                        alt="QR Code" 
                                        width="60" 
                                        height="60" 
                                        style="border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);" 
                                    />
                                @else
                                    <p>QR Code Not Found</p>
                                @endif
                            </td>
                            <td style="padding: 10px; border: 1px solid rgba(0, 0, 0, 0.1);">
                                <!-- Action buttons for Edit and Delete -->
                                <a href="{{ route('employee.edit', $item->id) }}" class="btn btn-warning btn-sm" title="Edit" style="padding: 5px 10px; color: #fff; font-weight: bold; margin-right: 10px;">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                </a>
                                <form action="{{ route('employee.destroy', $item->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="padding: 5px 10px; font-weight: bold;">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
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
