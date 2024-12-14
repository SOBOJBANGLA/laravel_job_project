<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showReportForm() { 
        $companies = Company::all(); 
        return view('backend.admin.report_form', compact('companies'));
     }

    public function generateReport(Request $request) { 
        $companyId = $request->input('company_id'); 
        $company = Company::find($companyId); 
        $jobs = $company ? $company->job()->with('company')->get() : []; 
        return view('backend.admin.report', compact('company', 'jobs')); 
    
    }


    public function viewApplicant($jobId) { 

        $job = Job::findOrFail($jobId); 
        $items = Applicant::where('job_id', $jobId)->get();
        return view('backend.job.view_applicant',compact('items','job')); 
        
     }

     public function employeeViewApplicant($jobId) { 
        $job = Job::findOrFail($jobId); 
        $items = Applicant::where('job_id', $jobId)->get();
        
        return view('backend.employer_vacency.view_apply',compact('items','job')); 
        
     }

     public function updateApplicantStatus(Request $request, $applicantId) { 
        $applicant = Applicant::findOrFail($applicantId); 
        $applicant->status = $request->input('status'); 
        $applicant->save();  
        return redirect()->back()->with('success', 'Applicant status updated successfully!'); 
        }

        public function userContact() { 
            $items = Contact::all(); 
            return view('backend.admin.user_contact', compact('items'));
         }

        //  public function user_destroy(Contact $contact)
        //  {
        //      $contact->delete();
        //      return redirect()->route('user_contact')->with('msg',"Successfully delete");
        //  }


    
}
