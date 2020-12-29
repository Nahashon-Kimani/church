<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::latest()->get();
        return view('admin.announcement.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.announcement.create');
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
            'start_date'=>'required',
            'stop_date'=>'required',
            'start_time'=>'required',
            'stop_time'=>'required',
            'desc'=>'required'

        ]);
        $announcement = new Announcement();
        $announcement->created_by = $request->created_by;
        $announcement->title = $request->title;
        $announcement->start_date = $request->start_date;
        $announcement->stop_date = $request->stop_date;
        $announcement->start_time = $request->start_time;
        $announcement->stop_time = $request->stop_time;
        $announcement->desc = $request->desc;
        $announcement->save();

        Toastr::success('Announcement Successfully Saved' ,'Success');
        return redirect()->route('admin.announcement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcement.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcement.edit', compact('announcement'));
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
        $announcement = Announcement::findOrFail($id);
        $announcement->created_by = $request->created_by;
        $announcement->title = $request->title;
        $announcement->start_date = $request->start_date;
        $announcement->stop_date = $request->stop_date;
        $announcement->start_time = $request->start_time;
        $announcement->stop_time = $request->stop_time;
        $announcement->desc = $request->desc;
        $announcement->save();

        Toastr::success('Announcement Successfully Updated' ,'Success');
        return redirect()->route('admin.announcement.show', $id);
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

    public function archive()
    {
        $todayDate = date('Y-m-d');
        $announcements =  Announcement::where('start_date', '<', $todayDate)->latest()->get();
        return view('admin.announcement.archieve', compact('announcements'));
    }

    public function upcoming()
    {
        $todayDate = date('Y-m-d');
        $announcements =  Announcement::where('start_date', '>', $todayDate)->latest()->get();
        return view('admin.announcement.upcoming', compact('announcements'));
    }
}
