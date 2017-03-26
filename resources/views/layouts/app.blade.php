<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="cheap flight deals, cheap flights, travel deals, air tickets, air deals, save money, holiday, flights low cost">
    <meta name="author" content="LowCostravels">
    <meta name="verification" content="4e7c4154c463887d03a1d53383f8675e" />

    <title>Low Cost Travels</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/one-page-wonder.css" rel="stylesheet">

    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=332782890067229";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93491679-1', 'auto');
        ga('send', 'pageview');

    </script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="/js/jquery.js"></script>





    <![endif]-->

    <style>

        .panel-heading a{
            color:black !important;
        }

        a:hover{
            color:greenyellow !important;
        }

    </style>
    </head >

    <body id="app-layout">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div  class="navbar-header" >

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{--<a class="navbar-brand" href="/">LowCosTravels</a>--}}
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div style="float:left">
                    <a href="/">  <img src="/images/logo.png"  height="55px"> </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" style='color:white;font-size: 1.6em'class="dropdown-toggle" data-toggle="dropdown" role="button" >Flights by Zone</a>
                        <ul class="dropdown-menu">
                            <li><a href="/flightsbyzone/europe">Europe</a></li>
                            <li><a href="/flightsbyzone/asia">Asia</a></li>
                            <li><a href="/flightsbyzone/america">America</a></li>
                            <li><a href="/flightsbyzone/africa">Africa</a></li>
                            <li><a href="/flightsbyzone/oceania">Australia</a></li>

                        </ul>

                    </li>
                </ul>
                <ul></ul>
                <form action="/" method="post">
                    <button class="btn btn-default" type="submit" style="display:inline-block;margin-left:22%">Search</button>
                    <input class="form-control" type="text" name="search" style="width:25%;display:inline-block;margin-bottom:10px">

                </form>
            </div>

            <!-- /.navbar-collapse -->
        </div>


        <!-- /.container -->
    </nav>


        @yield('content')
    <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright © Low Cost Travels 2017</p>
                    </div>
                </div>
            </footer>
    </div>
    <!-- Footer -->


        <!-- JavaScripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('scripts')
</body>
</html>
