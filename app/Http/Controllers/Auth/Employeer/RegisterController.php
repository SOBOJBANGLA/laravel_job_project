<?php

namespace App\Http\Controllers\Auth\Employeer;

use App\Models\Admin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\Employeer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('login.employeer_register');
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
        ]);
     

        //Auth::guard('employeer')->login($employeer);
        //return redirect('/employeer/login');
        return redirect()->route('employeer.login');
        //return redirect(RouteServiceProvider::EMPLOYEER_DASHBOARD);
    }
}