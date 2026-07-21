<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeesExport implements FromCollection, WithHeadings
{
    /**
     * Retrieve all employees for export.
     */
    public function collection()
    {
        return Employee::select('employee_id', 'firstname', 'lastname', 'email', 'position_id')->get();
    }

    /**
     * Define column headings for the exported file.
     */
    public function headings(): array
    {
        return ["Employee ID", "First Name", "Last Name", "Email", "Position ID"];
    }
}
