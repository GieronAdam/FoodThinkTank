@extends('layouts.admin')
@section('content')



    <div class="container">
        <div class="col-sm-6 col-xs-12">
            <h4 class="section-title">Create a Event</h4>
            <hr>
            @include('includes.forms.error')
        </div>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminEventsController@store', 'files' => true]) !!}

        <div class="col-sm-6 col-xs-12">

            <div class="form-group row">
                {!! Form::label('title', 'Title', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('description', 'Description', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::textarea('description', null, ['class' => 'form-control tinymce']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('photo_id', 'Photo', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('event_date', 'Date', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::date('event_date', \Carbon\Carbon::now())!!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('hour', 'Hour', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('hour', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('place', 'Place', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('place', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Create Event', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        </div>


        {!! Form::close() !!}

    </div>


@endsection