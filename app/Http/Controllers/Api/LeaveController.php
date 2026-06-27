<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LeaveRequest;

class LeaveController extends Controller
{
    public function index()
    {
        $leave = LeaveRequest::with('employee')
            ->latest()
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Leave list retrieved successfully.',
            'data' => $leave
        ]);
    }
}