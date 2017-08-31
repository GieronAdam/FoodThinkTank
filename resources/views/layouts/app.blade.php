<html>
<head>
    @include('includes.head')
</head>
<body class="header-style-1">
<div>

    <header >
        @include('includes.header')
    </header>
    <div id="main">

        @yield('content')

    </div>

    <footer>
        {{--@include('includes.foot')--}}
    </footer>

</div>
</body>
</html>