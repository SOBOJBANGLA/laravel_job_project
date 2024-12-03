<?php

namespace App\Http\Controllers\backend\Employeer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Employeer;
use App\Models\Job;
use App\Models\Jobtype;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$id=Auth::user()->id;
        //$items=Job::orderBy('id','desc')->get();
        $employerId = Auth::id(); 
         $items = Job::where('employeer_id', $employerId)->get();
        return view('backend.employer_vacency.index',compact('items')) ;
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
        return view('backend.employer_vacency.create',compact('employeers','companies','locations','categories','jobtypes')) ;
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
        return redirect()->route('vacancy.index')->with('msg',"Successfully created");
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
    public function edit(Job $vacancy)
    {
        $employeers = Employeer::all();
        $companies = Company::all();
        $locations = Location::all();
        $categories = Category::all();
        $jobtypes = Jobtype::all();
        return view('backend.employer_vacency.edit',compact('employeers','companies','locations','categories','jobtypes','vacancy')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $vacancy)
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
        $vacancy->title=$request->title;
        $vacancy->employeer_id=$request->employer;
        $vacancy->company_id=$request->company;
        $vacancy->location_id=$request->location;
        $vacancy->category_id=$request->category;
        $vacancy->jobtype_id=$request->jobtype;
        $vacancy->vacancy=$request->vacancy;
        $vacancy->salary=$request->salary;
        $vacancy->description=$request->description;
        $vacancy->benefits=$request->benefits;
        $vacancy->responsibility=$request->responsibility;
        $vacancy->qualifications=$request->qualifications;
        $vacancy->keywords=$request->keywords;
        $vacancy->experience=$request->experience;
        $vacancy->company_website=$request->company_website;
        $vacancy->job_end_date=$request->job_end_date;
        $vacancy->update();
        //return redirect('admin/specialist');
        return redirect()->route('vacancy.index')->with('upt',"Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('vacancy.index')->with('dlt',"Successfully delete");
    }
}
