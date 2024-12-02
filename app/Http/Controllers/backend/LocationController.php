<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Location::orderBy('id','desc')->get();
        return view('backend.location.index',compact('items')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $location=new Location;
        $location->location_name=$request->location_name	;
        
        $location->save();
        //return redirect('admin/specialist');
        return redirect()->route('location.index')->with('msg',"Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('backend.location.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $location->location_name=$request->location_name	;
        
        $location->update();
        //return redirect('admin/specialist');
        return redirect()->route('location.index')->with('msg',"Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('location.index')->with('msg',"Successfully delete");
    }
}
