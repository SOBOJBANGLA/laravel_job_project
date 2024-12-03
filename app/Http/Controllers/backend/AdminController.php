<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

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

    
}
