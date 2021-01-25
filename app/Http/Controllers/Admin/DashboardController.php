<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Event;
use App\Attendance;
use App\Collection;

class DashboardController extends Controller
{
    public function index(){
        $services = Service::all();
        $events = Event::where('date', '=', date('Y-m-d'))->get();
        $todayEvents = Event::where('date', '=', date('Y-m-d'))->count();
        $upComingEvents = Event::where('date', '>', date('Y-m-d'))->count();
        
        //services attendance Query
        $totalAttendance = Attendance::where('date', '=', date('Y-m-d'))->count();
        $services1 = Attendance::distinct()->get();

        // Collections
        $yearCollections = Collection::whereYear('date', '=', date('Y'))->sum('amount');
        $todayCollections = Collection::where('date', '=', date('Y-m-d'))->sum('amount');

        return view('admin.dashboard', 
            compact('services', 'events', 'todayEvents', 'upComingEvents', 'totalAttendance',
             'yearCollections', 'todayCollections'));
    }

    public function calendar()
    {
        return view('admin.calendar');
    }
}
