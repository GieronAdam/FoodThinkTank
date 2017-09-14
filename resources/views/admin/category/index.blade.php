@extends('layouts.admin')
@section('content')


    <div class="container">
            <h4 class="section-title">Create a Category</h4>
            <hr>
            @include('includes.forms.error')
            @if (session('status'))
                <div data-alert class="alert-box success">
                    {{ session('status') }}
                </div>
            @endif
        <div class="row">
            <div class="col-sm-4">

                {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}

                <div class="col-sm-12">

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
            <div class="col-sm-8">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @if($categories)

                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td>
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-secondary">Edit</a>
                                </td>
                                <td>
                                    {!!  Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]])!!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger ']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                        @endforeach

                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection