<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Member;
use App\Family;
use App\MemberFamily;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families = Family::latest()->get();
        return view('admin.family.index', compact('families'));
    }

    // Family in grid format
    public function familygrid()
    {
        $families = Family::latest()->get();
        return view('admin.family.familygrid', compact('families'));
    }

    // Active Family
    public function activefamily()
    {
        $families = Family::where('status', '=','Active')->latest()->get();
        return view('admin.family.activefamily', compact('families'));
    }

    // Inactive Families
    public function inactivefamily()
    {
        $families = Family::where('status', '=','Inctive')->latest()->get();
        return view('admin.family.inactivefamily', compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::latest()->get();
        return view('admin.family.create', compact('members'));
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
            'head'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'emergency'=>'required'
        ]);

        $family = new Family();
        $family->family_name = $request->head;
        $family->slug = $request->head;
        $family->family_head = $request->head;
        $family->telephone = $request->phone;
        $family->emergency_no = $request->emergency;
        $family->address = $request->address;
        $family->status = 'Active';
        $family->email = $request->email;
        $family->wedding_date = $request->wedding_date;
        $family->created_by = Auth::user()->id;
        $family->save();

        Toastr::success('Event Successfully Saved' ,'Success');
        return redirect()->route('admin.family.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $family = Family::findOrFail($id);
        $families = Family::latest()->limit(3)->get();
        $members = Member::latest()->get();
        $familyMembers = MemberFamily::where('family_id', '=', $id)->latest()->get();
        $memberNo = MemberFamily::where('family_id', '=', $id)->count();
        return view('admin.family.show', compact('family', 'families', 'members', 'familyMembers', 'memberNo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $family = Family::findOrFail($id);
        return view('admin.family.edit', compact('family'));
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
