<?php

namespace App\Http\Controllers\Auth\Employeer;

use App\Http\Controllers\Controller;
use App\Models\Employeer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function employeerprofile(){
        $id=Auth::user()->id;
        $items=Employeer::find($id);
        return view('backend.employeer.profile',compact('items')) ;
    }
}
