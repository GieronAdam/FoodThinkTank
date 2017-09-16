@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>events</h1>

        <ul>
        @foreach($events as $event)

            <li><a href={{action('EventsController@show', $event->id)}}>{{$event->title}}</a></li>

        @endforeach
        </ul>
    </div>

@endsection