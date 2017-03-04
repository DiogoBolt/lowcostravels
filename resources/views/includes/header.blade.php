<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChangeLog</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                BetPortugal
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

                @if(Auth::user())

                    @if(Auth::user()->permission == '1')
                        <li><a href="/list">Lista</a></li>
                        <li><a href="/listimp">CAR</a></li>
                        <li><a href="/listexc">Excluded</a></li>
                        <li><a href="/listnot">Unchecked</a></li>
                        <li><a href="/different">Updated Files</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/upload">Upload</a></li>
                                <li><a href="/sample">Sample</a></li>
                                <li><a href="/export">Exportar Para Excel</a></li>
                                <li><a href="/getall">Atualizar projecto</a></li>
                            </ul>
                        @else
                        {{Auth::user()->permission}}
                        <li><a href="#">Gerir Issues</a></li>

                        @endif

                        @endif


                        <!-- Right Side Of Navbar -->

                            <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
            @endif
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="/list">Lista</a></li>
                <li><a href="/listimp">CAR</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CAR Actions <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/listexc">Excluded</a></li>
                        <li><a href="/listnot">Unchecked</a></li>
                    </ul>
                </li>
                <li><a href="/different">Updated Files</a></li>
                <li><a href="/branches">Check 2 Branches</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/upload">Upload Baseline</a></li>
                        <li><a href="/sample">Sample</a></li>
                        <li><a href="/changelog">Create ChangeLog</a></li>
                        <li><a href="/export">Exportar Para Excel</a></li>
                        <li><a href="/getall">Atualizar projecto</a></li>
                        <li><a href="/issues">Atualizar InfoGitlab(Demora tempo)</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
