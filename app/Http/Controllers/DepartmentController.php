<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::get();
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departments,name',
        ]);

        Department::create([
            'name' => $request->name,
        ]);

        Session::flash('success', 'Department created successfully.');
        return redirect()->route('admin.department.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department, $id)
    {
        $data = Department::findOrFail($id);
        return view('admin.department.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department, $id)
    {
        $request->validate([
            'name' => 'required|unique:departments,name,' . $id,
        ]);

        $department = Department::findOrFail($id);
        $department->update([
            'name' => $request->name,
        ]);

        Session::flash('success', 'Department updated successfully.');
        return redirect()->route('admin.department.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department, $id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

       return response()->json([
            'status' => "success",
            'message' => 'Department deleted successfully.',
        ]);
    }
}
