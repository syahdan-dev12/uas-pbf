<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeaveRequest;

class LeaveRequestSeeder extends Seeder
{
    public function run(): void
    {
        LeaveRequest::insert([
            [
                'employee_id'=>1,
                'leave_type'=>'Annual Leave',
                'start_date'=>'2026-07-01',
                'end_date'=>'2026-07-03',
                'reason'=>'Family Vacation',
                'status'=>'Approved',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'employee_id'=>2,
                'leave_type'=>'Sick Leave',
                'start_date'=>'2026-07-05',
                'end_date'=>'2026-07-06',
                'reason'=>'Fever',
                'status'=>'Pending',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        ]);
    }
}