<?php

namespace App\Http\Controllers;


use App\Models\Activity;
use App\Models\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = Activity::get();
        $activityCategoeryName = Activity::with('Category')->get();
        return view('admin.activity.index', compact('activity','activityCategoeryName'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activityCategories = ActivityCategory::all();
        return view('admin.activity.create', compact('activityCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'activity_category_id' => 'required',
            'activity_name' => 'required|unique:activities,activity_name',
            'activity_date' => 'nullable|date',
            'activity_image_video' => 'required|array',
            'activity_image_video.*' => 'file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi,wmv|max:51200',
        ]);

        $mediaFiles = [];

        if ($request->hasFile('activity_image_video')) {

            foreach ($request->file('activity_image_video') as $file) {
                $originalName = $file->getClientOriginalName();
                $fileName = pathinfo($originalName, PATHINFO_FILENAME);
                $fileName = strtolower(str_replace(' ', '_', $fileName));
                $fileName = $fileName . '_' . time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/activity_files', $fileName);
                $mediaFiles[] = Storage::url($path);
            }
        }

        Activity::create([
            'activity_category_id' => $request->activity_category_id,
            'activity_name' => $request->activity_name,
            'activity_date' => $request->activity_date,
            'activity_image_video' => json_encode($mediaFiles),
        ]);

        return redirect()->route('admin.activity.index')->with('success', 'Activity created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $data = Activity::findOrFail($id);
        $activityCategories = ActivityCategory::all();
        return view('admin.activity.edit', compact('data','activityCategories'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);

        $request->validate([
            'activity_category_id' => 'required',
            'activity_name' => 'required|unique:activities,activity_name,' . $id,
            'activity_date' => 'nullable|date',
            'activity_image_video' => 'nullable|array',
            'activity_image_video.*' => 'file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi,wmv|max:51200',
        ]);

        $mediaFiles = [];
        if ($request->hasFile('activity_image_video')) {
            if ($activity->activity_image_video) {
                $oldFiles = json_decode($activity->activity_image_video, true);
                foreach ($oldFiles as $file) {
                    $filePath = str_replace('/storage/', 'public/', $file);
                    Storage::delete($filePath);
                }
            }
            foreach ($request->file('activity_image_video') as $file) {
                $originalName = $file->getClientOriginalName();
                $fileName = pathinfo($originalName, PATHINFO_FILENAME);
                $fileName = strtolower(str_replace(' ', '_', $fileName));
                $fileName = $fileName . '_' . time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/activity_files', $fileName);
                $mediaFiles[] = Storage::url($path);
            }
            $activity->activity_image_video = json_encode($mediaFiles);
        }
        $activity->update([
            'activity_category_id' => $request->activity_category_id,
            'activity_name' => $request->activity_name,
            'activity_date' => $request->activity_date,
            //'activity_image_video' => json_encode($mediaFiles),
        ]);

        return redirect()->route('admin.activity.index')->with('success', 'Activity updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $activity  = Activity::findOrFail($id);
        $activity->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Activity deleted successfully.',
        ]);
    }
}
