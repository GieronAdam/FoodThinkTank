@extends('layouts.admin')
@section('content')



    <div class="container">
        <h4 class="section-title">Create a User</h4>

        @include('includes.forms.error')

        {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}

        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role') !!}
                {!! Form::select('role_id', ['' => 'Choose option'] + $roles, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status') !!}
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not active'), 0, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>


        {!! Form::close() !!}

    </div>


@endsection