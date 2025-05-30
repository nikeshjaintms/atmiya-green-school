<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityCategory;
use App\Models\Event;
use App\Models\Faculty;
use App\Models\Magazine;
use App\Models\Testimonials;
use Carbon\Carbon;


class FrontendController extends Controller
{
    public function index()
    {
        //$activities = Activity::get();
        //$club = Activity::with('category')
        //    ->whereHas('category', function ($query) {
        //        $query->where('activity_category_name', 'Club Activity');
        //    })
        //    ->get();

        $activities = Activity::where(function ($query) {
            $query->whereNull('activity_date')
            ->orWhere('activity_date', '>=', Carbon::today());
        })
            ->get();
        $club = Activity::with('category')
            ->whereHas('category', function ($query) {
                $query->where('activity_category_name', 'Club Activity');
            })
            ->where(function ($query) {
                $query->whereNull('activity_date')
                ->orWhere('activity_date', '>=', Carbon::today());
            })
            ->get();

        return view('index', compact('activities','club'));
    }

    public function about()
    {
        $testimonials= Testimonials::get();
        return view('about',compact('testimonials'));
    }

    public function contact()
    {
        return view('contact');

    }

    public function academic()
    {
        return view('academic');
    }

    public function gallery()
    {
        $activities = Activity::with('category')->get();
        return view('gallery',compact('activities'));
    }

    public function documentsInformation()
    {
        return view('documents-information');
    }

    public function event()
    {
        $events = Event::get();
        return view('event', compact('events'));
    }

    public function magazine()
    {
        $magazines = Magazine::get();
        return view('magazine',compact('magazines'));
    }
    public function download($id, $fileIndex)
    {
        $magazine = Magazine::findOrFail($id);
        $files = json_decode($magazine->magazine_pdf, true);

        if (!isset($files[$fileIndex])) {
            return redirect()->back()->with('error', 'File not found.');
        }

        $relativePath = ltrim(parse_url($files[$fileIndex], PHP_URL_PATH), '/storage/');

        $storagePath = storage_path('app/public/' . $relativePath);

        if (!file_exists($storagePath)) {
            return redirect()->back()->with('error', 'File not found on disk.');
        }

        return response()->file($storagePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($storagePath) . '"'
        ]);
    }


    public function staff()
    {
        $faculties = Faculty::join('departments', 'faculties.department_id', '=', 'departments.id')->select('faculties.*', 'departments.name as department')->get();
        return view('our-staff',compact('faculties'));
    }

    public function staff_backup()
    {
        return view('staff_backup');
    }

    public function teachingStaff()
    {
        return view('teachingstaff');
    }

    public function generalInformation()
    {
        return view('generalinformationofschool');
    }

    public function schoolinfrastructure(){
        return view('schoolinfrastructure');
    }

    public function admin(){
        return view('admin');
    }
}
