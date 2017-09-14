@extends('layouts.admin')
@section('content')



    <div class="container">
        <div class="col-sm-6 col-xs-12">
            <h4 class="section-title">Create a Post</h4>
            <hr>
            @include('includes.forms.error')
        </div>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true]) !!}

        <div class="col-sm-6 col-xs-12">

            <div class="form-group row">
                {!! Form::label('title', 'Title', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('category_id', 'Category', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::select('category_id', ['' => 'Choose option'] + $categories, null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                {!! Form::label('photo_id', 'Photo', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                </div>
            </div>



            <div class="form-group row">
                {!! Form::label('body', 'Content', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
            </div>


            <div class="form-group">
                {!! Form::submit('Create Post', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        </div>


        {!! Form::close() !!}

    </div>


@endsection