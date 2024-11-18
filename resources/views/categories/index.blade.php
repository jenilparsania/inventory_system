@extends('layouts.public')

@section('content')
<div class="container">
    <a href="{{route('categories.create')}}" class = "btn btn-primary mb-3"> Add New Category </a>

    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>

    @endif

</div>
@endsection
