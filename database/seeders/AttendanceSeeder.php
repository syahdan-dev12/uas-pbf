<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{
    public function run(): void
    {
        Attendance::insert([

            [
                'employee_id' => 1,
                'attendance_date' => '2026-06-27',
                'check_in' => '08:00:00',
                'check_out' => '17:00:00',
                'status' => 'Present',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'employee_id' => 2,
                'attendance_date' => '2026-06-27',
                'check_in' => '08:15:00',
                'check_out' => '17:10:00',
                'status' => 'Late',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'employee_id' => 3,
                'attendance_date' => '2026-06-27',
                'check_in' => '08:00:00',
                'check_out' => '17:00:00',
                'status' => 'Present',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}