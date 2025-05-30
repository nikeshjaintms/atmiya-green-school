<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnquiryController extends Controller
{

    public function index()
    {
        $enquiry = Enquiry::get();
        return view('admin.enquiry.index', compact('enquiry'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|regex:/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'message' => 'required|string|max:1000',
        ]);

        Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        //Session::flash('success', 'Thank you for Enquiry us!');
        //return redirect()->route('admin.enquiry.index');
        return back()->with('success', 'Thank you for Enquiry us!');
    }

    public function destroy(Enquiry $enquiry , $id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Enquiry deleted successfully.',
        ]);
    }
}
