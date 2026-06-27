<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'employee_code' => [
                'required',
                Rule::unique('employees')->ignore($this->employee),
            ],
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
            'full_name' => 'required|string|max:100',
            'email' => [
                'required',
                'email',
                Rule::unique('employees')->ignore($this->employee),
            ],
            'phone' => 'nullable|string|max:20',
            'gender' => 'required|in:Male,Female',
            'birth_date' => 'nullable|date',
            'address' => 'nullable|string',
            'join_date' => 'required|date',
            'salary' => 'required|numeric|min:0',
            'status' => 'nullable|boolean',
        ];
    }
}