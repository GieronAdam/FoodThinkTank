@extends('layouts.admin')
@section('content')



    <div class="container">

        <div class="col-sm-6 col-xs-12">
            <h4 class="section-title">Create a Category</h4>
            <hr>
            @include('includes.forms.error')
        </div>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}

        <div class="col-sm-6 col-xs-12">

            <div class="form-group row">
                {!! Form::label('name', 'Name', ['class' => 'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Create category', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        </div>


        {!! Form::close() !!}

    </div>


@endsection