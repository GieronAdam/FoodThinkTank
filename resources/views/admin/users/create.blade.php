@extends('layouts.admin')
@section('content')



    <div class="container">

        <div class="col-sm-6 col-xs-12">
            <h4 class="section-title">Create a User</h4>
            <hr>
            @include('includes.forms.error')
        </div>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => true]) !!}

        <div class="col-sm-6 col-xs-12">

            <div class="form-group row">
                    {!! Form::label('name', 'Name', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('email', 'Email', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('password', 'Password', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('photo_id', 'Photo', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('role_id', 'Role', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::select('role_id', ['' => 'Choose option'] + $roles, null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('is_active', 'Status', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not active'), 0, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Create User', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        </div>


        {!! Form::close() !!}

    </div>


@endsection