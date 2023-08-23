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
            'employee_id_number' => 'required|unique:employees,employee_id_number',
            'email' => 'required|email:rfc,dns',
            'gender' => 'required|in:male,female',
            'employment_status' => 'required',
            'functional_group' => 'required',
            'bureau_office' => 'required',
            'division' => 'required',
            'immediate_supervisor' => 'required',
            'position' => 'required',
            'job_level' => 'required',
            'last_review_at' => 'required|date',
        ];
    }
}
