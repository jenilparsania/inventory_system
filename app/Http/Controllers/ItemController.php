<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = \App\Models\Item::all()->sortBy('item');


        return view('items.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = \App\Models\Category::all();
        return view('items.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'title' => 'required|max:50|unique:items,title'
        ];

        $validator = $this->validate($request,$rules);

        $item = new \App\Models\Item;

        $item->title = $request->title;
        $item->category_id = $request->category_id;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->sku = $request->sku;
        $item->picture = $request->picture;
        // $item->title = $request->title;
        $item->save();

        // Flash a succcess message
        Session::flash('success','A new item has been created');

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = \App\Models\Item::find($id);
        $categories = \App\Models\Category::all();

        if(!$item){
            dd("no item was found");
        }

        return view('items.edit')->with('item',$item)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $rules = [
            'title' => 'required|max:50|unique:items,title' .$id
        ];

        $validator = $this->validate($request,$rules);

        $item = \App\Models\Item::find($id);

        $item->title = $request->title;
        $item->category_id = $request->category_id;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->sku = $request->sku;
        $item->picture = $request->picture;
        // $item->title = $request->title;
        $item->save();

        // Flash a succcess message
        Session::flash('success','A new item has been Updated');

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = \App\Models\Item::find($id);

        if(!$item){
            dd("No item found");
            Session::flash('error','No company found');
        }else{
            $item->delete();
            Session::flash('success','Items delete');
        }

        return redirect()->route('items.index');
    }
}
