<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Event;
use App\Attendance;

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

        return view('admin.dashboard', 
            compact('services', 'events', 'todayEvents', 'upComingEvents', 'totalAttendance'));
    }

    public function calendar()
    {
        return view('admin.calendar');
    }
}
