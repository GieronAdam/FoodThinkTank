@extends('layouts.admin')
@section('content')



    <div class="container">

            <div class="col-sm-6 col-xs-12">
                <h4 class="section-title">Edit a User</h4>
                <hr>
                @include('includes.forms.error')
            </div>

            <div class="row">
                <div class="col-sm-8">
                    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

                    <div class="col-sm-12">

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
                                {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('is_active', 'Status', ['class' => 'col-2 col-form-label']) !!}
                            <div class="col-10">
                                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not active'), null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Edit User', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}

                    {!!  Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]])!!}

                    <div class="col-sm-12">

                        <div class="form-group">
                            {!! Form::submit('Delete User', ['class' => 'btn btn-danger btn-block']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>

                <div class="col-sm-4">

                    <img src="/images/{{$user->photo ? $user->photo->file : 'no foto'}}" alt="" class="img-thumbnail" height="50">

                </div>
            </div>
    </div>


@endsection