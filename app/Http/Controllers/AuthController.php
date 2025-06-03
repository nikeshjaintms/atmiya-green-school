<?php

namespace App\Http\Controllers;

use App\Models\Circular;
use App\Models\Enquiry;
use App\Models\Event;
use App\Models\Faculty;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {

            Session::flash('User Logged In');
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dash(){
        return view('admin.index');
    }

    public function dashboard()
    {
        $currentYear = Carbon::now()->year;
        $eventsYearlyCounts = Event::whereYear('created_at', $currentYear)->count();
        $enquiryYearlyCounts= Enquiry::whereYear('created_at', $currentYear)->count();
        $facultyYearlyCounts = Faculty::whereYear('created_at', $currentYear)->count();
        $circularYearlyCounts = Circular::whereYear('created_at', $currentYear)->count();
        $notifications = Auth::user()->unreadNotifications;
        $headerNotifications = auth()->user()->unreadNotifications;
        //return view('admin.index',compact('notifications','headerNotifications','enquiryYearlyCounts','eventsYearlyCounts','facultyYearlyCounts','circularYearlyCounts'));
        return response()->json([
            'notifications' => $notifications,
            'headerNotifications' => $headerNotifications,
            'enquiryYearlyCounts' => $enquiryYearlyCounts,
            'eventsYearlyCounts' => $eventsYearlyCounts,
            'facultyYearlyCounts' => $facultyYearlyCounts,
            'circularYearlyCounts' => $circularYearlyCounts,
        ]);
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('User Logged Out');
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
