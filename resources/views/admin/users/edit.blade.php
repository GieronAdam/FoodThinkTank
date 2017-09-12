@extends('layouts.admin')
@section('content')



    <div class="container">
        <h4 class="section-title">Edit User</h4>

            @include('includes.forms.error')

            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

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

                <img src="/images/{{$user->photo ? $user->photo->file : 'no foto'}}" alt="" class="img-responsive img-rounded" height="50">

                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo') !!}
                    {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('role_id', 'Role') !!}
                    {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('is_active', 'Status') !!}
                    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not active'), null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>

            {!! Form::close() !!}

    </div>


@endsection