<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * GET /api/departments
     */
    public function index(Request $request)
    {
        $query = Department::query();

        // Search
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter Status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $departments = $query
            ->latest()
            ->paginate($request->get('per_page', 10));

        return DepartmentResource::collection($departments);
    }

    /**
     * POST /api/departments
     */
    public function store(StoreDepartmentRequest $request)
    {
        $department = Department::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Department created successfully.',
            'data' => new DepartmentResource($department)
        ], 201);
    }

    /**
     * GET /api/departments/{department}
     */
    public function show(Department $department)
    {
        return new DepartmentResource($department);
    }

    /**
     * PUT /api/departments/{department}
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Department updated successfully.',
            'data' => new DepartmentResource($department)
        ]);
    }

    /**
     * DELETE /api/departments/{department}
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return response()->json([
            'success' => true,
            'message' => 'Department deleted successfully.'
        ]);
    }
}