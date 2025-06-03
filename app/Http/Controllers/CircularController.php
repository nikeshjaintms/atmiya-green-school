<?php

namespace App\Http\Controllers;

use App\Models\Circular;
use App\Models\Event;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CircularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $circulars = Circular::get();
        return view('admin.circular.index', compact('circulars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.circular.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'circular_file'=>'required',
            'circular_file.*' => 'required|file|mimes:pdf,doc,docx',
            'date' => 'required|date',
            'title' => 'required|string|unique:circulars,title',

        ]);
        $files = [];

        if ($request->hasFile('circular_file')) {
            foreach ($request->file('circular_file') as $file) {
                $originalName = $file->getClientOriginalName();
                $nameWithoutSpaces = strtolower(str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME)));
                $fileName = $nameWithoutSpaces . '_' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();

                $path = $file->storeAs('public/uploads', $fileName);
                $files[] = Storage::url($path);
            }
        }


        Circular::create([

            'circular_file' => json_encode($files),
            'date' => $request->date,
            'title' => $request->title,

        ]);
        Session::flash('success', 'Circular created successfully.');
        return redirect()->route('admin.circular.index');
        //
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
    public function edit(Circular $circular, $id)
    {
        $data = Circular::find($id);
        return view('admin.circular.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */



    public function update(Request $request, Circular $circular, $id)
    {
        //dd($request->all());
        $request->validate([
            'circular_file.*' => 'nullable|file|mimes:pdf,doc,docx',
            'date' => 'nullable|date',
            'title' => 'nullable|string|unique:circulars,title,' .$id. ',id',
        ]);

        $data = Circular::findOrFail($id);

        $newFiles = [];
        if ($request->hasFile('circular_file')) {
            if ($data->circular_file) {
                $oldFiles = json_decode($data->circular_file, true);
                foreach ($oldFiles as $file) {
                    $filePath = str_replace('/storage/', 'public/', $file);
                    Storage::delete($filePath);
                }
            }
            foreach ($request->file('circular_file') as $file) {
                $originalName = $file->getClientOriginalName();
                $nameWithoutSpaces = strtolower(str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME)));
                $fileName = $nameWithoutSpaces . '_' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();

                $path = $file->storeAs('public/uploads', $fileName);
                $newFiles[] = Storage::url($path);
            }
            $data->circular_file = json_encode($newFiles);
        }

        $data->date = $request->date;
        $data->title = $request->title;

        $data->save();

        Session::flash('success', 'Circular updated successfully.');
        return redirect()->route('admin.circular.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Circular $circular, $id)
    {
        $circulars = Circular::findOrFail($id);
        $circulars->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Circular deleted successfully.',
        ]);
    }
}
