<?php

namespace App\Http\Controllers;

use App\Mail\ContactAutoReply;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            'email' => 'required|email|regex:/^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'message' => 'required|string|max:1000',

        ]);

      $contact=  Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        //Mail::to($validator['email'])->send(new ContactAutoReply($contact));
        Mail::to($validator['email'])->send(new ContactAutoReply($contact));
        return back()->with('success', 'Thank you for contacting us!');
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
