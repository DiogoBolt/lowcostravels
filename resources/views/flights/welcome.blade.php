

@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>TravelCheap</h1>
        <p></p>
        <p><a class="btn btn-primary btn-large">Call to action!</a>
        </p>
    </header>

    <div class="row" style="color: #636b6f">
        <div class="col-lg-12">
            <u><h3>Travel deals</h3></u>
        </div>
    </div>
    <div id="kayakSearchWidgetContainer"></div>
    <div class="col-md-12" style="float:left;">
        <div class="row">

            @foreach($newflights as $newflight)
                <div align="center" class="col-lg-12">

                    <h2>{{$newflight->name}}:{{$newflight->price}}€</h2>

                    <div style="float:left">  <a href="/flights/{{$newflight->id}}"> <img src="{{ URL::to('/').'/'.$newflight->picture }}" width="250px" height="250px"></a></div>
                    <div style="float:left;padding-left:20px"> <h4 style="color:dimgrey">{{$newflight->description}}</h4></div>

                </div>

            @endforeach



        </div>
    </div>



    {{--<div class="row" style="color: #636b6f ">--}}
        {{--<div class="col-lg-12">--}}
            {{--<u><h3 >Últimos Voos</h3></u>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-12",style="float:left;">--}}
    {{--<div class="row">--}}

        {{--@foreach($flights as $flight)--}}
            {{--<div align="center" class="col-lg-3">--}}

                {{--<h3>{{$flight->name}}</></h3>--}}
                {{--<p><a href="/flights/{{$flight->id}}"> <img src="{{ URL::to('/').'/'.$flight->picture }}" width="250px" height="250px"hspace="20">         </a></p>--}}
                {{--<h3 style="color: darkgreen"><center>{{$flight->price}}€</center></h3>--}}

            {{--</div>--}}

        {{--@endforeach--}}



        {{--</div>--}}

    {{--</div>--}}
    <!-- Title -->

    <!-- /.row -->

    <!-- Page Features -->
    {{--<div class="row text-center">--}}
        {{--@foreach($flights as $flight)--}}
            {{--@if($flight->highlighted == 1)--}}
                {{--<div class="thumbnail">--}}
                    {{--<img src="{{ URL::to('/').'/'.$flight->picture }}" width="200px" height="100px">--}}
                    {{--<div class="caption">--}}
                        {{--<h3>{{$flight->name}}</h3>--}}
                        {{--<h3>{{$flight->price}}€</h3>--}}
                        {{--<p>{{$flight->description}}</p>--}}
                        {{--<p>--}}
                            {{--<a href="#" class="btn btn-primary">Visitar</a>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
    {{--</div>--}}
    {{--@endif--}}
    {{--@endforeach--}}

    </div>
    <!-- /.row -->

    <!-- Footer -->


</div>
<!-- /.container -->

<!-- jQuery -->



    <script type="text/JavaScript" src="https://www.kayak.com/affiliate/widget.js"></script>
<script type="text/JavaScript">
    KAYAK.embed({
        container: document.getElementById("#kayakSearchWidgetContainer"),
        autoPosition: true,
        defaultProduct: "hotels",
        enabledProducts: ["hotels", "flights"],
        startDate: "2015-12-24"
        endDate: "2016-01-3"
        origin: "New York, NY",
        destination: "Boston, MA",
        baseURL: "www.kayak.co.uk",
        ssl: true,
        affiliateId: "acme_rpco"
    });

</script>
@endsection
