<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_code',
        'department_id',
        'position_id',
        'full_name',
        'email',
        'phone',
        'gender',
        'birth_date',
        'address',
        'join_date',
        'salary',
        'status'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'join_date' => 'date',
        'salary' => 'decimal:2',
        'status' => 'boolean',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}