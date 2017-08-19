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
        @include('includes.header')
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