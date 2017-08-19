@include('includes.head')
@include('includes.header')
    @foreach($projects as $project)
        <h1>{{$project->title}} </h1>
        <p>{{$project->author}}</p>
        <p>{{$project->short_description}}</p>
        <p>{{$project->full_content}}</p>
    @endforeach
<!-- Showing Pagination Links -->
<style>
    ul {display:inline-block}
    li {display:inline; padding:5px}
</style>
<div> {{ $projects->links() }} </div>
<!-- End Showing Pagination Links -->
@include('includes.foot')