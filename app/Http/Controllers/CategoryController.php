<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    
    public function index()
    {
        //get all the categories from the databases
        $categories = \App\Models\Category::all()->sortBy('category');

        // dd($categories);

        // return view('categories.index')->with('categories',$categories);

        return view('categories.index')->with('categories',$categories);

        

    }

    
    public function create()
    {
        return view('categories.create');
    }

    
    public function store(Request $request)
    {
        //check form submissions for errors
        //inserting into database or show error

        // dd($request);

        $rules = [
            'category' => 'required|max:50|unique:categories,category'
        ];

        $validator = $this->validate($request,$rules);

        $category = new \App\Models\Category;
        $category->category = $request->category;
        $category->save();

        // Flash a success message: 
        Session::flash('success', 'A new category has been created');

        // re-direct to index 
        return redirect()->route('categories.index');
    }

    
    public function show(string $id)
    {
    }

    
    public function edit(string $id)
    {
    }

    
    public function update(Request $request, string $id)
    {
    }

   
    public function destroy(string $id)
    {
    }

    public function confirmDelete(string $id){
        
    }
}
