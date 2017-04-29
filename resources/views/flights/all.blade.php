@extends('layouts.app')

@section('content')

<div class="container">
    <div style="margin-top:20px;margin-bottom:20px;width:80%" data-skyscanner-widget="SearchWidget" data-locale="en-GB" data-params="" data-location-name="'London'"></div>
    <div class="fb-page" id="fb" style="position:absolute; right:10px;top:80px;" data-href="https://www.facebook.com/lowcostravels/?fref=ts" data-tabs="timeline" data-width="230" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lowcostravels/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lowcostravels/?fref=ts">Lowcostravels</a></blockquote></div>
    <div class="row" style="width:87%">

        <div class="col-md-12">
        <form action="/" method="post">
            <select name="month" class="form-control" style="display:inline;width:150px;margin-bottom:25px">
                @if(Session::has('month'))
                <option value="{{Session::get('month')}}">{{DateTime::createFromFormat('!m', (int)Session::get('month'))->format('F')}}</option>
                @endif
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <button class="btn btn-default" type="submit" style="display:inline">Filter</button>


        </form>
        </div>

        @foreach($flights as $flight)
        <div class="col-md-4">
            <div class="panel panel-default" style=";height:360px;min-width: 292px;">
                <div class="panel-heading" style="background-color:#ebebeb;height:75px;min-width: 290px;">
                    <div class="col-lg-pull-0">
                        <a href="/flights/{{$flight->id}}"> {{$flight->name}}</a>
                    </div>



                        <div style="float:right;color:green;"><h4 style="line-height:0px;margin-top:12px">{{$flight->price}}€</h4></div></a>
                </div>
                <div class="panel-body" style="background-color:#f8f8f8;height:280px;min-width: 290px; ">
                    <a href="/flights/{{$flight->id}}"> <div style="text-align:center"><img src="{{ URL::to('/').'/'.$flight->picture }}" style="max-width:260px;height:200px"></div></a>
                     <div style="margin-top:20px;" > <a href="{{$flight->url}}" target="_blank" class="btn btn-primary">Book Now</a></div>
                    {{--<div style="margin-top:20px;display:inline;float:right" align="left"><h4>{{date('Y-m-d H:i',strtotime($flight->created_at))}}</h4></div>--}}
                    <div style="position:absolute;bottom:45px;right:25px;font-size:10px">{{$flight->tempo}} ago</div>
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
</div>
    <!-- /.row -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://widgets.skyscanner.net/widget-server/js/loader.js"></script>
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

