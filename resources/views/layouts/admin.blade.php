<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <div class="row">
        @yield('admin')
    </div>
    <header class="row">

    </header>
    <div id="main" class="row">

        @yield('content')


    </div>

    <footer class="row">
        @include('includes.foot')
    </footer>

</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote({
            height:300,
        });
    });
</script>