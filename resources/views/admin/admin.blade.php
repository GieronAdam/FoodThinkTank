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
                    <a href="{{route('admin.create')}}">Create Post</a>
                    <div class="panel-body__wyswig">
                        @include('admin.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @isset($success)
        {{ $success }}
    @endisset
</div>
@stop
<script type="text/javascript" src="{{asset('src/js/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.tinymce",
        plugins: [
            "adylist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern",

        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>

