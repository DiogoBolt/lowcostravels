<!doctype html>
<html>
<head>
    @include('includes.head')
    @yield('css')
</head>
<body>
<div class="container-fluid">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-2">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-10">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
@yield('scripts')
</body>
</html>