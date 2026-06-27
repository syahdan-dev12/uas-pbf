<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function index()
    {
        $payroll = Payroll::with('employee')
            ->latest()
            ->get();

        return response()->json([
            'success'=>true,
            'message'=>'Payroll list retrieved successfully.',
            'data'=>$payroll
        ]);
    }
}