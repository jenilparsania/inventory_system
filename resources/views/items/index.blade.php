@extends('layouts.public')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Items </div>
                <div class="card-body">
                    @php
                        // dd($companies)
                    @endphp
                    <h1 class="text-end">
                        <a href="/items/create" class="btn btn-info" role="button">+Add New </a>
                    </h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Items</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)  {{-- left side of the with method is the variable here  --}}
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                {{-- <td>
                                    
                                    @foreach($company->series as $series)   
                                        {{$series->name}}, 
                                    @endforeach
                                
                                
                                </td> --}}
                                <td>
                                    <div style="float:left;"> 
                                        <a href="{{route('items.edit',$item->id)}}" class="btn btn-success btn-small"> Edit</a>
                                    </div>  
                                    <div style="float:left; margin-left:5px;">
                                        <form action="/items/{{$item->id}}" method="post" onsubmit="return confirm('Do you want to delete {{$item->title}} category ?')">
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