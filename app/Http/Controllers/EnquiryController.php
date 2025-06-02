<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryFormAdminMail;
use App\Mail\EnquiryFormResponseMail;
use App\Models\Contact;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $validator=  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|regex:/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'message' => 'required|string|max:1000',
        ]);

       $enquiry= Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

        ]);

        //Mail::to('techomaxcontactus@gmail.com')->send(new EnquiryFormAdminMail($enquiry));
        //Mail::to('techomaxcontactus@gmail.com')->send(new EnquiryFormAdminMail($enquiry));
        Mail::to('nikeshjaintms@gmail.com')->send(new EnquiryFormAdminMail($enquiry));
        return back()->with('success', 'Thank you for Enquiry us!');
    }
    public function replyForm($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        return view('admin.enquiry.reply', compact('enquiry'));
    }

    public function respondToEnquiry(Request $request, $id)
    {
        $request->validate([
            'response_message' => 'required|string|max:1000',
        ]);

        $enquiry = Enquiry::findOrFail($id);
        $enquiry->response_message = $request->response_message;
        $enquiry->save();

        // Send custom response to user
        $details = [
            'name' => $enquiry->name,
            'email' => $enquiry->email,
            'message' => $enquiry->response_message,
        ];

        Mail::to($enquiry->email)->send(new EnquiryFormResponseMail($details));

        Session::flash('success', 'Response sent successfully.');
        return redirect()->route('admin.enquiry.index');

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
