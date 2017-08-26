<html>
<head>
    @include('includes.head')
</head>
<body class="header-style-1">
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>
    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        {{--@include('includes.foot')--}}
    </footer>

</div>
</body>
</html>