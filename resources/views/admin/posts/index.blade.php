@extends('layouts.admin')
@section('content')


    <div class="container">
        <h4 class="section-title">Posts</h4>
        <p>Lista postów</p>

        @if (session('status'))
            <div data-alert class="alert-box success">
                {{ session('status') }}
            </div>
        @endif

        @if($posts)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>User</th>
                <th>Photo</th>
                <th>Category</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>

                @foreach($posts as $post)

                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                        <td><img src="/images/{{$post->photo ? $post->photo->file : 'no photos'}}" alt="" height="50"></td>
                        <td>{{$post->category->name}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                    </tr>

                @endforeach

            </tbody>
        </table>

        @endif

        <p>No posts</p>
    </div>


@endsection