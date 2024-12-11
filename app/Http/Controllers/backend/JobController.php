<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Employeer;
use App\Models\Job;
use App\Models\Jobtype;
use App\Models\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Job::orderBy('id','desc')->get();
        return view('backend.job.index',compact('items')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employeers = Employeer::all();
        $companies = Company::all();
        $locations = Location::all();
        $categories = Category::all();
        $jobtypes = Jobtype::all();
        return view('backend.job.create',compact('employeers','companies','locations','categories','jobtypes')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required | max:100 | min:5',
            'company'=>'required',
            'location'=>'required',
            'category'=>'required',
            'jobtype'=>'required',
            'vacancy'=>'required',
            'experience'=>'required',
            'job_end_date'=>'required',
        ]);


        $job=new Job;
        $job->title=$request->title;
        $job->employeer_id=$request->employer;
        $job->company_id=$request->company;
        $job->location_id=$request->location;
        $job->category_id=$request->category;
        $job->jobtype_id=$request->jobtype;
        $job->vacancy=$request->vacancy;
        $job->salary=$request->salary;
        $job->description=$request->description;
        $job->benefits=$request->benefits;
        $job->responsibility=$request->responsibility;
        $job->qualifications=$request->qualifications;
        $job->keywords=$request->keywords;
        $job->experience=$request->experience;
        $job->company_website=$request->company_website;
        $job->job_end_date=$request->job_end_date;
        $job->save();
        //return redirect('admin/specialist');
        return redirect()->route('job.index')->with('msg',"Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $employeers = Employeer::all();
        $companies = Company::all();
        $locations = Location::all();
        $categories = Category::all();
        $jobtypes = Jobtype::all();
        return view('backend.job.edit',compact('employeers','companies','locations','categories','jobtypes','job')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title'=>'required | max:100 | min:5',
            'company'=>'required',
            'location'=>'required',
            'category'=>'required',
            'jobtype'=>'required',
            'vacancy'=>'required',
            'experience'=>'required',
            'job_end_date'=>'required',
        ]);
        $job->title=$request->title;
        $job->employeer_id=$request->employer;
        $job->company_id=$request->company;
        $job->location_id=$request->location;
        $job->category_id=$request->category;
        $job->jobtype_id=$request->jobtype;
        $job->vacancy=$request->vacancy;
        $job->salary=$request->salary;
        $job->description=$request->description;
        $job->benefits=$request->benefits;
        $job->responsibility=$request->responsibility;
        $job->qualifications=$request->qualifications;
        $job->keywords=$request->keywords;
        $job->experience=$request->experience;
        $job->company_website=$request->company_website;
        $job->job_end_date=$request->job_end_date;
        $job->status = $request->status;
        $job->isFeatured = (!empty($request->isFeatured)) ? $request->isFeatured : 0;
        $job->update();
        //return redirect('admin/specialist');
        return redirect()->route('job.index')->with('upt',"Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('job.index')->with('dlt',"Successfully delete");
    }
}
