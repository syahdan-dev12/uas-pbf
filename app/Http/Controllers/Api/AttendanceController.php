<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * GET /api/attendance
     */
    public function index()
    {
        $attendance = Attendance::with([
            'employee.department',
            'employee.position'
        ])
        ->latest()
        ->get();

        return response()->json([
            'success' => true,
            'message' => 'Attendance retrieved successfully.',
            'data' => $attendance
        ]);
    }
}