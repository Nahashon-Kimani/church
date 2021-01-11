<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\District;
use App\User;
use App\Member;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::latest()->get();
        $noOfDistricts = District::all()->count();
        $users = User::latest()->get();
        return view('admin.district.index', compact('districts', 'noOfDistricts', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $districts = District::latest()->get();
       $members = Member::latest()->get();
        return view('admin.district.create', compact('districts', 'members'));
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
        $district = new District();
        $district->name = $request->name;
        $district->slug = $request->name;
        $district->deacon_in_charge	 = $request->decon_in_charge;
        $district->created_by = $request->created_by;
        $district->save();

        Toastr::success('District Successfully Created' ,'Success');
        return redirect()->route('admin.district.index');
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
        $members = Member::latest()->get();
        $district = District::findOrFail($id);
        return view('admin.district.edit', compact('district', 'members'));
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
        $this->validate($request, [
            'name'=>'required'
        ]);
        $district = District::findOrFail($id);
        $district->name = $request->name;
        $district->slug = $request->name;
        $district->deacon_in_charge	 = $request->decon_in_charge;
        $district->created_by = $request->created_by;
        $district->save();

        Toastr::success('District Updated Successfully' ,'Success');
        return redirect()->route('admin.district.index');
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
