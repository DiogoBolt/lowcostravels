@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="color:orange;background-color:dimgray" class="panel-heading">{{$flight->name}}</div>

                <div class="panel-body">
                    <table class="table table-hover table-striped table-condensed table-bordered">
                        <tr>
                            <th>Where</th>
                            <th>From</th>
                            <th>Continent</th>
                            <th>Price</th>

                        </tr>
                        <tr>
                                <td>{{$flight->name}}</td>
                                <td>{{$flight->description}}</td>
                                <td>{{$flight->zone}}</td>
                                <td>{{$flight->price}}€</td>
                        </tr>
                    </table>

                    <center>  <img src="{{ URL::to('/').'/'.$flight->picture }}" width="900px" height="500px"></center>
                </div>
            </div>

            </div>
        </div>
    </div>


    <script>


        $( "#servico" ).change(function() {
            id = $( "#servico" ).val()
            $.get( "/getpreco/"+id, function( data ) {
                $( "#valor" ).html(data+'€');

            });
        });
    </script>
@endsection

