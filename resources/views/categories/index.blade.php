@extends('layouts.public')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Companies </div>
                <div class="card-body">
                    @php
                        // dd($companies)
                    @endphp
                    <h1 class="text-end">
                        <a href="/categories/create" class="btn btn-info" role="button">+Add New </a>
                    </h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)  {{-- left side of the with method is the variable here  --}}
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category}}</td>
                                {{-- <td>
                                    
                                    @foreach($company->series as $series)   
                                        {{$series->name}}, 
                                    @endforeach
                                
                                
                                </td> --}}
                                <td>
                                    <div style="float:left;"> 
                                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-success btn-small"> Edit</a>
                                    </div>  
                                    <div style="float:left; margin-left:5px;">
                                        <form action="/categories/{{$category->id}}" method="post" onsubmit="return confirm('Do you want to delete {{$category->category}} category ?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE"/>
                                            <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger btn-block">

                                        </form>
                                          
                                    </div>
                                    
                                </td>
                                
                            </tr>
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