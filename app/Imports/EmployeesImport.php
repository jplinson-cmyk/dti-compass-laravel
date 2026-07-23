<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class EmployeesImport implements
    ToModel,
    WithHeadingRow,
    WithValidation,
    SkipsEmptyRows
{
    use Importable;

    public function model(array $row)
    {
        return new Employee([
            'employee_id' => $row['employee_id'],
            'firstname'   => $row['first_name'],
            'lastname'    => $row['last_name'],
            'email'       => $row['email'],
            'position_id' => $row['position_id'],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.employee_id' => [
                'required',
                Rule::unique('employees', 'employee_id'),
            ],
            '*.first_name' => [
                'required',
                'string',
                'max:255',
            ],
            '*.last_name' => [
                'required',
                'string',
                'max:255',
            ],
            '*.email' => [
                'required',
                'email',
                Rule::unique('employees', 'email'),
            ],
            '*.position_id' => [
                'required',
                'integer',
                'exists:positions,id',
            ],
        ];
    }

    public function customValidationMessages(): array
    {
        return [
            '*.employee_id.required' => 'Employee ID is required.',
            '*.employee_id.unique' => 'The employee ID already exists.',
            '*.first_name.required' => 'First name is required.',
            '*.last_name.required' => 'Last name is required.',
            '*.email.required' => 'Email is required.',
            '*.email.email' => 'The email address is invalid.',
            '*.email.unique' => 'The email address already exists.',
            '*.position_id.required' => 'Position ID is required.',
            '*.position_id.exists' => 'The selected Position ID does not exist.',
        ];
    }
}