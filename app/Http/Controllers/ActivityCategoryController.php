<?php

namespace App\Http\Controllers;


use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ActivityCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activityCategories = ActivityCategory::get();
        return view('admin.activityCategory.index', compact('activityCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.activityCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'activity_category_name' => 'required|unique:activity_categories,activity_category_name',
        ]);

        ActivityCategory::create([
            'activity_category_name' => $request->activity_category_name,
        ]);

        Session::flash('success', 'ActivityCategory created successfully.');
        return redirect()->route('admin.activityCategory.index');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityCategory $activityCategory, $id)
    {
        $data = ActivityCategory::findOrFail($id);
        return view('admin.activityCategory.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ActivityCategory $activityCategory, $id)
    {
        $request->validate([
            'activity_category_name' => 'required|unique:activity_categories,activity_category_name,' . $id . ',id',
        ]);

        $activityCategories  = ActivityCategory::findOrFail($id);
        $activityCategories->update([
          'activity_category_name' => $request->activity_category_name,
        ]);

        Session::flash('success', 'Activity Category updated successfully.');
        return redirect()->route('admin.activityCategory.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityCategory $activityCategory, $id)
    {
        $activityCategories  = ActivityCategory::findOrFail($id);
        $activityCategories->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Activity Category deleted successfully.',
        ]);
    }
}
