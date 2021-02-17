<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Event;
use App\User;
use App\Member;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('Y-m-d');
        $events = Event::latest()->get();
        $totalEvents = Event::count();
        $todayEvents = Event::where('date', '=', date('Y-m-d'))->count();
        $noOfUpcoming  = Event::where('date', '>', $today)->count();
        $noOfArchieve  = Event::where('date', '<', $today)->count();
        return view('admin.event.index', compact('events', 'totalEvents', 'todayEvents', 'noOfArchieve', 'noOfUpcoming'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Member::latest()->get();
        return view('admin.event.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'date'=>'required',
            'time'=>'required',
            'detail'=>'required'
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->slug = $request->title;
        $event->created_by = $request->created_by;
        $event->location = $request->location;
        $event->assign_to = $request->assigned_to;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->details = $request->detail;
        $event->save();

        Toastr::success('Event Successfully Saved' ,'Success');
        return redirect()->route('admin.event.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $users = User::latest()->get();
        return view('admin.event.edit', compact('event', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->title = $request->title;
        $event->slug = $request->title;
        $event->created_by = $request->created_by;
        $event->location = $request->location;
        $event->assign_to = $request->assigned_to;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->details = $request->detail;
        $event->save();

        Toastr::success('Event Updated Successfully Saved' ,'Success');
        return redirect()->route('admin.event.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function archieve()
    {
        $today = date('Y-m-d');
        $totalEvents = Event::count();
        $events  = Event::where('date', '<', $today)->latest()->get();
        $todayEvents = Event::where('date', '=', date('Y-m-d'))->count();
        $noOfUpcoming  = Event::where('date', '>', $today)->count();
        $noOfArchieve  = Event::where('date', '<', $today)->count();
        return view('admin.event.archieve', compact('events', 'totalEvents', 'todayEvents', 'noOfArchieve', 'noOfUpcoming'));
    }

    public function upcoming()
    {
        $today = date('Y-m-d');
        $events  = Event::where('date', '>', $today)->latest()->get();
        $noOfUpcoming  = Event::where('date', '>', $today)->count();
        $totalEvents = Event::count();
        $todayEvents = Event::where('date', '=', date('Y-m-d'))->count();
        $noOfArchieve  = Event::where('date', '<', $today)->count();
        return view('admin.event.upcoming', compact('events', 'totalEvents', 'todayEvents', 'noOfArchieve', 'noOfUpcoming'));
    }

    public function todays()
    {
        $events = Event::where('date', '=', date('Y-m-d'))->latest()->get();
        $todayEvents = Event::where('date', '=', date('Y-m-d'))->count();
        return view('admin.event.index', compact('events', 'totalEvents', 'todayEvents', 'noOfArchieve', 'noOfUpcoming'));
    }
}
