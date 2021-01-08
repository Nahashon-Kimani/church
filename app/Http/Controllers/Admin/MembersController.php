<?php

namespace App\Http\Controllers\Admin;
use App\Member;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $members = Member::latest()->get();
        return view('admin.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
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
       'firstname' => 'required',
       'lastname' => 'required',
       'fullname' => 'required',
       'gender' => 'required',
       'phonenumber' => 'required',
       'kin_contact' => 'required',
       'email' => 'required',
       'address_type' => 'required',
       'address' => 'required',
       'image' => 'required|mimes:jpeg,bmp,png,jpg'
       
       ]);
         $image = $request->file('image');
        $slug = ($request->fullname);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('members'))
            {
                Storage::disk('public')->makeDirectory('members');
            }

            $memberImage = Image::make($image)->resize(1600,1066)->save($imageName, 90);
            Storage::disk('public')->put('members/'.$imageName,$memberImage);

        } else {
            $imageName = "default.png";
        }
       $member= new Member();
       $member->firstname = $request->firstname;
       $member->lastname = $request->lastname;
       $member->fullname = $request->fullname;
       $member->gender = $request->gender;
       $member->phonenumber = $request->phonenumber;
       $member->kin_contact = $request->kin_contact;
       $member->email = $request->email;
       $member->address_type = $request->address_type;
       $member->address = $request->address;
       $member->city = $request->city;
       $member->state = $request->state;
       $member->zipcode = $request->zipcode;
       $member->country = $request->country;
       $member->birth_date = $request->birth_date;
       $member->baptized_date = $request->baptized_date;
       $member->join_date = $request->join_date;
       $member->slug = $slug;
       $member->image = $imageName;
       $member->save();
       Toastr::success('Member Successfully Saved' ,'Success');
        return redirect()->route('admin.members.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Member::find($id);
        return view('admin.members.show',compact('members'));
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