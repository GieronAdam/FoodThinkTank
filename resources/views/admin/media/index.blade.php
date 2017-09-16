@extends('layouts.admin')
@section('content')


    <div class="container">
        <h4 class="section-title">Media</h4>
        <p>Lista postów</p>

        @if (session('status'))
            <div data-alert class="alert-box success">
                {{ session('status') }}
            </div>
        @endif

        @if($photos)

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($photos as $photo)

                    <tr>
                        <td>{{$photo->id}}</td>
                        <td>{{$photo->file}}</td>
                        <td><img src="/images/{{$photo->file}}" alt="" height="50"></td>
                        <td>{{$photo->created_at}}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>

        @endif

        <p>No posts</p>
    </div>


@endsection