@extends('layouts.app')
@section('content')


    <div class="container">
        <h2>{{$event->title}}</h2>

        <p>Event poprowadzi <a href="{{action('UsersController@show', $event->user->id)}}">{{$event->user->name}}</a></p>

        <h5>Lista uczetników: </h5>
        @if(count($users) > 0)
        <ul>
            @foreach($users as $user)
                <li>{{$user->name}} {{$user->lastname}}</li>
            @endforeach
        </ul>
        @else
            <h5>Nikt jeszcze nie zapisal sie na ten event</h5>
        @endif

        {!! Form::open(['method' => 'POST', 'action' => 'EventUsersController@store']) !!}


        <div class="col-sm-6 col-xs-12">

            <input type="hidden" name="event_id" value="{{$event->id}}">
            <input type="hidden" name="user_id" value="{{$event->user->id}}">

            <div class="form-group row">
                {!! Form::label('name', 'Name', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('lastname', 'Lastname', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('email', 'Email', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('phone', 'Phone', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Join to event', ['class' => 'btn btn-primary btn-block']) !!}
            </div>

        {!! Form::close() !!}


    </div>

@endsection