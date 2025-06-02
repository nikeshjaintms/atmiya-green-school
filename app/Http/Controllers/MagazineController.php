<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazines = Magazine::get();
        return view('admin.magazine.index', compact('magazines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.magazine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|unique:magazines,name',
            'published_at'=>'nullable|date',
            'magazine_pdf' => 'required',
            'magazine_pdf.*' => 'nullable|file|mimes:pdf',

        ]);
        $files = [];

        if ($request->hasFile('magazine_pdf')) {
            foreach ($request->file('magazine_pdf') as $file) {
                $originalName = $file->getClientOriginalName();
                $nameWithoutSpaces = strtolower(str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME)));
                $fileName = $nameWithoutSpaces . '_' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/uploads', $fileName);
                $files[] = Storage::url($path);
            }
        }


        Magazine::create([
            'name' => $request->name,
            'published_at'=>$request->published_at,
            'magazine_pdf' => json_encode($files),

        ]);
        Session::flash('success', 'Magazine created successfully.');
        return redirect()->route('admin.magazine.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Magazine $magazine, $id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Magazine $magazine, $id)
    {
        $data = Magazine::find($id);
        return view('admin.magazine.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */

    //public function update(Request $request, Magazine $magazine,$id)
    //{
    //    $request->validate([
    //        'name' => 'required|unique:magazines,name,' .$id .',id',
    //        'published_at'=>'required|date',
    //        'magazine_pdf.*' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
    //    ]);
    //
    //    $data = Magazine::findOrFail($id);
    //
    //    $newFiles = [];
    //    if ($request->hasFile('magazine_pdf')) {
    //        foreach ($request->file('magazine_pdf') as $file) {
    //            $originalName = $file->getClientOriginalName();
    //            $nameWithoutSpaces = strtolower(str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME)));
    //            $fileName = $nameWithoutSpaces . '_' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
    //
    //            $path = $file->storeAs('public/uploads', $fileName);
    //            $newFiles[] = Storage::url($path);
    //        }
    //    }
    //
    //    // Update database with only new files
    //    $data->update([
    //        'name' => $request->name,
    //        'published_at'=>$request->published_at,
    //        'magazine_pdf' => json_encode($newFiles),
    //    ]);
    //
    //    Session::flash('success', 'Magazine updated successfully.');
    //    return redirect()->route('admin.magazine.index');
    //}
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:magazines,name,' . $id . ',id',
            'published_at' => 'required|date',
            'magazine_pdf' => 'required',
            'magazine_pdf.*' => 'required|file|mimes:pdf',
        ]);

        $magazine = Magazine::findOrFail($id);

        // File upload logic (inline function)
        $uploadFiles = function ($files, $folder = 'public/uploads') {
            $uploaded = [];

            foreach ($files as $file) {
                $originalName = $file->getClientOriginalName();
                $nameWithoutSpaces = strtolower(str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME)));
                $fileName = $nameWithoutSpaces . '_' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();

                $path = $file->storeAs($folder, $fileName);
                $uploaded[] = Storage::url($path);
            }

            return $uploaded;
        };

        $newFiles = [];
        if ($request->hasFile('magazine_pdf')) {
            $newFiles = $uploadFiles($request->file('magazine_pdf'));
        }

        // Prepare update data
        $updateData = [
            'name' => $request->name,
            'published_at' => $request->published_at,
        ];

        if (!empty($newFiles)) {
            $updateData['magazine_pdf'] = json_encode($newFiles);
        }

        $magazine->update($updateData);

        Session::flash('success', 'Magazine updated successfully.');
        return redirect()->route('admin.magazine.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Magazine $magazine, $id)
    {
        $magazines = Magazine::findOrFail($id);
        $magazines->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Magazine deleted successfully.',
        ]);
    }
}
