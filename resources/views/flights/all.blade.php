@extends('layouts.app')

@section('content')

<div class="container">
    <p></p>
    <a href="http://www.kqzyfj.com/click-8302860-12805750" target="_blank">
        <img src="http://www.tqlkg.com/image-8302860-12805750" width=80% height="90" alt="" border="0"/></a>
    {{--<div style="margin-top:20px;margin-bottom:20px;width:80%" data-skyscanner-widget="SearchWidget" data-locale="en-GB" data-params="" data-location-name="'London'"></div>--}}
    <div class="fb-page" id="fb" style="position:absolute; right:10px;top:80px;" data-href="https://www.facebook.com/lowcostravels/?fref=ts" data-tabs="timeline" data-width="230" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lowcostravels/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lowcostravels/?fref=ts">Lowcostravels</a></blockquote></div>
    <p></p>
    <div class="row" style="width:87%">

        <div class="col-md-12" style="margin-bottom: 20px">
        <form action="/" method="post">

           <input type="date" name="from" value="{{Session::has('from')? Session::get('from'):''}}">
           <input type="date" name="to" value="{{Session::has('to')? Session::get('to'):''}}">

            <button class="btn btn-default" type="submit" style="display:inline">Filter by date</button>


        </form>
        </div>

        @foreach($flights as $flight)
        <div class="col-md-4">
            <div class="panel panel-default" style=";height:360px;min-width: 292px;">
                <div class="panel-heading" style="background-color:#ebebeb;height:60px;min-width: 290px;">
                    <div class="col-lg-pull-0">
                        <a href="/flights/{{$flight->id}}"> {{$flight->name}}</a>
                    </div>



                        <div style="float:right;color:green;"><h3 style="line-height:0px;margin-top:-8px">{{$flight->price}}€</h3></div></a>
                </div>
                <div class="panel-body" style="background-color:#f8f8f8;height:280px;min-width: 290px; ">
                    <a href="/flights/{{$flight->id}}"> <div style="text-align:center"><img src="{{ URL::to('/').'/'.$flight->picture }}" style="max-width:260px;height:200px"></div></a>
                     <div style="margin-top:12px;" > <a href="{{$flight->url}}" target="_blank" class="btn btn-primary">Fly Low Cost</a></div>
                    {{--<div style="margin-top:20px;display:inline;float:right" align="left"><h4>{{date('Y-m-d H:i',strtotime($flight->created_at))}}</h4></div>--}}
                    <p/>
                    <div style="font-size:10px; margin-bottom:10px;">{{$flight->tempo}} ago</div>
                </div>
            </div>
        </div>
            @endforeach
        </div>

    <!-- /.row -->

    <!-- Portfolio Section -->

    <!-- /.row -->

    <!-- Features Section -->
    <div class="row"  style="padding:10px">
        <div class="featurette" id="about">
        <div class="col-md-12">
            <h2 class="page-header">About Us</h2>
        </div>
        <div class="col-md-6">
            <p>Our main goals are:</p>
            <ul>
                <li><strong>Help you Travel</strong>
                </li>
                <li>Help you find the best prices</li>
                <li>Provide an easy way to find flights and travel tips</li>
                <li>Atencion every offer is temporary!</li>
            </ul>
            <p>Travelling is always an Adventure! Our Website is the best tool to help you with tips for your next vacation. We can provide you with the most pleasant destinations at the lowest cost. You will have access to the best resources online through our links.</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="/images/logo.png" alt="">
        </div>
    </div>
        </div>

    <div class="featurette" id="contact">
        <div class="col-md-12">
            <h2 class="page-header">Contact</h2>
        </div>
        <div class="col-md-12">
            <form action="/contactus" method="post">
                <div class="form-group">
                    Email : <input class="form-control" name="email">

                    Message: <textarea class="form-control" name="message">

                    </textarea>
                    <button class="btn btn-default" type="submit">Send</button>

                </div>

            </form>
        </div>

    </div>
    <h1>Low Cost Travels - Flight Deals</h1>
</div>
    <!-- /.row -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://widgets.skyscanner.net/widget-server/js/loader.js"></script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
   "name": "Low Cost Travels",
  "alternateName": "Low Cost Flights",
  "url": "http://www.lowcostravels.com",
  "logo": "http://www.lowcostravels.com/images/logo.png",
  "sameAs": [
    "https://www.facebook.com/lowcostravels/",
    "https://twitter.com/Low_CostTravels",
    "https://twitter.com/Low_CostTravels",
    "https://lowcostravels.tumblr.com/"
  ]
}
</script>
<script>

    $( document ).ready(function() {
        var width = $(window).width();
        if(width<1000)
        {

            $('#fb').hide();
        }
    });

    setInterval(function(){
        var width = $(window).width();
        if(width<1100)
        {

            $('#fb').hide();
        }else{
            $('#fb').show();
        }
    },1000);

</script>




@endsection

