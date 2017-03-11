@extends('layouts.app')

@section('content')
<div class="container">
    <div class="fb-page" style="position:absolute; right:10px;top:80px;" data-href="https://www.facebook.com/lowcostravels/?fref=ts" data-tabs="timeline" data-width="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lowcostravels/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lowcostravels/?fref=ts">Lowcostravels</a></blockquote></div>
    <div class="row" style="width:87%">
        <div class="col-lg-12" style="height:30px;">

        </div>
        <form action="/" method="post">
            <button class="btn btn-default" type="submit" style="display:inline-block;margin-left:15px">Search</button>
            <input class="form-control" type="text" name="search" style="width:30%;display:inline-block;margin-bottom:10px">

        </form>

        @foreach($flights as $flight)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:lightblue">
                  <a href="/flights/{{$flight->id}}"> <h4 style="display:inline"><i class="fa fa-fw fa-check"></i>{{$flight->name}}</h4><div style="float:right;color:green;"><h3 style="line-height:0px;margin-top:10px">{{$flight->price}}€</h3></div></a>
                </div>
                <div class="panel-body" style="background-color:lightgrey">
                    <a href="/flights/{{$flight->id}}"> <div style="text-align:center"><img src="{{ URL::to('/').'/'.$flight->picture }}" width="200px" height="200px"></div></a>
                     <div style="margin-top:20px;display:inline-block" align="right"> <a href="http://{{$flight->url}}" target="_blank" class="btn btn-primary">Book Now</a></div>
                    {{--<div style="margin-top:20px;display:inline;float:right" align="left"><h4>{{date('Y-m-d H:i',strtotime($flight->created_at))}}</h4></div>--}}
                    <div style="margin-top:20px;display:inline;float:right;font-size:10px" align="left">{{$flight->tempo}} ago</div>
                </div>
            </div>
        </div>
            @endforeach
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->

    <!-- /.row -->




@endsection

