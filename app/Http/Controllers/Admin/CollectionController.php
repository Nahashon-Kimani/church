<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Service;
use App\GivingCategory;
use App\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Today Collections
        $collections = Collection::where('date', '=', date('Y-m-d'))->latest()->get();
        $totalCollections = Collection::where('date', '=', date('Y-m-d'))->sum('amount');
        return view('admin.collection.index', compact('collections', 'totalCollections'));
    }

    // All Collections
    public function allcollection()
    {
        $collections = Collection::latest()->get();
        $totalCollections = Collection::sum('amount');
        return view('admin.collection.index', compact('collections', 'totalCollections'));
    }

    // This month Collections
    public function thismonth()
    {
        $collections = Collection::whereMonth('date', '=', date('m'))->latest()->get();
        $totalCollections = Collection::whereMonth('date', '=', date('m'))->sum('amount');
        return view('admin.collection.index', compact('collections', 'totalCollections'));
    }

    // This year Collections
    public function annually()
    {
        $collections = Collection::whereYear('date', '=', date('Y'))->latest()->get();
        $totalCollections = Collection::whereYear('date', '=', date('Y'))->sum('amount');
        return view('admin.collection.index', compact('collections', 'totalCollections'));
    }

    // 3 Months Report
    public function quartely()
    {
        // $end3 = date('Y-m-d')->subMonth(3);
        $end3 = date('Y-m-d');
        $today = date('Y-m-d');
        $collections = Collection::latest()->get();
        $totalCollections = Collection::sum('amount');
        return view('admin.collection.index', compact('collections', 'totalCollections'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        $givingCategories = GivingCategory::latest()->get();
        return view('admin.collection.create', compact('services', 'givingCategories'));
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
            'service'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'category'=>'required'
        ]);

        $collection = new Collection();
        $collection->service_id = $request->service;
        $collection->date = $request->date;
        $collection->amount = $request->amount;
        $collection->giving_category_id = $request->category;
        $collection->slug = 'Service '.$request->service.' ' .'date '. $request->date . 'Amount '.$request->amount;
        $collection->created_by = $request->created_by;
        $collection->save();

        Toastr::success('Collection Successfully Created' ,'Success');
        return redirect()->route('admin.collection.index');
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
