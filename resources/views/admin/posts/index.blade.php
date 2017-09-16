@extends('layouts.admin')
@section('content')


    <div class="container">
        <h4 class="section-title">Posts</h4>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if(count($posts) >1 )

        <table class="table table-striped">
            <thead class="thead-inverse">
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
                        <td>{{str_limit($post->title,25)}}</td>
                        <td>{{$post->user->name}}</td>
                        <td><img src="/images/{{$post->photo ? $post->photo->file : 'no photos'}}" alt="" height="50"></td>
                        <td>{{$post->category->name}}</td>
                        <td>{{str_limit($post->body,80)}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-secondary">Edit</a></td>
                    </tr>

                @endforeach

            </tbody>
        </table>

        @else

            <p>No posts</p>


        @endif


    </div>


@endsection