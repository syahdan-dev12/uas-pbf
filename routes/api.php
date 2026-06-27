<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\LeaveController;
use App\Http\Controllers\Api\PayrollController;
use App\Http\Controllers\Api\EmployeeController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/profile', [AuthController::class, 'profile']);
    Route::put('/profile', [AuthController::class, 'updateProfile']);

    // Department
    Route::get('/departments', [DepartmentController::class, 'index']);
    Route::post('/departments', [DepartmentController::class, 'store']);

    // Position
    Route::get('/positions', [PositionController::class, 'index']);

    // Attendance
    Route::get('/attendance', [AttendanceController::class, 'index']);

    // Leave
    Route::get('/leave', [LeaveController::class, 'index']);

    // Payroll
    Route::get('/payroll', [PayrollController::class, 'index']);

    Route::apiResource('employees', EmployeeController::class);
});