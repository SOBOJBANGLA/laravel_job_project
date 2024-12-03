<?php

namespace App\Http\Controllers\Auth\Employeer;

use App\Models\Admin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employeer;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function create(): View
    {
        $companies = Company::all();
        $locations = Location::all();
       
        return view('login.employeer_register',compact('companies','locations'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Employeer::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

         Employeer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'company_id'=>$request->company,
            'location_id'=>$request->location,
        ]);
     

        //Auth::guard('employeer')->login($employeer);
        //return redirect('/employeer/login');
        return redirect()->route('employeer.login');
        //return redirect(RouteServiceProvider::EMPLOYEER_DASHBOARD);
    }
}