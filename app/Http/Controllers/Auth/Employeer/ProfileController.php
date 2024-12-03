<?php

namespace App\Http\Controllers\Auth\Employeer;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employeer;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function employeerprofile(){
        $companies = Company::all();
        $locations = Location::all();
        $id=Auth::user()->id;
        $items=Employeer::find($id);
        return view('backend.employeer.profile',compact('items','companies','locations')) ;
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function employeerprofilestore(Request $request)
    {
        
        $id=Auth::user()->id;
        $employeer=Employeer::find($id);

        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else {
            $photo = 'images/nophoto.jpg';
        }

        $employeer->name=$request->name;
        $employeer->company_id=$request->company;
        $employeer->email=$request->email;
         
         $employeer->photo=$photo;
         $employeer->location_id=$request->location;
         $employeer->description=$request->description;
         $employeer->status=$request->status;
        
       $employeer->save();

    return redirect()->back();
        // return back()->with('success', 'Profile updated successfully.');
        //return redirect('admin/specialist');
        //return redirect()->route('employeer.index')->with('upt',"Successfully updated");
    }
}
