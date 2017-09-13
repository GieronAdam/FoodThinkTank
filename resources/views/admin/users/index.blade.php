@extends('layouts.admin')
@section('content')


    <div class="container">
        <h4 class="section-title">Users</h4>
        <p>Tabela uzytkownikow</p>

        @if (session('status'))
             <div data-alert class="alert-box success">
                 {{ session('status') }}
             </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Photo</th>
                <th>E-mail</th>
                <th>Role</th>
                <th>Is Active?</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>

            @if($users)

                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td><img src="/images/{{$user->photo ? $user->photo->file : 'no photos'}}" alt="" height="50"></td>
                    <td>{{$user->email}}</td>g
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'No active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td colspan="2"><a href="{{route('users.edit', $user->id)}}" class="btn btn-secondary">Edit</a></td>
                </tr>

                @endforeach

            @endif

            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="card">
                    <div class="col-sm-12">
                    <img class="card-img-top" src="..."  height="70px" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">User name</h4>
                        <h5>email</h5>
                        <p>Status: </p>
                        <hr>
                        <p>Role: </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection