<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Jobtype;
use Illuminate\Http\Request;

class JobtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Jobtype::orderBy('id','desc')->get();
        return view('backend.jobtype.index',compact('items')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.jobtype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobtype=new Jobtype;
        $jobtype->jobtype_name=$request->jobtype_name	;
        
        $jobtype->save();
        //return redirect('admin/specialist');
        return redirect()->route('jobtype.index')->with('msg',"Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobtype $jobtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jobtype $jobtype)
    {
        return view('backend.jobtype.edit',compact('jobtype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobtype $jobtype)
    {
        $jobtype->jobtype_name=$request->jobtype_name;
        
        $jobtype->update();
        //return redirect('admin/specialist');
        return redirect()->route('jobtype.index')->with('msg',"Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobtype $jobtype)
    {
        $jobtype->delete();
        return redirect()->route('jobtype.index')->with('msg',"Successfully delete");
    }
}
