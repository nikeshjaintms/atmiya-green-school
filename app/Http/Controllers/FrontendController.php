<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityCategory;
use App\Models\Circular;
use App\Models\Event;
use App\Models\Faculty;
use App\Models\Magazine;
use App\Models\Testimonials;
use Carbon\Carbon;
use Illuminate\Http\Request;


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
        $now = Carbon::now();

        $upcomingEvents = Event::where('event_date', '>', $now)
            ->orderBy('event_date', 'asc')
            ->get();

        $pastEvents = Event::where('event_date', '<', $now)
            ->orderBy('event_date', 'desc')
            ->get();

        return view('event', compact('events','upcomingEvents','pastEvents'));
    }

    //public function magazine()
    //{
    //    $magazines = Magazine::get();
    //    return view('magazine',compact('magazines'));
    //}

    public function searchMagazine(Request $request)
    {
        $query = Magazine::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        $currentYear = Carbon::now()->year;

        $magazines = $query->whereYear('published_at', $currentYear)->get();
        //$magazines = $query->orderBy('created_at', 'desc')->get();
        return view('magazine', compact('magazines'));
    }


    public function magazine()
    {
        $currentYear = Carbon::now()->year;

        $magazines = Magazine::whereYear('published_at', $currentYear)->get();

        return view('magazine', compact('magazines'));
    }

    public function circular()
    {
        $circulars = Circular::orderBy('date', 'desc')->get();
        return view('circular', compact('circulars'));
    }

    public function circularDownload($id, $fileIndex)
    {
        $circular = Circular::findOrFail($id);
        $files = json_decode($circular->circular_file, true);

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
