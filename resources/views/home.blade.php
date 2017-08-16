@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    Here will be some admin panel
                </div>
                <div class="panel-body__test">
                    test test
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
