@extends('welcome')
<div style="width: 50%; display:block; justify-content: center; padding-left: 10%;">

    @section('content')
        @foreach($projects as $project)
        <h1>{{$project->title}} </h1>
        <p>{{$project->author}}</p>
        <p>{{$project->short_description}}</p>
        <p>{{$project->full_content}}</p>
        @endforeach
    @endsection
</div>