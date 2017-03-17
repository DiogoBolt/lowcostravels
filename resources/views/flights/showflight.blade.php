@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-md-12" style="padding:10px;" align="center">

        <div class="panel panel-default" style="position:absolute; right:300px; height:300px; width:700px; margin-top: 15px">
            <div class="panel-heading" align="left" style="background-color:#ebebeb">
                <h4 style="display:inline"><i class="fa fa-fw fa-check"></i>{{$flight->name}}</h4><div style="float:right;color:green;"><h3 style="line-height:0px;margin-top:10px">{{$flight->price}}€</h3></div>
            </div>
            <div class="panel-body" style="position:absolute; height:300px; width:700px;background-color:#f8f8f8">

                <div  style="width:50%;height:100%;float:left"><img src="{{ URL::to('/').'/'.$flight->picture }}" width="100%" height="100%"></div>
                <div align="left" style="font-size:14px;margin-left:340px;">
                <p>{{$flight->description}}</p>
                </div>
                <div style="margin-top:20px;display:inline;float:right;font-size:10px" >{{$flight->tempo}} ago</div>
                {{--<div  style="width:50%;height:100%;float:left"><img src="{{ URL::to('/').'/'.$flight->affiliatepic1 }}" width="100%" height="100%"></div>--}}
            </div>
            <div style="margin-top:315px;float:right;" > <a href="{{$flight->url}}" target="_blank"class="btn btn-primary">Book Now</a></div>
        </div>

        <div style="margin-top:370px; margin-right:730px;" class="fb-share-button" a href="{{$flight->facebookshare}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partilhar</a></div>


        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div align="left"><img src="{{ URL::to('/').'/'.$flight->affiliatepic1 }}" style="margin-top:30px;width:80%"></div>
    </div>
    <div id="newflights" style="position:absolute;right:100px; width:200px; top:60px;">

    </div>

</div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.getJSON( "/newflights", function( data ) {
            $('#newflights').empty();

            $('#newflights').append('<h3>New Flights</h3>');
            for(flight in data)
            {

                $('#newflights').append(' <div class="panel panel-default"> <div class="panel-heading" style="font-size:12px;"> <i class="fa fa-fw fa-check"></i>'+ data[flight].name+'<div style="font-size:16px;float:right;color:green;">'+ data[flight].price +'€</div> </div> <a href=/flights/'+data[flight].id+'> <div class="panel-body" style="height:100px;"><img src=/'+encodeURI(data[flight].picture)+ ' style=margin-bottom:50px width=90px height=70px> <a href='+data[flight].url+ 'target=_blankclass=btn btn-primary>Book Now</a></div>');


            }
        });
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

</script>
@endsection

