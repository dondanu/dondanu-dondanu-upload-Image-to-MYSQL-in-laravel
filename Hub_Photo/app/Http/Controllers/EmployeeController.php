<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Endroid\QrCode\QrCode;
use Illuminate\Support\Facades\Log;
use Endroid\QrCode\Writer\PngWriter;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExport;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all employees
        $employees = Employee::all();
        // Return the view with employees data
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        // Save the photo
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;

        // QR code generation and error handling
        try {
            // Check if the name is empty, if so, QR code cannot be generated
            if (empty($requestData['name'])) {
                Log::error('Employee name is empty, cannot generate QR code.');
                return back()->withErrors('Employee name is required.');
            }

            // Prepare the data as a formatted string
            $qrData = "Name: " . $requestData['name'] . "\n" .
                      "Address: " . $requestData['address'] . "\n" .
                      "TP No: " . $requestData['mobile'] . "\n" .
                      "Gender: " . $requestData['gender'] . "\n" .
                      "Index: " . $requestData['index'];

            // Generate QR code for the employee's formatted data
            $qrCode = new QrCode($qrData);  // Employee data for QR code
            $writer = new PngWriter();
            
            // Use write() instead of writeString()
            $qrCodeImage = $writer->write($qrCode);  // This returns an image string
            
            // Log the success of QR code generation
            Log::info('QR Code generated successfully.');

            // Create the directory for QR code if it doesn't exist
            $qrCodeDir = public_path('images/qr_codes');
            if (!file_exists($qrCodeDir)) {
                mkdir($qrCodeDir, 0777, true); // Create directory
            }

            // Path to store the QR code image on the server (PNG format)
            $qrCodeFileName = 'images/qr_codes/' . time() . '_qr.png';
            file_put_contents(public_path($qrCodeFileName), $qrCodeImage->getString());  // Save QR code as PNG
            
            // Save the QR code path in the database
            $requestData['qr_code'] = $qrCodeFileName;
        } catch (\Exception $e) {
            // Log the error and show an error message
            Log::error('Error creating QR code: ' . $e->getMessage());
            return back()->withErrors('Unable to generate QR code. Please try again.');
        }

        // Store employee data in the database
        Employee::create($requestData);

        // Redirect to employee index page with flash message
        return redirect('employee')->with(['flash_message' => 'புதிய ஊழியர் சேர்க்கப்பட்டது!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id); // Find the employee
        return view('employees.edit', compact('employee')); // Return the edit view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $requestData = $request->all();

        // Check for photo upload and save it
        if ($request->hasFile('photo')) {
            $fileName = time() . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $fileName, 'public');
            $requestData["photo"] = '/storage/' . $path;
        }

        // Update the employee data
        $employee->update($requestData);

        // Return to the employee index with a success message
        return redirect('employee')->with(['flash_message' => 'புதிய ஊழியர் திருத்தப்பட்டது!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        // Delete the employee's photo and QR code if they exist
        if (file_exists(public_path($employee->photo))) {
            unlink(public_path($employee->photo));
        }

        if (file_exists(public_path($employee->qr_code))) {
            unlink(public_path($employee->qr_code));
        }

        // Delete the employee record
        $employee->delete();

        // Return to the employee index with a success message
        return redirect('employee')->with(['flash_message' => 'புதிய ஊழியர் நீக்கப்பட்டது!']);
    }
    
    public function seeAllEmployees()
    {
        
        $employees = Employee::all();

        
        return view('employees.see', compact('employees')); // employees மாறியை பார்வைக்கு அனுப்புக
    }

    public function export()
    {
        try {
            return Excel::download(new EmployeeExport, 'Students Records.xlsx');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
