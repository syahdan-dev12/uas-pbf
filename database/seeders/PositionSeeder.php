<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        Position::insert([
            [
                'department_id' => 1,
                'name' => 'Software Engineer',
                'description' => 'Software Development',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_id' => 1,
                'name' => 'Backend Developer',
                'description' => 'Backend API',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_id' => 1,
                'name' => 'Frontend Developer',
                'description' => 'Frontend Web',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}