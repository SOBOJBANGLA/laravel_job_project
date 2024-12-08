<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $companies=Company::orderBy('id','desc')->get();
        $jobs=Job::orderBy('id','desc')->get();
        return view('frontend.home',compact('jobs','companies'));
    }

    public function about(Request $request){
       
        return view('frontend.about');
    }

    public function contact(Request $request){
       
        return view('frontend.contact');
    }

    public function blog(Request $request){
       
        return view('frontend.blog');
    }

    public function profile_setting(Request $request){
       
        return view('frontend.profile_setting');
    }

    
}
