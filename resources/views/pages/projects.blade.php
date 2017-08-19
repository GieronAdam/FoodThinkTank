@include('includes.head')
@include('includes.header')
    @foreach($projects as $project)
        <h1>{{$project->title}} </h1>
        <p>{{$project->author}}</p>
        <p>{{$project->short_description}}</p>
        <p>{{$project->full_content}}</p>
    @endforeach
@include('includes.foot')