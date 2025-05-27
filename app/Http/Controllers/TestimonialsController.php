<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonials::get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'nullable|string|max:255',
        ]);
        $filename = null;
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $cleanname = time() . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $filename = 'uploads/testimonials/' . $cleanname;
            $file->move(public_path('uploads/testimonials'), $cleanname);
        }
        Testimonials::create([
            'name' => $request->name,
            'message' => $request->message,
            'profile_image' => $filename,
            'role' => $request->role,
            'status' => $request->status ?? 'inactive',
        ]);

        Session::flash('success', 'Testimonial created successfully.');
        return redirect()->route('admin.testimonial.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonials $testimonials, $id)
    {
        $data = Testimonials::find($id);
        return view('admin.testimonial.edit', compact('data'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonials $testimonials, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'nullable|string|max:255',
        ]);
         $data = Testimonials::find($id);
        $filename = null;
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $cleanname = time() . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $filename = 'uploads/testimonials/' . $cleanname;
            $file->move(public_path('uploads/testimonials'), $cleanname);
        }else {
            $filename = $data->profile_image;
        }
        $data->update([
            'name' => $request->name,
            'message' => $request->message,
            'profile_image' => $filename,
            'role' => $request->role,
            'status' => $request->status ?? 'inactive',
        ]);

        Session::flash('success', 'Testimonial updated successfully.');
        return redirect()->route('admin.testimonial.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonials $testimonials,$id)
    {
        $testimonials = Testimonials::find($id);
        if ($testimonials) {
            $testimonials->delete();
            Session::flash('success', 'Testimonial deleted successfully.');

            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial deleted successfully.'
            ]);

        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Testimonial not found.'
            ]);
        }

    }
}
