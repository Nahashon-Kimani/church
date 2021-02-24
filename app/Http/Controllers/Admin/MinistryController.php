<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\MinistryMember;
use App\Ministry;
use App\Member;

class MinistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minitries = Ministry::latest()->get();
        $noOfMinistry = Ministry::count();
        return view('admin.ministry.index', compact('minitries', 'noOfMinistry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::latest()->get();
        $minitries = Ministry::latest()->get();
        return view('admin.ministry.create', compact('minitries', 'members'));
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
            'name'=>'required'
        ]);
        $ministry = new Ministry();
        $ministry->name = $request->name;
        $ministry->slug = $request->name;
        $ministry->created_by = $request->created_by;
        $ministry->current_leader = $request->leader;
        $ministry->save();

        Toastr::success('Ministry Successfully Saved' ,'Success');
        return redirect()->route('admin.ministry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ministry = Ministry::findOrFail($id);
        $minitries = Ministry::latest()->get();
        $members = Member::latest()->get();
        $ministryMembers = MinistryMember::where('ministry_id', '=', $id)->latest()->get();
        return view('admin.ministry.show', compact('ministry', 'minitries', 'ministryMembers', 'members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ministry = Ministry::findOrFail($id);
        $members = Member::latest()->get();
        return view('admin.ministry.edit', compact('ministry', 'members'));
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
        $ministry = Ministry::findOrFail($id);
        $ministry->name = $request->name;
        $ministry->slug = $request->name;
        $ministry->created_by = $request->created_by;
        $ministry->current_leader = $request->leader;
        $ministry->save();

        Toastr::success('Ministry Updated Successfully' ,'Success');
        return redirect()->route('admin.ministry.show', $id);
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
