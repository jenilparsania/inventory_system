@extends('layouts.public')

@section('content')  
{{-- yeild content {thing} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"> Create A Item</div>
                    <div class="card-body">

                        <form action="/items" method="post">
                            @csrf  <!-- read about it -->

                            {{-- <label for="item"> Items </label>
                            <input type="text" class="form-control" name="item" title="item"/> --}}
                            
                            {{-- trying to create a drop down for the category_id --}}

                            <div class="form-group">

                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id">
                                    <option value="">Select a value </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
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
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}">

                            </div>

                            <div class="form-group">
                                <label for="sku">SKU</label>
                                <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku') }}">
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="text" name="picture" id="picture" class="form-control" value="{{ old('picture') }}">
                            </div>



                            <input type="submit" value="Add Item" class="btn btn-primary btn-lg btn-block" style="margin-top:20px"/>

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

