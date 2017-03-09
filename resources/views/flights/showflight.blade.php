@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-md-12" style="padding:10px;" align="center">

        <div class="panel panel-default" style="width:500px;">
            <div class="panel-heading" align="left">
                <h4 style="display:inline"><i class="fa fa-fw fa-check"></i>{{$flight->name}}</h4><div style="float:right;color:green;"><h3 style="line-height:0px;margin-top:10px">{{$flight->price}}€</h3></div>
            </div>
            <div class="panel-body" style="height:300px;">

                <div  style="width:50%;height:100%;float:left"><img src="{{ URL::to('/').'/'.$flight->picture }}" width="100%" height="100%"></div>
                <div align="left" style="font-size:14px;margin-left:240px;">
                <p>{{$flight->description}}</p>
                </div>
                <div style="position:absolute;top:3%; left:45%;"><h4>{{date('Y-m-d H:i',strtotime($flight->created_at))}}</h4></div>
            </div>
            <div style="margin-top:15px;float:right;" > <a href="#" class="btn btn-default">Book Now</a></div>
        </div>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div class="fb-share-button" a href="{{$flight->facebookshare}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partilhar</a></div>

    </div>
    <div id="newflights" style="position:absolute;right:100px; width:100px; top:60px;">

    </div>
</div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.getJSON( "/newflights", function( data ) {
            $('#newflights').empty();

            for(flight in data)
            {

                $('#newflights').append(' <div class="panel panel-default"> <div class="panel-heading" style="font-size:12px;"> <i class="fa fa-fw fa-check"></i>'+ data[flight].name+'<div style="font-size:10px;float:right;color:green;">'+ data[flight].price +'€</div> </div> <a href=/flights/'+data[flight].id+'> <div class="panel-body" style="height:80px;"><img src=/'+encodeURI(data[flight].picture)+ ' width=60px height=60px></div>');


            }
        });
    });
    setInterval(function(){
        $.getJSON( "/newflights", function( data ) {
            $('#newflights').empty();

            for(flight in data)
            {

                $('#newflights').append(' <div class="panel panel-default"> <div class="panel-heading" style="font-size:12px;"> <i class="fa fa-fw fa-check"></i>'+ data[flight].name+'<div style="font-size:10px;float:right;color:green;">'+ data[flight].price +'€</div> </div> <a href=/flights/'+data[flight].id+'> <div class="panel-body" style="height:80px;"><img src=/'+encodeURI(data[flight].picture)+ ' width=60px height=60px></div>');


            }
        }); }, 3000);

</script>
@endsection

