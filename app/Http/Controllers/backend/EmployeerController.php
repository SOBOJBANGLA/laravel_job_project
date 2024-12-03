<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employeer;
use App\Models\Location;
use Illuminate\Http\Request;

class EmployeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Employeer::orderBy('id','desc')->get();
        return view('backend.employeer.index',compact('items')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        $locations = Location::all();
       
        return view('backend.employeer.create',compact('companies','locations')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | max:100 | min:5',
            'company'=>'required',
            'email'=>'required | email | max:50 ',
            'password'=>'required | min:8 | confirmed ',
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'location'=>'required',
            'status'=>'required',
        ]);
        //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else {
            $photo = 'images/nophoto.jpg';
        }

        $employeer=new Employeer;
        $employeer->name=$request->name;
        $employeer->company_id=$request->company;
        $employeer->email=$request->email;
        $employeer->password=bcrypt($request->password);
        $employeer->photo=$photo;
        $employeer->location_id=$request->location;
        $employeer->description=$request->description;
        $employeer->status=$request->status;
        $employeer->save();
        //return redirect('admin/specialist');
        return redirect()->route('employeer.index')->with('msg',"Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Employeer $employeer)
    {
        return view('backend.employeer.show',compact('employeer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employeer $employeer)
    {
        $companies = Company::all();
        $locations = Location::all();
        
        return view('backend.employeer.edit',compact('companies','locations','employeer')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employeer $employeer)
    {
        $request->validate([
            'name'=>'required | max:100 | min:5',
            'company'=>'required',
            'email'=>'required | email | max:50 ',
            
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'location'=>'required',
            'status'=>'required',
        ]);
        //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

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
        $employeer->password=$request->password;
        $employeer->photo=$photo;
        $employeer->location_id=$request->location;
        $employeer->description=$request->description;
        $employeer->status=$request->status;
        $employeer->update();
        //return redirect('admin/specialist');
        return redirect()->route('employeer.index')->with('upt',"Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employeer $employeer)
    {
        $employeer->delete();
        return redirect()->route('employeer.index')->with('dlt',"Successfully delete");
    }
}
