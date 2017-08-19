@extends('layouts.admin')
@section('content')

    {!! Form::open([
        'route' => 'admin.store'
    ]) !!}

    <table>
        <tr>
            <td>{!! Form::label('title', 'Title', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::text('title', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('slug', 'Slug', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::text('slug', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('category', 'Category', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::select('category', array('projects'=>'Projekty','peoples'=>'Ludzie','additional_activities'=>'Działania dodatkowe','lab'=>'Pracownia','initiative'=>'Inicjatywy'), null) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('author', 'Author', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::select('author', array( Auth::user()->name =>  Auth::user()->name )) !!}</td>
        </tr>
        <tr>
            <td valign="top">{!! Form::label('short_description', 'Short Description', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::textarea('short_description', null, ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td valign="top">{!! Form::label('full_content', 'Full Content', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::textarea('full_content', null, ['class' => 'form-control','id' => 'summernote']) !!}</td>
        </tr>
        <tr>
            <td></td>
            <td>{!! Form::submit('Submit', ['class' => 'btn btn-submit']) !!}</td>
        </tr>
    </table>

    {!! Form::close() !!}


@endsection