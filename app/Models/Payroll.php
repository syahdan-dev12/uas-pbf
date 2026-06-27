<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'basic_salary',
        'allowance',
        'deduction',
        'net_salary',
        'pay_date',
    ];

    protected $casts = [
    'payroll_date' => 'date',
];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}