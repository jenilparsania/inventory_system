<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        //get all the categories from the databases
        $categories = \App\Models\Category::all()->sortBy('category');

        dd($categories);

        return view('categories.index')->with('categories',$categories);

    }

    
    public function create()
    {
        return view('categories.create');
    }

    
    public function store(Request $request)
    {
        dd($request);
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
