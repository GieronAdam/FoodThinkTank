@extends('layouts.app')

@section('title', $project->title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        Category: {!! $project->category !!} | Author: {{ $project->author }} | Published on: {{ $project->created_at }}
        <p>{!! $project->full_content !!}</p>
    </div>
@endsection
