@extends('layouts.public')

@section('content')  
{{-- yeild content {thing} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"> Edit A Item</div>
                    <div class="card-body">

                        <form action="/items/{{$item->id}}" method="POST" >
                            @csrf  <!-- read about it -->
                            <input type="hidden" name="_method" value="PUT"/>

                            {{-- <label for="item"> Items </label>
                            <input type="text" class="form-control" name="item" title="item"/> --}}
                            
                            {{-- trying to create a drop down for the category_id --}}

                            <div class="form-group">

                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id">
                                    <option value="">Select a value </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{-- {{old('category_id') == $category->id ? 'selected' : ''}} --}}
                                            >
                                            {{$category->category}}
                                        </option>


                                    @endforeach
                                
                                </select>
                            </div>

                            {{-- <div class="form-group">
                                <label for="category_id">ID</label>
                                <input type="text" name="category_id" id="category_id" class="form-control" value="{{ old('category_id') }}">
                            </div> --}}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title',$item->title) }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $item->description) }}">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control" value="{{ old('price',$item->price) }}">
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $item->quantity) }}">

                            </div>

                            <div class="form-group">
                                <label for="sku">SKU</label>
                                <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku', $item->sku) }}">
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="text" name="picture" id="picture" class="form-control" value="{{ old('picture', $item->picture) }}">
                            </div>



                            <input type="submit" value="Edit Item" class="btn btn-primary btn-lg btn-block" style="margin-top:20px"/>
                            
                            <a href="/items" class="btn btn-primary btn-lg btn-block" style="margin-top:20px"> Cancel</a>
                            

                        </form>
                    </div>


                </div>

            </div> <!-- .col-md-8 -->
        </div>
    </div>


@endsection

@section('styles')
@endsection

@section('scripts')
@endsection

