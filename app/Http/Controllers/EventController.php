<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::get();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //public function store(Request $request)
    //{
    //    $request->validate([
    //        'title' => 'nullable|string|max:255',
    //        'description' => 'nullable|string',
    //        'event_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //        'event_date' => 'nullable|date',
    //    ]);
    //    $images = [];
    //    if ($request->hasFile('event_images')) {
    //        foreach ($request->file('event_images') as $file) {
    //            $fileName = strtolower(str_replace(' ', '_', $request->title)) . '_' . time() . '_' . Str::random(8) .
    //                '.' . $file->getClientOriginalExtension();
    //
    //            $path = $file->storeAs('public/uploads', $fileName);
    //            $images[] = Storage::url($path);
    //        }
    //    }
    //
    //    Event::create([
    //        'title' => $request->title,
    //        'description' => $request->description,
    //        'event_images' => json_encode($images),
    //        'event_date' => $request->event_date,
    //    ]);
    //    Session::flash('success', 'Event created successfully.');
    //    return redirect()->route('admin.event.index');
    //    //
    //}
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'event_images'=> 'required',
            'event_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'event_date' => 'nullable|date',
        ]);

        $images = [];
        if ($request->hasFile('event_images')) {
            $titleSlug = $request->title ? strtolower(str_replace(' ', '_', $request->title)) : 'event';

            foreach ($request->file('event_images') as $file) {
                $fileName = $titleSlug . '_' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/uploads', $fileName);
                $images[] = Storage::url($path); // e.g., /storage/uploads/filename.jpg
            }
        }

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'event_images' => json_encode($images),
            'event_date' => $request->event_date,
        ]);

        Session::flash('success', 'Event created successfully.');
        return redirect()->route('admin.event.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event, $id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event, $id)
    {
        $data = Event::find($id);
        return view('admin.event.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'event_images'=> 'required',
            'event_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'event_date' => 'required|date',
        ]);

        $data = Event::findOrFail($id);

        $updateData = [
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $request->event_date,
        ];

        if ($request->hasFile('event_images')) {
            $images = [];
            foreach ($request->file('event_images') as $file) {
                $fileName = strtolower(str_replace(' ', '_', $request->title)) . '_' . time() . '_' . Str::random(8) .
                    '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/uploads', $fileName);
                $images[] = Storage::url($path);
            }
            // Only add event_images if files were uploaded
            $updateData['event_images'] = json_encode($images);
        }

        $data->update($updateData);

        Session::flash('success', 'Event updated successfully.');
        return redirect()->route('admin.event.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Event deleted successfully.',
        ]);
    }
}
