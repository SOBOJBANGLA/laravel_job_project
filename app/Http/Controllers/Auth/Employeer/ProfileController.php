<?php

namespace App\Http\Controllers\Auth\Employeer;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employeer;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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


    /**
     * Update the specified resource in storage.
     */
    public function changepasswordstore(Request $request)
    {
        
    //     $id=Auth::user()->id;
    //     $employeer=Employeer::find($id);

    //     $employeer->password=$request->password;
         
        
        
    //    $employeer->save();

    // return redirect()->back();

        // return back()->with('success', 'Profile updated successfully.');
        //return redirect('admin/specialist');
        //return redirect()->route('employeer.index')->with('upt',"Successfully updated");


        $validator = Validator::make($request->all(),[
            'old_password' => 'required',
            'new_password' => 'required|min:5',
            'confirm_password' => 'required|same:new_password',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
        }

        if (Hash::check($request->old_password, Auth::user()->password) == false){
            session()->flash('error','Your old password is incorrect.');
            return response()->json([
                'status' => true                
            ]);
        }


        $user = Employeer::find(Auth::user()->id);
        $user->password = Hash::make($request->new_password);  
        $user->save();

        session()->flash('success','Password updated successfully.');
        return response()->json([
            'status' => true                
        ]);
    }
}
