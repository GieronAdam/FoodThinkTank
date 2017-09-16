@extends('layouts.admin')
@section('content')


    <div class="container">
        <h4 class="section-title">Users</h4>
        @if (session('status'))
             <div class="alert alert-success" role="alert">
                 {{ session('status') }}
             </div>
        @endif
    </div>

    <div class="container">
        <div class="row">
            @foreach($users as $user)
            <div class="col-sm-3 col-xs-12">
                <div class="card user-admin-card">
                        @if($user->photo)
                        <img class="card-img-top admin-user-photo" style="background-image: url('/images/{{$user->photo->file}}')">
                        @else
                            <p>no photo</p>
                        @endif
                    <div class="col-xs-12">
                        <div class="card-block">
                            <h4 class="card-title">{{$user->name}}</h4>
                            <h5 class="card-email">{{$user->email}}</h5>
                            <p class="card-status"><strong>Status: </strong>
                                @if($user->is_active == 1)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">No active</span>
                                @endif
                            <hr>
                            <p><strong>Role: </strong>{{$user->role->name}}</p>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><strong>Created At</strong></p>
                                    <p>{{$user->created_at->diffForHumans()}}</p>
                                </div>
                                <div class="col-sm-6">
                                    <p><strong>Updated At</strong></p>
                                    <p>{{$user->updated_at->diffForHumans()}}</p>
                                </div>
                            </div>
                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection