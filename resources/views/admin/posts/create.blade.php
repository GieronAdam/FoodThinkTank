@extends('layouts.admin')
@section('content')



    <div class="container">
        <h4 class="section-title">Create a Post</h4>

        @include('includes.forms.error')

        {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true]) !!}

        <div class="col-sm-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', ['' => 'Choose option'] + $categories, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Content') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>


        {!! Form::close() !!}

    </div>


@endsection