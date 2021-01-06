<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Event;

class DashboardController extends Controller
{
    public function index(){
        $services = Service::all();
        $events = Event::where('date', '=', date('Y-m-d'))->get();
        $todayEvents = Event::where('date', '=', date('Y-m-d'))->count();
        $upComingEvents = Event::where('date', '>', date('Y-m-d'))->count();
    	return view('admin.dashboard', compact('services', 'events', 'todayEvents', 'upComingEvents'));
    }

    public function calendar()
    {
        return view('admin.calendar');
    }
}
