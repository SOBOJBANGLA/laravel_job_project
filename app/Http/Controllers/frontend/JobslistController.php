<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\Jobtype;
use App\Models\Location;
use Illuminate\Http\Request;

class JobslistController extends Controller
{
    public function index(Request $request){
        $jobtypes = Jobtype::all();
        $locations = Location::all();
        $categories = Category::all();
        $jobs=Job::orderBy('id','desc')->paginate(5);
        //$jobs=Job::orderBy('id','desc')->latest()->paginate(5);
        
        // ->paginate(5)
       
        
        return view('frontend.jobsList',compact('jobs','locations','categories','jobtypes'));
  
    }

    public function search(Request $request) {
        $jobtypes = Jobtype::all();
        $locations = Location::all();
        $categories = Category::all();
         $search = $request->input('search'); 
         $category = $request->input('category_id');
         $location = $request->input('location');
         $jobtype = $request->input('jobtype');
         
        
        $jobs = Job::where('title', 'LIKE', "%{$search}%")
         ->where('category_id', 'LIKE', "%{$category}%")
         ->where('location_id', 'LIKE', "%{$location}%")
         ->where('jobtype_id', 'LIKE', "%{$jobtype}%")
         ->paginate(5);
        //  ->paginate(5)
         

      
          return view('frontend.jobsList', compact('jobs','jobtypes','locations','categories'));
}

public function jobDetail($jobId){
    // $jobtypes = Jobtype::all();
    // $locations = Location::all();
    // $categories = Category::all();
    $job = Job::find($jobId);
    return view('frontend.jobsdetail',compact('job'));
}



}
