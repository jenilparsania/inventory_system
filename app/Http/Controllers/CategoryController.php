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
        $category = \App\Models\Category::find($id);
        if(!$category){
            dd("no category was found ");
        }

        return view('categories.edit')->with('category',$category);
    }

    
    public function update(Request $request, string $id)
    {
        $rules = [
            'category' => 'required|max:50|unique:categories,catory,'.$id
        ];

        $validator = $this->validate($request,$rules);
        
        $category = \App\Models\Category::find($id);

        if(!$category){
            dd("No category found");
        }
        $category->category = $request->category;   // this was the line I was making an error 
        $category->save();

        Session::flash('success',"A Category has been Updated");

        return redirect()->route('categories.index');
        
    }

   
    public function destroy(string $id)
    {

        $category = \App\Models\Category::find($id);

        if(!$category){
            dd(" No category found");
            Session::flash('error','No company found');
        }else{
            $category->delete();
            Session::flash('success','category delete');
        }

        return redirect()->route('categories.index');
    }

    public function confirmDelete(string $id){
        
    }
}
