<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\JobNotificationEmail;
use App\Models\Applicant;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Employeer;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request){
        $companies=Company::orderBy('id','desc')->get();
       // $jobs=Job::orderBy('id','desc')->get();
       $jobs = Job::where('status',1)
                        ->orderBy('id','desc')
                        ->where('isFeatured',1)->take(6)->get();
        return view('frontend.home',compact('jobs','companies'));
    }

    public function about(Request $request){
       
        return view('frontend.about');
    }

    public function contact_form(Request $request){
        return view('frontend.contact');
    }

    public function contact(Request $request){

        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->comment=$request->comment;
        $contact->candidate_id=$request->candidate_id;
        $contact->save();

       
        return view('frontend.contact');
    }

    public function blog(Request $request){
       
        return view('frontend.blog');
    }

    public function profile_setting(Request $request){
       
        return view('frontend.profile_setting');
    }


    public function application_view($jobId)
    {
        $userId = Auth::id();
        $job = Job::find($jobId);
        $application = Applicant::where('job_id', $jobId)->where('candidate_id', $userId)->first();

        return view('frontend.applicant', compact('job','application'));
    }

    public function application(Request $request){

        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
            
        ]);
        //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
        if ($bio = $request->file('pdf')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $bio->getClientOriginalExtension();
            $bio->move($destinationPath, $postImage);
            $bio = $destinationPath.$postImage;
        }
    
        // $id=Auth::user()->id;
        // $candidate=CandidateDetails::find($id);
         $applicant=new Applicant;
         $applicant->name=$request->name;
         $applicant->email=$request->email;
         $applicant->contact=$request->contact;
         $applicant->cv=$bio;
         $applicant->candidate_id=$request->candidate_id;
         $applicant->job_id=$request->job_id;
         $applicant->employeer_id=$request->employeer_id;
         $applicant->save();

         // Send Notification Email to Employer
        

        $job = Job::where('id', $request->job_id)->first(); 

 $employer = Employeer::where('id', $job->employeer_id)->first(); 

$mailData = [
'employer' => $employer, 
'user' => Auth::user(), 
'job' => $job, 
];

        Mail::to('yasinrobiul336@gmail.com')->send(new JobNotificationEmail($mailData));
        //return redirect('admin/specialist');
        return redirect()->back()->with('msg',"Successfully Apply");


    }

    public function myJobs(Request $request){

       $userId = Auth::id(); 
         $items = Applicant::where('candidate_id', $userId)->get();
        // dd($items);
        return view('frontend.myjobs',compact('items'));
    }
    

    
}
