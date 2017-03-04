@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div style="color:pink;background-color:dimgray" class="panel-heading">Clientes</div>

                <div class="panel-body">
                    <table class="table table-hover table-striped table-condensed table-bordered">
                        <tr>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Data Fim</th>
                            <th>Preço</th>
                            <th>Highlight</th>
                        </tr>
                        @foreach($flights as $flight)
                            <tr>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->name}}</a></td>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->description}}</a></td>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->enddate}}</a></td>
                                <td><a href="/flights/{{$flight->id}}">{{$flight->price}}€</a></td>
                                @if($flight->highlighted == 0)
                                    <td align="center"><input type="checkbox" onchange="highlightflight({{$flight->id}})" ></td>
                                @else
                                    <td align="center"><input type="checkbox" onchange="highlightflight({{$flight->id}})" checked="checked"></td>
                                @endif

                            </tr>
                        @endforeach

                    </table>

                    <a href="/newflight">New Flight</a>
                </div>



</div>

            </div>
        </div>
    </div>


    <script>


        function highlightflight(flight)
        {
            $.ajax({
                type: 'POST',
                url: "/highlightflight",
                data: {
                    flight: flight
                }
            }).done();
        }
    </script>
@endsection

