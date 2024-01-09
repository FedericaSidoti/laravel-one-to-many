@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="card">
            <img src="{{$project->thumb}}">
            <h2>{{$project->title}}</h2>
            <p>{{$project->description}}</p>
        </div>
    </div>
@endsection