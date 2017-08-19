@extends('layouts.admin')
@include('includes.head')
@section('admin')
<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    <h1>add post</h1>
                    <div class="panel-body__wyswig">
                        tu bedzie wyswig
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@include('includes.foot')
