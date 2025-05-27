<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::join('departments', 'faculties.department_id', '=', 'departments.id')->select('faculties.*', 'departments.name as department')->get();
        return view('admin.faculty.index', compact('faculties'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::get();
        return view('admin.faculty.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'name' => 'required|string|max:255',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);
        $filename = null;
//  dd($request->hasfile('profile'));
        if($request->hasfile('profile')){
            $file = $request->file('profile');
            $cleanname = time() . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $filename = 'uploads/faculty' . '/' . $cleanname;
            $file->move(public_path('uploads/faculty'), $cleanname);
        }

        Faculty::create([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'profile' => $filename,
            'designation' => $request->designation,
            'description' => $request->description,
        ]);

        Session::flash('success', 'Faculty created successfully.');
        return redirect()->route('admin.faculty.index');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty,$id)
    {
        $faculty = Faculty::join('departments', 'faculties.department_id', '=', 'departments.id')->select('faculties.*', 'departments.name as department')->where('faculties.id', '=', $id)->first();

        return view('admin.faculty.show', compact('faculty'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faculty $faculty, $id)
    {
        $departments = Department::get();
        $data = Faculty::findOrFail($id);
        return view('admin.faculty.edit', compact('data', 'departments'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faculty $faculty, $id)
    {

        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'name' => 'required|string|max:255',
            'profile' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);
        $faculty = Faculty::findOrFail($id);

        $filename = null;
        if($request->hasfile('profile')){
            $file = $request->file('profile');
            $cleanname = time() . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $filename = 'uploads/faculty' . '/' . $cleanname;
            $file->move(public_path('uploads/faculty'), $cleanname);
        }
        else {
            $filename = $faculty->profile; // Keep the old profile if no new file is uploaded
        }


        $faculty->update([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'profile' => $filename,
            'designation' => $request->designation,
            'description' => $request->description,
        ]);

        Session::flash('success', 'Faculty updated successfully.');
        return redirect()->route('admin.faculty.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty, $id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();

        Session::flash('success', 'Faculty deleted successfully.');
        return response()->json([
            'status' => 'success',
            'message' => 'Faculty deleted successfully.'
        ]);
    }
}
