@extends('layouts.admin')
@section('content')



    <div class="container">
        <h4 class="section-title">Upload Media</h4>

        @include('includes.forms.error')

        {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true]) !!}



        {!! Form::close() !!}

    </div>


@endsection