@extends('layouts.public')

@section('content')
{{--  
<div class="container">
    <a href="{{route('categories.create')}}" class = "btn btn-primary mb-3"> Add New Category </a>

    @if(session('success')) 
    {{-- writing these for the error messages  --}}
    {{-- <div class="alert alert-success">{{session('success')}}</div> --}

    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif

</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"> Categories </div>
                <div class="card-body">
                    @php
                        // dd($categories)

                    @endphp

                    <h1 class="text-end">
                        <a href="/categories/create" class="btn btn-info" role="button"> + Add New </a>
                    </h1>
                    
                    <table>
                        <thead>
                            <tr>

                                <th>#</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($categories as $category){
                                <tr> 
                                    
                                    <td> {{$category->id}}</td>
                                    <td> {{$category->category}}</td>
                                

                                 {{-- 
                                    <td> 

                                        @foreach($category->items as $items)
                                            {{$items->name}}
                                        @endforeach
                                    </td>
                                
                                 --}}

                                    <td>Edit, Delete</td>
                                </tr>
                            }

                            @endforeach
                        </tbody>
                    </table>
                    
                    
                </div>


            </div>

        </div> <!-- .col-md-8 -->
    </div>
</div>


@endsection

@section('scripts')
@endsection


@section('styles')
@endsection
