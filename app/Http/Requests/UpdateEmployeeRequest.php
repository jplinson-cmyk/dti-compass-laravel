<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $employee = $this->route('employee'); 

        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'employee_id' => [
                'required',
                Rule::unique('employees')->ignore($employee->id),
            ],
            'email' => 'required|email:rfc,dns',
            'gender' => 'required|in:male,female',
            'employment_status_id' => 'required|exists:employment_status,id',
            'functional_group_id' => 'required|exists:functional_groups,id',
            'bureau_office_id' => 'required|exists:bureaus_offices,id',
            'division_id' => 'exists:divisions,id',
            'immediate_supervisor' => 'required',
            'position_id' => 'required|exists:positions,id',
            'job_level_id' => 'required|exists:job_levels,id',
            'last_review_at' => 'required|date',
        ];
    }
    
    
}
