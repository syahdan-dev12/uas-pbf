<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'phone' => '081234567890',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

       $this->call([
    DepartmentSeeder::class,
    PositionSeeder::class,
    EmployeeSeeder::class,
    AttendanceSeeder::class,
    LeaveRequestSeeder::class,
    PayrollSeeder::class,
]);
        
    }
}