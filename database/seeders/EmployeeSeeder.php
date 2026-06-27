<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::insert([

            [
                'employee_code' => 'EMP001',
                'department_id' => 1,
                'position_id' => 1,
                'full_name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '081111111111',
                'gender' => 'Male',
                'birth_date' => '1999-01-01',
                'address' => 'Bandung',
                'join_date' => now(),
                'salary' => 7000000,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'employee_code' => 'EMP002',
                'department_id' => 1,
                'position_id' => 2,
                'full_name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '082222222222',
                'gender' => 'Female',
                'birth_date' => '2000-02-02',
                'address' => 'Jakarta',
                'join_date' => now(),
                'salary' => 6500000,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}