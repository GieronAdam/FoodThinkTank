@include('includes.head')
@include('includes.header')
{{$path}}
@foreach($datas as $data)
    <a href="{{route('peoples.index')}}/{{$data->slug}}">
        <h1>{{$data->title}} </h1>
        <h4 style="color:red;">{{$data->category}}</h4>
    </a>
    <p>{{$data->author}}</p>
    <p>{{$data->short_description}}</p>
    <p>{{$data->full_content}}</p>

@endforeach
<!-- Showing Pagination Links -->
<style>
    ul {display:inline-block}
    li {display:inline; padding:5px}
</style>
<div> {{ $datas->links() }} </div>
<!-- End Showing Pagination Links -->
@include('includes.foot')