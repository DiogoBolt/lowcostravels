<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$flight->description}}">
    <meta name="keywords" content="{{$flight->country}},{{$flight->zone}} ,cheap flights, travel deals, air tickets, air deals, holiday, flights low cost, lowcostravels, low cost travels, last minute flights, voos baratos, viagens baratas, flights promotions, promocoes de viagens">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>





    <![endif]-->

    <style>

        .panel-heading a{
            color:black !important;
        }

        a:hover{
            color:greenyellow !important;
        }
        label{
            font-size:12px !important;
        }
        ._2Yxt0UffkEUTzOmXYgxn2s{
            font-size:12px !important;
        }
        ._2Q5YyVOtkLdAcusYyiofsh{
            font-size:12px !important;
        }

    </style>
</head >

<body id="app-layout">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div  class="navbar-header" >

            <a class="navbar-brand" href="/"><img src="/images/logo.png" style="max-width:55px; margin-top: -15px;"></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" style='color:white;font-size: 1.6em' class="dropdown-toggle" data-toggle="dropdown" role="button" >Flights by Zone</a>
                    <ul class="dropdown-menu">
                        <li><a href="/flightsbyzone/europe">Europe</a></li>
                        <li><a href="/flightsbyzone/asia">Asia</a></li>
                        <li><a href="/flightsbyzone/america">America</a></li>
                        <li><a href="/flightsbyzone/africa">Africa</a></li>
                        <li><a href="/flightsbyzone/oceania">Australia</a></li>

                    </ul>

                </li>
                <li>
                    <a style='color:white;font-size: 1.4em' href="#about">About Us</a>
                </li>
                <li>
                    <a style='color:white;font-size: 1.4em' href="#contact">Contact</a>
                </li>
            </ul>


            <form action="/" method="post" style="margin-top:5px;">
                <button class="btn btn-default" type="submit" style="display:inline;">Search</button>
                <input class="form-control" type="text" name="search" style="width:25%;display:inline;">

            </form>
            @if(Auth::user())
                <a href="/backoffice/contacts"> <div style="float:right;color:white;">
                        Contactos: <span id="contacts" style="color:white"></span>
                    </div>
                </a>
            @endif
        </div>

        <!-- /.navbar-collapse -->
    </div>


    <!-- /.container -->
</nav>


<div class="container">

    <div class="col-md-12" style="padding:10px;" >

        <div class="panel panel-default" style="max-width:715px;">
            <div class="panel-heading" align="left" style="background-color:#ebebeb">
                {{$flight->name}}<div style="float:right;color:green;"><h4 style="line-height:0px;margin-top:10px">{{$flight->price}}€</h4></div>
            </div>
            <div class="panel-body" style="background-color:#f8f8f8">

                <div class="col-md-6"><img src="{{ URL::to('/').'/'.$flight->picture }}" width="100%" height="100%"></div>
                <div class="col-md-6">
                    <p>{{$flight->description}}</p>
                </div>

                <div style="">{{$flight->tempo}} ago</div>
                {{--<div  style="width:50%;height:100%;float:left"><img src="{{ URL::to('/').'/'.$flight->affiliatepic1 }}" width="100%" height="100%"></div>--}}
            </div>
            <div style="margin-top:10px;float:right;" > <a href="{{$flight->url}}" target="_blank"class="btn btn-primary">Book Now</a></div>
        </div>

        <div class="fb-share-button" a href="{{$flight->facebookshare}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partilhar</a></div>


        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div align="left"><img src="{{ URL::to('/').'/'.$flight->affiliatepic1 }}" style="margin-top:30px;width:95%;max-width: 715px">
            <p>Atention this offer is temporary!</p>
        </div>
    </div>
    <div id="newflights" style="position:absolute;right:100px; width:200px; top:60px;">

    </div>

</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        var width = $(window).width();
        if(width>1100) {
            $.getJSON("/newflights", function (data) {
                $('#newflights').empty();

                $('#newflights').append('<h3>New Flights</h3>');
                for (flight in data) {

                    $('#newflights').append(' <div class="panel panel-default"> <div class="panel-heading" style="font-size:12px;"> <i class="fa fa-fw fa-check"></i>' + data[flight].name + '<div style="font-size:16px;float:right;color:green;">' + data[flight].price + '€</div> </div> <a href=/flights/' + data[flight].id + '> <div class="panel-body" style="height:100px;"><img src=/' + encodeURI(data[flight].picture) + ' style=margin-bottom:50px width=90px height=70px> <a href=' + data[flight].url + 'target=_blankclass=btn btn-primary>Book Now</a></div>');


                }
            });
        }
    });
    setInterval(function(){
        $.getJSON( "/newflights", function( data ) {
            $('#newflights').empty();
            $('#newflights').append('<h3>New Flights</h3>');

            for(flight in data)
            {

                $('#newflights').append(' <div class="panel panel-default"> <div class="panel-heading" style="font-size:12px;"> <i class="fa fa-fw fa-check"></i>'+ data[flight].name+'<div style="font-size:16px;float:right;color:green;">'+ data[flight].price +'€</div> </div> <a href=/flights/'+data[flight].id+'> <div class="panel-body" style="height:100px;"><img src=/'+encodeURI(data[flight].picture)+ ' style=margin-bottom:50px width=90px height=70px> <a href='+data[flight].url+ 'target=_blankclass=btn btn-primary>Book Now</a> </div>');


            }
        }); }, 3000);

    setInterval(function(){
        var width = $(window).width();
        if(width<1100)
        {

            $('#newflights').hide();
        }else{
            $('#newflights').show();
        }
    },1000);



</script>
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

@yield('scripts')
<script>
    setInterval(function(){
        $.getJSON("/contacts", function (data) {
            $('#contacts').empty();

            $('#contacts').html(data)
        });
    },2000);

</script>
<script>
    C = {
        // Number of days before the cookie expires, and the banner reappears
        cookieDuration : 2000,

        // Name of our cookie
        cookieName: 'complianceCookie',

        // Value of cookie
        cookieValue: 'on',

        // Message banner title
        bannerTitle: "Cookies:",

        // Message banner message
        bannerMessage: "This site uses cookies to deliver its services.",

        // Message banner dismiss button
        bannerButton: "OK",

        // Link to your cookie policy.
        bannerLinkURL: "/about_us",

        // Link text
        bannerLinkText: "Read more",

        // Text alignment
        alertAlign: "center",

        // Link text
        buttonClass: "btn-success btn-xs",

        createDiv: function () {
            var banner = $(
                    '<div class="alert alert-success alert-dismissible text-'+
                    this.alertAlign +' fade in" ' +
                    'role="alert" style="position: fixed; bottom: 0; width: 100%; ' +
                    'margin-bottom: 0"><strong>' + this.bannerTitle + '</strong> ' +
                    this.bannerMessage + ' <a href="' + this.bannerLinkURL + '">' +
                    this.bannerLinkText + '</a> <button type="button" class="btn ' +
                    this.buttonClass + '" onclick="C.createCookie(C.cookieName, C.cookieValue' +
                    ', C.cookieDuration)" data-dismiss="alert" aria-label="Close">' +
                    this.bannerButton + '</button></div>'
            )
            $("body").append(banner)
        },

        createCookie: function(name, value, days) {
            //console.log("Create cookie")
            var expires = ""
            if (days) {
                var date = new Date()
                date.setTime(date.getTime() + (days*24*60*60*1000))
                expires = "; expires=" + date.toGMTString()
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        },

        checkCookie: function(name) {
            var nameEQ = name + "="
            var ca = document.cookie.split(';')
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i]
                while (c.charAt(0)==' ')
                    c = c.substring(1, c.length)
                if (c.indexOf(nameEQ) == 0)
                    return c.substring(nameEQ.length, c.length)
            }
            return null
        },

        init: function() {
            if (this.checkCookie(this.cookieName) != this.cookieValue)
                this.createDiv()
        }
    }

    $(document).ready(function() {
        C.init()
    })
</script>
</body>
</html>



