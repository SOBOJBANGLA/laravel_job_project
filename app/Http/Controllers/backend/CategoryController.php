<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Category::orderBy('id','desc')->get();
        return view('backend.category.index',compact('items')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category=new Category;
        $category->category_name=$request->category_name	;
        
        $category->save();
        //return redirect('admin/specialist');
        return redirect()->route('category.index')->with('msg',"Successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        
        $category->category_name=$request->category_name	;
        
        $category->update();
        //return redirect('admin/specialist');
        return redirect()->route('category.index')->with('msg',"Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('msg',"Successfully delete");
    }
}
