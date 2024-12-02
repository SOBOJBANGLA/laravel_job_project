<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Company::orderBy('id','desc')->get();
        return view('backend.company.index',compact('items')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | max:100 | min:5',
            'address'=>'required',
            
        ]);

        $company=new Company;
        $company->name=$request->name;
        $company->address=$request->address;
        $company->save();
        //return redirect('admin/specialist');
        return redirect()->route('company.index')->with('msg',"Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('backend.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $company->name=$request->name;
        $company->address=$request->address;

        $company->update();
        return redirect()->route('company.index')->with('msg',"Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index')->with('msg',"Successfully delete");
    }
}
