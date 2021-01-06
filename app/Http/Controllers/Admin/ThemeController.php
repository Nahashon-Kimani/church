<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Theme;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::latest()->get();
        return view('admin.theme.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.theme.create');
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
            'verse' =>'required',
            'year' =>'required',
            'narration' =>'required',
        ]);

        $theme = new Theme();
        $theme->verse = $request->verse;
        $theme->slug = $request->verse;
        $theme->narration = $request->narration;
        $theme->spiritual_year = $request->year;
        $theme->status = 'Active';
        $theme->created_by = $request->created_by;
        $theme->save();

        Toastr::success('Theme Successfully Saved' ,'Success');
        return redirect()->route('admin.theme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theme = Theme::findOrFail($id);
        $themes = Theme::latest()->get();
        return view('admin.theme.show', compact('theme', 'themes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theme = Theme::findOrFail($id);
        return view('admin.theme.edit', compact('theme'));
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
        $theme = Theme::findOrFail($id);
        $theme->verse = $request->verse;
        $theme->slug = $request->verse;
        $theme->narration = $request->narration;
        $theme->spiritual_year = $request->year;
        $theme->status = $request->status;
        $theme->created_by = $request->created_by;
        $theme->save();

        Toastr::success('Theme Successfully Saved' ,'Success');
        return redirect()->route('admin.theme.index');
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
