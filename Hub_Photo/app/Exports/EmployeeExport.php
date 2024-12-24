<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeeExport implements FromCollection
{
    public function collection()
    {
        return Employee::all(); // அனைத்து ஊழியர் தரவையும் ஏற்றுமதி செய்க
    }
}