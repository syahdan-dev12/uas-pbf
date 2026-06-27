<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * GET /api/employees
     */
    public function index(Request $request)
    {
        $query = Employee::with(['department', 'position']);

        // Search
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('employee_code', 'like', '%' . $request->search . '%')
                  ->orWhere('full_name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        // Filter Status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $employees = $query
            ->latest()
            ->paginate($request->get('per_page', 10));

        return EmployeeResource::collection($employees);
    }

    /**
     * POST /api/employees
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Employee created successfully.',
            'data' => new EmployeeResource($employee->load(['department', 'position']))
        ], 201);
    }

    /**
     * GET /api/employees/{employee}
     */
    public function show(Employee $employee)
    {
        $employee->load(['department', 'position']);

        return new EmployeeResource($employee);
    }

    /**
     * PUT /api/employees/{employee}
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Employee updated successfully.',
            'data' => new EmployeeResource($employee->load(['department', 'position']))
        ]);
    }

    /**
     * DELETE /api/employees/{employee}
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json([
            'success' => true,
            'message' => 'Employee deleted successfully.'
        ]);
    }
}