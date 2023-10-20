<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'employee_id' => 'required|integer|unique:employees,employee_id',
            'email' => 'required|email:rfc,dns',
            'gender' => 'required',
            'employment_status_id' => 'required|exists:employment_status,id',
            'functional_group_id' => 'required|exists:functional_groups,id',
            'bureau_office_id' => 'required|exists:bureaus_offices,id',
            'division_id' => 'required|exists:divisions,id',
            'position_id' => 'required|exists:positions,id',
            'job_level_id' => 'required|exists:job_levels,id',
            'immediate_supervisor' => 'required',
            'last_review_at' => 'required|date',
        ];
    }
}
