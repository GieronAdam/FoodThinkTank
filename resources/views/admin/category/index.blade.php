@extends('layouts.admin')
@section('content')


    <div class="container">
        <h4 class="section-title">Categories</h4>
        <p>Tabela kategorii</p>

        @if (session('status'))
            <div data-alert class="alert-box success">
                {{ session('status') }}
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>>
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
                        <td colspan="2"><a href="{{route('categories.edit', $category->id)}}" class="btn btn-secondary">Edit</a></td>
                    </tr>

                @endforeach

            @endif

            </tbody>
        </table>
    </div>


@endsection