<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Member;
use App\Service;
use App\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        $services = Service::all();
        $attendances = Attendance::where('date', '=', date('Y-m-d'))
                        ->orderBy('service_id', 'asc')
                        ->orderBy('seat_no', 'asc')
                        ->get();
        return view('admin.attendance.index', compact('members', 'services', 'attendances'));
    }

    // Getting all Attendance
    public function allattendance()
    {
        $attendances = Attendance::latest()->get();
        $members = Member::all();
        $services = Service::latest()->get();
        return view('admin.attendance.allattendance', compact('attendances', 'members', 'services'));
    }

    //Last Sunday Attendance:     attendance.lastsundayattendance
    public function lastsundayattendance()
    {
        // $dateDiff = date('Y-m-d') - 7;
        // $attendances = Attendance::where('date', '=', (date('Y-m-d')-7))->get();
        $attendances = Attendance::latest()->get();
        $members = Member::all();
        $services = Service::latest()->get();
        return view('admin.attendance.lastsundayattendance', compact('attendances', 'members', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attendance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'member_id'=>'required',
            'service_id'=>'required',
            'temp'=>'required',
            'seat_no'=>'required'
        ]);

        $attendance = new Attendance();
        $attendance->member_id = $request->member_id;
        $attendance->service_id = $request->service_id;
        $attendance->temp = $request->temp;
        $attendance->seat_no = $request->seat_no;
        $attendance->time = date('H:i:s');
        $attendance->date = date('Y-m-d');
        $attendance->created_by = $request->user_id;
        $attendance->save();

        Toastr::success('Member Attendance Successfully Created' ,'Success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
