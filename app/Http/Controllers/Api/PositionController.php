<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Position;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::with('department')
            ->latest()
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Position list retrieved successfully.',
            'data' => $positions
        ]);
    }
}