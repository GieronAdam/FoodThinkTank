@extends('layouts.app')
@section('content')


    <div class="container">
        <h2>User {{$user->name}}</h2>


        <p>Lista eventow prowadzona przez {{$user->name}}</p>
        <ul>
            @foreach($events as $event)
                <li>{{$event->title}}</li>
            @endforeach
        </ul>

    </div>


@endsection