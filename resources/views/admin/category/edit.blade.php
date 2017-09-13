@extends('layouts.admin')
@section('content')



    <div class="container">

        <div class="col-sm-6 col-xs-12">
            <h4 class="section-title">Edit a Category</h4>
            <hr>
            @include('includes.forms.error')
        </div>

        <div class="row">
            <div class="col-sm-12">
                {!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id]]) !!}

                <div class="col-sm-12">

                    <div class="form-group row">
                        {!! Form::label('name', 'Name', ['class' => 'col-2 col-form-label']) !!}
                        <div class="col-10">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Edit Category', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                </div>

                {!! Form::close() !!}

                {!!  Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]])!!}

                <div class="col-sm-12">

                    <div class="form-group">
                        {!! Form::submit('Delete Category', ['class' => 'btn btn-danger btn-block']) !!}
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection