@extends('layouts.app')
@section('content')


    <div class="container">
        <h2>Users</h2>

        <ul>
        @foreach($users as $user)

            <li><a href="{{action('UsersController@show', $user->id)}}">{{$user->name}}</a></li>

        @endforeach
        </ul>
    </div>


@endsection