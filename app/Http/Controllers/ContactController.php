<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = contact::get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validator=  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|regex:/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        //Session::flash('success', 'Thank you for contacting us!');
        //return redirect()->route('admin.contact.index');
        return back()->with('success', 'Thank you for contacting us!');
        //if ($validator->fails()) {
        //    return back()->withErrors($validator)->withInput();
        //}
        //return back()->with('success', 'Thank you for contacting us!');

    }

    public function destroy(contact $contact, $id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();

        return response()->json([
            'status' => "success",
            'message' => 'Contact deleted successfully.',
        ]);
    }
}
