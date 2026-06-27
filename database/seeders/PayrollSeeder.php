<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payroll;

class PayrollSeeder extends Seeder
{
    public function run(): void
    {
        Payroll::insert([
            [
                'employee_id' => 1,
                'basic_salary' => 7000000,
                'allowance' => 1000000,
                'deduction' => 500000,
                'net_salary' => 7500000,
                'payroll_date' => '2026-06-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 2,
                'basic_salary' => 6500000,
                'allowance' => 750000,
                'deduction' => 250000,
                'net_salary' => 7000000,
                'payroll_date' => '2026-06-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}