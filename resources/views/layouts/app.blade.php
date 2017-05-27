<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LowCosTravels is the best tool to help you with tips for your next vacation. We can provide you with the most pleasant destinations at the lowest cost. You will have access to the best resources online through our links.">
    <meta name="keywords" content="cheap flight deals, cheap flights, travel deals, air tickets, air deals, save money, holiday, flights low cost, lowcostravels, low cost travels, last minute flights, voos baratos, viagens baratas, flights promotions, promocoes de viagens">
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
