@extends('layouts.admin')
@section('content')



    <div class="container">
        <div class="col-sm-6 col-xs-12">
            <h4 class="section-title">Edit a Post</h4>
            <hr>
            @include('includes.forms.error')
        </div>

        <div class="row">
            <div class="col-sm-8">


            {!! Form::model($post, ['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files' => true]) !!}

            <div class="col-sm-12">

                <div class="form-group row">
                    {!! Form::label('title', 'Title', ['class' => 'col-2 col-form-label']) !!}
                    <div class="col-10">
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('category_id', 'Category', ['class' => 'col-2 col-form-label']) !!}
                    <div class="col-10">
                        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
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
                    {!! Form::submit('Update Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>

            </div>
            {!! Form::close() !!}

                {!!  Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]])!!}

                <div class="col-sm-12">

                    <div class="form-group">
                        {!! Form::submit('Delete Post', ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                </div>

                {!! Form::close() !!}

            </div>

            <div class="col-sm-4">
                <img src="/images/{{$post->photo ? $post->photo->file : 'no foto'}}" alt="" class="img-thumbnail" height="50">
            </div>
        </div>
    </div>


@endsection