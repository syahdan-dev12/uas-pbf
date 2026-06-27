<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'employee_code'=>$this->employee_code,

            'department'=>[
                'id'=>$this->department?->id,
                'name'=>$this->department?->name,
            ],

            'position'=>[
                'id'=>$this->position?->id,
                'name'=>$this->position?->name,
            ],

            'full_name'=>$this->full_name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'gender'=>$this->gender,
            'birth_date'=>$this->birth_date,
            'address'=>$this->address,
            'join_date'=>$this->join_date,
            'salary'=>$this->salary,
            'status'=>$this->status,
            'created_at'=>$this->created_at,
        ];
    }
}